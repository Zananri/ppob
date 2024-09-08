@extends('partials.navbar')

@section('container')

<div class="cod-box" style="margin:auto; padding:auto; margin-top:190px;">
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <h1>Isi Voucher Arena Of Valor</h1>
        </div>
        <div class="card-body text-center">
        @if(session('error'))
            <div class="alert alert-danger" id="errorAlert">
                {{ session('error') }}
            </div>
            @endif
            <form action="{{ route('aov') }}" method="post">
                @csrf
                <div class="input-group mb-3">
                    <input class="form-control" type="text" placeholder="Arena Of Valor" readonly id="nama_game" name="nama_game" value="Arena Of Valor">
                    <div class="input-group-append"></div>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Player Id" id="player_id" name="player_id" required>
                    <div class="input-group-append"></div>
                </div>
                <div class="input-group mb-3">
                    <select class="form-control" id="jum" name="jum" required>
                        <option selected disabled>Pilih Paket</option>
                        <option id="jum" name="jum" value="9009">40 Vouchers - Rp. 9.009,- Mendapatkan Rewards sejumlah 300</option>
                        <option id="jum" name="jum" value="18.018">90 Vouchers - Rp. 18.018,- Mendapatkan Rewards sejumlah 600</option>
                        <option id="jum" name="jum" value="45045">230 Vouchers - Rp. 45.045,- Mendapatkan Rewards sejumlah 1.500</option>
                        <option id="jum" name="jum" value="90090">470 Vouchers - Rp. 90.090,- Mendapatkan Rewards sejumlah 3.000</option>
                        <option id="jum" name="jum" value="180180">950 Vouchers - Rp. 180.180,- Mendapatkan Rewards sejumlah 6.000</option>
                        <option id="jum" name="jum" value="270270">1430 Vouchers - Rp. 270.270,- Mendapatkan Rewards sejumlah 9.000</option>
                        <option id="jum" name="jum" value="450450">2390 Vouchers - Rp. 450.450,- Mendapatkan Rewards sejumlah 15.000</option>
                        <option id="jum" name="jum" value="900901">4800 Vouchers - Rp. 900.901,- Mendapatkan Rewards sejumlah 30.000</option>
                        <option id="jum" name="jum" value="4504505">24050 Vouchers - Rp. 4.504.505,- Mendapatkan Rewards sejumlah 150.000</option>
                        <option id="jum" name="jum" value="9009009">48200 Vouchers - Rp. 9.009.009,- Mendapatkan Rewards sejumlah 300.000</option>
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