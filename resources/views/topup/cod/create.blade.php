@extends('partials.navbar')

@section('container')

<div class="cod-box" style="margin:auto; padding:auto; margin-top:190px;">
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <h1>Isi CP Call Of Duty</h1>
        </div>
        <div class="card-body text-center">
        @if(session('error'))
            <div class="alert alert-danger" id="errorAlert">
                {{ session('error') }}
            </div>
            @endif
            <form action="{{ route('cod') }}" method="post">
                @csrf
                <div class="input-group mb-3">
                    <input class="form-control" type="text" placeholder="Call Of Duty" readonly id="nama_game" name="nama_game" value="Call Of Duty">
                    <div class="input-group-append"></div>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Player Id" id="player_id" name="player_id" required>
                    <div class="input-group-append"></div>
                </div>
                <div class="input-group mb-3">
                    <select class="form-control" id="jum" name="jum" required>
                        <option selected disabled>Pilih Paket</option>
                        <option id="jum" name="jum" value="4505">31 CP - Rp. 4.505 - Mendapatkan Rewards sejumlah 150</option>
                        <option id="jum" name="jum" value="9009">62 CP - Rp. 9.009 - Mendapatkan Rewards sejumlah 300</option>
                        <option id="jum" name="jum" value="18018">127 CP - Rp. 18.018 - Mendapatkan Rewards sejumlah 600</option>
                        <option id="jum" name="jum" value="45045">320 CP - Rp. 45.045 - Mendapatkan Rewards sejumlah 1.500</option>
                        <option id="jum" name="jum" value="90090">645 CP - Rp. 90.090 - Mendapatkan Rewards sejumlah 3.000</option>
                        <option id="jum" name="jum" value="108108">800 CP - Rp. 108.108 - Mendapatkan Rewards sejumlah 3.600</option>
                        <option id="jum" name="jum" value="180180">1373 CP - Rp. 180.180 - Mendapatkan Rewards sejumlah 6.000</option>
                        <option id="jum" name="jum" value="270270">2059 CP - Rp. 270.270 - Mendapatkan Rewards sejumlah 9.000</option>
                        <option id="jum" name="jum" value="342342">2749 CP - Rp. 342.342 - Mendapatkan Rewards sejumlah 11.400</option>
                        <option id="jum" name="jum" value="450450">3564 CP - Rp. 450.450 - Mendapatkan Rewards sejumlah 15.000</option>
                        <option id="jum" name="jum" value="657658">5618 CP - Rp. 657.658 - Mendapatkan Rewards sejumlah 21.900</option>
                        <option id="jum" name="jum" value="900901">7656 CP - Rp. 900.901 - Mendapatkan Rewards sejumlah 30.000</option>
                        <option id="jum" name="jum" value="1801802">15312 CP - Rp. 1.801.802 - Mendapatkan Rewards sejumlah 60.000</option>
                        <option id="jum" name="jum" value="4504505">38280 CP - Rp. 4.504.505 - Mendapatkan Rewards sejumlah 150.000</option>
                        <option id="jum" name="jum" value="9009009">76560 CP - Rp. 9.009.009 - Mendapatkan Rewards sejumlah 300.000</option>
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