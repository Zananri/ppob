@extends('partials.navbar')

@section('container')

<div class="ml-box" style="margin:auto; padding:auto; margin-top:190px;">
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <h1>Isi Gem Dragon City</h1>
        </div>
        <div class="card-body text-center">
        @if(session('error'))
            <div class="alert alert-danger" id="errorAlert">
                {{ session('error') }}
            </div>
            @endif
            <form action="{{ route('dragon') }}" method="post">
                @csrf
                <div class="input-group mb-3">
                    <input class="form-control" type="text" placeholder="Dragon City" readonly id="nama_game" name="nama_game" value="Dragon City">
                    <div class="input-group-append"></div>
                </div>
                <div class="input-group mb-3">
                    <input type="number" class="form-control" placeholder="Player Id" id="player_id" name="player_id" required>
                    <div class="input-group-append"></div>
                </div>
                <div class="input-group mb-3">
                    <select class="form-control" id="jum" name="jum" required>
                        <option selected disabled>Pilih Paket</option>
                        <option value="25766">25 gems Dari Rp. 25.766 Mendapatkan Rewards sejumlah 858</option>
                        <option value="58559">65 gems Dari Rp. 58.559 Usual Rp. 62.162 -6% Mendapatkan Rewards sejumlah 1.950</option>
                        <option value="116216">140 gems Dari Rp. 116.216 Usual Rp. 152.252 -24% Mendapatkan Rewards sejumlah 3.870</option>
                        <option value="206306">300 gems Dari Rp. 206.306 Mendapatkan Rewards sejumlah 6.870</option>
                        <option value="296396">465 gems Dari Rp. 296.396 Mendapatkan Rewards sejumlah 9.870</option>
                        <option value="431532">800 gems Dari Rp. 431.532 Mendapatkan Rewards sejumlah 14.370</option>
                        <option value="719820">1700 gems Dari Rp. 719.820 Mendapatkan Rewards sejumlah 23.970</option>
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