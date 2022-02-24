<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Reference;
use App\Models\Voucher;
use Illuminate\Http\Request;
use Openpay\Data\Openpay;
use Stripe\StripeClient;

class TerminalController extends Controller
{
    public function index(){
        $orders = Order::where('user_id',auth()->user()->id)->get();
        return view('terminal.dashboard',compact('orders'));
    }

    public function order(Order $order){
        $splits = $order->references->where('status',1);
        return view('terminal.bill',compact('splits','order'));
    }

    public function checkout(Request $request){
        $total = 0;
        $description="";
        $order= json_decode($request->order);
        $splits = $request->splits;
        $references = [];
        foreach ($request->splits as $split) {
            $reference = Reference::find($split);
            array_push($references,$reference);
            $total = $reference->amount+$total;
        }

        session([
            'description' => $order->contract,
            'references'=> $references,
            'total' => $total
        ]);
        return view('terminal.checkout',compact('total','splits','references','order'));
    }

    public function payment(Request $request){

        /* return $request->all(); */
        /* return $request->all();
        $openpay = Openpay::getInstance(config('openpay.merchant_id'), config('openpay.private_key'), config('openpay.country_code'));
        $voucher = Voucher::create();
        $customer = [
            'name' => $request->name,
            'last_name' => $user->last_name,
            'phone_number' => auth()->user()->phone,
            'email' => auth()->user()->email,
            'requires_account' => false,
        ];
        $chargeData = [
            'method' => 'card',
            'source_id' => $request->token_id,
            'amount' =>  session()->get('total'),
            'currency' => 'USD',
            'confirm' => false,
            'description' => session()->get('description'),
            'order_id' => $voucher->id,
            'device_session_id' => $request->deviceIdHiddenFieldName,
            'redirect_url' => config('app.url') . '/checkout/directChargeOpenpay/responsepayment',
            'use_3d_secure' => 'true',
            'customer' => $customer
        ];

        $charge = $openpay->charges->create($chargeData);
        $url3D = $charge->serializableData["payment_method"]->url;
        return redirect($url3D); */

        $stripe = new StripeClient(config('stripe.stripe_secret'));
        $token = $stripe->tokens->create([
            'card' => [
                'number' => $request->card,
                'exp_month' => $request->expiration_month,
                'exp_year' => $request->expiration_year,
                'cvc' => $request->cvv,
            ],
        ]);

        $charge = $stripe->charges->create([
            'amount' => (session()->get('total')*100)*21.50,
            'currency' => 'mxn',
            'source' => $token->id,
            'description' => session()->get('description'),
        ]);


        if ($charge->captured) {
            foreach (session()->get('references') as $reference) {
                $reference = Reference::find($reference->id);
                $reference->status = 2;
                $reference->update();
            }
            return redirect()->route('terminal.aproved');
        }else{
            return redirect()->route('terminal.index');
        }
    }

    public function validateChargeOpenPay()
    {
        $idOrderOpenPay = $_GET['id'];
        $openpay = Openpay::getInstance(config('openpay.merchant_id'), config('openpay.private_key'), config('openpay.country_code'));
        $charge = $openpay->charges->get($idOrderOpenPay);
        $idOrder = $charge->serializableData["order_id"];
        $validationCharge = $charge->status;
        /* return $validationCharge; */

        $voucher = Voucher::find($idOrder);

        if ($validationCharge == 'completed') {
            foreach (session()->get('references') as $reference) {
                $reference = Reference::find($reference->id);
                $reference->status = 2;
                $reference->update();
            }
            $voucher->id_openpay =  $idOrderOpenPay;
            $voucher->update();

            return redirect()->route('terminal.aproved');
        }

    }
}
