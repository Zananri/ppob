@extends('partials.navbar')

@section('container')

<div class="ml-box" style="margin:auto; padding:auto; margin-top:190px;">
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <h1>Isi Gem Clash Royale</h1>
        </div>
        <div class="card-body text-center">
        @if(session('error'))
            <div class="alert alert-danger" id="errorAlert">
                {{ session('error') }}
            </div>
            @endif
            <form action="{{ route('cr') }}" method="post">
                @csrf
                <div class="input-group mb-3">
                    <input class="form-control" type="text" placeholder="Clash Royale" readonly id="nama_game" name="nama_game" value="Clash Royale">
                    <div class="input-group-append"></div>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Player Tag" id="player_tag" name="player_tag" required>
                    <div class="input-group-append"></div>
                </div>
                <div class="input-group mb-3">
                    <select class="form-control" id="jum" name="jum" required>
                        <option selected disabled>Pilih Paket</option>
                        <option id="jum" name="jum" value="3604">27 Gems (24 + 3 bonus) - Rp. 3.604</option>
                        <option id="jum" name="jum" value="6306">44 Gems (40 + 4 bonus) - Rp. 6.306</option>
                        <option id="jum" name="jum" value="14414">88 Gems (80 + 8 bonus) - Rp. 14.414</option>
                        <option id="jum" name="jum" value="71171">550 Gems (500 + 50 bonus) - Rp. 71.171</option>
                        <option id="jum" name="jum" value="143243">1320 Gems (1200 + 120 bonus) - Rp. 143.243</option>
                        <option id="jum" name="jum" value="296396">2750 Gems (2500 + 250 bonus) - Rp. 296.396</option>
                        <option id="jum" name="jum" value="719820">7150 Gems (6500 + 650 bonus) - Rp. 719.820</option>
                        <option id="jum" name="jum" value="1441441">15400 Gems (14000 + 1400 bonus) - Rp. 1.441.441</option>
                        <option id="jum" name="jum" value="89189">Gold Pass - Rp. 89.189</option>
                        <option id="jum" name="jum" value="179279">Diamond Pass - Rp. 179.279</option>
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