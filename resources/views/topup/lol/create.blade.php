@extends('partials.navbar')

@section('container')

<div class="ml-box" style="margin:auto; padding:auto; margin-top:190px;">
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <h1>Isi RP League Of Legends</h1>
        </div>
        <div class="card-body text-center">
        @if(session('error'))
            <div class="alert alert-danger" id="errorAlert">
                {{ session('error') }}
            </div>
            @endif
            <form action="{{ route('lol') }}" method="post">
                @csrf
                <div class="input-group mb-3">
                    <input class="form-control" type="text" placeholder="League Of Legends" readonly id="nama_game" name="nama_game" value="League Of Legends">
                    <div class="input-group-append"></div>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Riot Id" id="riot_id" name="riot_id" required>
                    <div class="input-group-append"></div>
                </div>
                <div class="input-group mb-3">
                    <select class="form-control" id="jum" name="jum" required>
                        <option selected disabled>Pilih Paket</option>
                        <option value="13694">150 RP (150 Base + 0 Bonus) - Rp. 13.694</option>
                        <option value="67613">775 RP (750 Base + 25 Bonus) - Rp. 67.613</option>
                        <option value="118964">1400 RP (1300 Base + 100 Bonus) - Rp. 118.964</option>
                        <option value="238784">2850 RP (2625 Base + 225 Bonus) - Rp. 238.784</option>
                        <option value="427072">5250 RP (4675 Base + 575 Bonus) - Rp. 427.072</option>
                        <option value="769414">10000 RP (8425 Base + 1575 Bonus) - Rp. 769.414</option>
                    </select>

                </div>
                <div class="input-group mb-3">
                    <select class="form-control" name="payment" id="payment" data-toggle="tooltip" data-title="Metode Pembayaran" data-original-title="" title="" required>
                        <option value="">-- Pembayaran --</option>
                        <option value="Bank BCA">Bank BCA</option>
                        <option value="Bank BNI">Bank BNI</option>
                        <option value="Bank BRI">Bank BRI</option>
                        <option value="Bank CIMB">Bank CIMB</option>
                        <option value="Bank Danamon">Bank Danamon</option>
                        <option value="Bank Mandiri">Bank Mandiri</option>
                        <option value="Bank Permata">Bank Permata</option>
                        <option value="Alfamart">Melalui Alfamart</option>
                        <option value="Indomaret">Melalui Indomaret</option>
                        <option value="Scan Qris">Scan QRIS</option>
                        <option value="Bank Neo">Bank Neo</option>
                        <option value="Bank BSI">BSI</option>
                        <option value="Saldo Akun">Saldo Akun</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Bayar</button>
                <button class="btn btn-primary"><a href="/game" style="color: white;">Back</a></button>
            </form>
        </div>
    </div>
</div>

@endsection