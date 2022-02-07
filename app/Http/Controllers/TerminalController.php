<?php

namespace App\Http\Controllers;

use App\Models\Reference;
use Illuminate\Http\Request;
use Openpay\Data\Openpay;

class TerminalController extends Controller
{
    public function index(){
        $references_pend = Reference::where('user_id', auth()->user()->id)->where('status', 1)->get();
        $references_pay = Reference::where('user_id', auth()->user()->id)->where('status', 2)->get();
        return view('terminal.bill',compact('references_pend','references_pay'));
    }

    public function checkout(Reference $reference){
        return view('terminal.checkout',compact('reference'));
    }

    public function payment(Request $request,Reference $reference){
        /* return $request->all(); */
        $openpay = Openpay::getInstance(config('openpay.merchant_id'), config('openpay.private_key'), config('openpay.country_code'));

        $customer = [
            'name' => $request->name,
            //'last_name' => $user->last_name,
            /* 'phone_number' => auth()->user()->phone, */
            'email' => auth()->user()->email,
            'requires_account' => false,
        ];
        $chargeData = [
            'method' => 'card',
            'source_id' => $request->token_id,
            'amount' =>  $reference->amount,
            'currency' => 'MXN',
            /* 'confirm' => false, */
            'description' => $reference->description,
            'order_id' => $reference->id,
            'device_session_id' => $request->deviceIdHiddenFieldName,
            'redirect_url' => config('app.url') . '/checkout/directChargeOpenpay/responsepayment',
            'use_3d_secure' => 'true',
            'customer' => $customer
        ];

        $charge = $openpay->charges->create($chargeData);
        $url3D = $charge->serializableData["payment_method"]->url;
        return redirect($url3D);
    }

    public function validateChargeOpenPay()
    {
        $idOrderOpenPay = $_GET['id'];
        $openpay = Openpay::getInstance(config('openpay.merchant_id'), config('openpay.private_key'), config('openpay.country_code'));
        $charge = $openpay->charges->get($idOrderOpenPay);
        $idOrder = $charge->serializableData["order_id"];
        $validationCharge = $charge->status;
        /* return $validationCharge; */

        $reference = Reference::find($idOrder);

        if ($validationCharge == 'completed') {
            $reference->status = 2;
            $reference->id_openpay =  $idOrderOpenPay;
            $reference->update();
            return redirect()->route('terminal.aproved');
        }

    }
}
