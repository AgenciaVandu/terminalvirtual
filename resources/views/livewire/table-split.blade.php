<div class="col-lg-12">
    <table class="table table-striped table-hover table-borderless">
        <thead>
            <tr>
                <th scope="col" class="source-bold text-center">#</th>
                <th scope="col" class="source-bold text-center">DESCRIPCIÓN</th>
                <th scope="col" class="source-bold text-center">TOTAL</th>
                <th scope="col" class="source-bold text-center">PAGAR</th>
            </tr>
        </thead>
        <tbody>
            <form action="{{ route('terminal.checkout') }}" method="POST">
                @csrf
                @foreach ($splits as $split)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td class="source-regular">{{ $split->description }}</td>
                        <td class="source-regular text-center">
                            ${{ $split->amount }} <br> <small class="source-regular" style="font-size: .65rem;">Importe
                                en
                                USD</small>
                        </td>
                        <td class="text-center">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" wire:model="id_splits"  value="{{ $split->id }}"
                                    name="splits[]">
                            </div>
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <td></td>
                    <td></td>
                    <td>Total: USD ${{ $total }}</td>
                    <td>{{ $id_splits }}</td>
                </tr>

        </tbody>
    </table>
</div>
