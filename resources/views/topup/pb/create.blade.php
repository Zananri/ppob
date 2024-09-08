@extends('partials.navbar')

@section('container')

<div class="ml-box" style="margin:auto; padding:auto; margin-top:190px;">
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <h1>Isi Cash Point Blank</h1>
        </div>
        <div class="card-body text-center">
        @if(session('error'))
            <div class="alert alert-danger" id="errorAlert">
                {{ session('error') }}
            </div>
            @endif
            <form action="{{ route('pb') }}" method="post">
                @csrf
                <div class="input-group mb-3">
                    <input class="form-control" type="text" placeholder="Point Blank" readonly id="nama_game" name="nama_game" value="Point Blank">
                    <div class="input-group-append"></div>
                </div>
                <div class="input-group mb-3">
                    <input type="number" class="form-control" placeholder="Player Id" id="player_id" name="player_id" required>
                    <div class="input-group-append"></div>
                </div>
                <div class="input-group mb-3">
                    <select class="form-control" id="jum" name="jum" required>
                        <option selected disabled>Pilih Paket</option>
                        <option id="jum" name="jum" value="9910">1200 PB CASH - Rp9.910</option>
                        <option id="jum" name="jum" value="19820">2400 PB CASH - Rp19.820</option>
                        <option id="jum" name="jum" value="49550">6000 PB CASH - Rp49.550</option>
                        <option id="jum" name="jum" value="99099">12000 PB CASH - Rp99.099</option>
                        <option id="jum" name="jum" value="198198">24000 PB CASH - Rp198.198</option>
                        <option id="jum" name="jum" value="297297">36000 PB CASH - Rp297.297</option>
                        <option id="jum" name="jum" value="495495">60000 PB CASH - Rp495.495</option>
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