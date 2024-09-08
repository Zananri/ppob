@extends('partials.navbar')

@section('container')

<div class="ml-box" style="margin:auto; padding:auto; margin-top:190px;">
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <h1>Isi Diamond Free Fire</h1>
        </div>
        <div class="card-body text-center">
        @if(session('error'))
            <div class="alert alert-danger" id="errorAlert">
                {{ session('error') }}
            </div>
            @endif
            <form action="{{ route('ff') }}" method="post">
                @csrf
                <div class="input-group mb-3">
                    <input class="form-control" type="text" placeholder="Free Fire" readonly id="nama_game" name="nama_game" value="Free Fire">
                    <div class="input-group-append"></div>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Player Id" id="player_id" name="player_id" required>
                    <div class="input-group-append"></div>
                </div>
                <div class="input-group mb-3">
                    <select class="form-control" id="jum" name="jum" required>
                        <option selected disabled>Pilih Paket</option>
                        <option value="901">5 Diamonds 901</option>
                        <option value="1802">12 Diamonds - Rp. 1.802</option>
                        <option value="7207">50 Diamonds - Rp. 7.207</option>
                        <option value="9009">70 Diamonds - Rp. 9.009</option>
                        <option value="18018">140 Diamonds - Rp. 18.018</option>
                        <option value="45045">355 Diamonds - Rp. 45.045</option>
                        <option value="90090">720 Diamonds - Rp. 90.090</option>
                        <option value="180180">1450 Diamonds - Rp. 180.180</option>
                        <option value="270270">2180 Diamonds - Rp. 270.270</option>
                        <option value="450450">3640 Diamonds - Rp. 450.450</option>
                        <option value="900901">7290 Diamonds - Rp. 900.901</option>
                        <option value="4504505">36500 Diamonds - Rp. 4.504.505</option>
                        <option value="9009009">73100 Diamonds - Rp. 9.009.009</option>
                        <option value="18018018">146200 Diamonds - Rp. 18.018.018</option>
                        <option value="36036036">292500 Diamonds - Rp. 36.036.036</option>
                        <option value="54054054">438800 Diamonds - Rp. 54.054.054</option>
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