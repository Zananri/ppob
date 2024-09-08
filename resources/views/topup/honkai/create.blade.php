@extends('partials.navbar')

@section('container')

<div class="ml-box" style="margin:auto; padding:auto; margin-top:170px;">
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <h1>Isi Oneiric Shard Honkai: Star Rail</h1>
        </div>
        <div class="card-body text-center">
        @if(session('error'))
            <div class="alert alert-danger" id="errorAlert">
                {{ session('error') }}
            </div>
            @endif
            <form action="{{ route('honkai') }}" method="post">
                @csrf
                <div class="input-group mb-3">
                    <input class="form-control" type="text" placeholder="Honkai: Star Rail" readonly id="nama_game" name="nama_game" value="Honkai: Star Rail">
                    <div class="input-group-append"></div>
                </div>
                <div class="input-group mb-3">
                    <input type="number" class="form-control" placeholder="Player Id" id="player_id" name="player_id" required>
                    <div class="input-group-append"></div>
                </div>
                <div class="input-group mb-3">
                    <select class="form-control" id="server" name="server" required>
                        <option selected disabled>Pilih Server</option>
                        <option id="server" name="server" value="america">America</option>
                        <option id="server" name="server" value="europe">Europe</option>
                        <option id="server" name="server" value="asia">Asia</option>
                        <option id="server" name="server" value="tw-hk-mo">TW, HK, MO</option>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <select class="form-control" id="jum" name="jum" required>
                        <option selected disabled>Pilih Paket</option>
                        <option value="14414">60 Oneiric Shard - Rp. 14.414</option>
                        <option value="71171">330 Oneiric Shard (300 + 30 Bonus) - Rp. 71.171</option>
                        <option value="224324">1090 Oneiric Shard (980 + 110 Bonus) - Rp. 224.324</option>
                        <option value="431532">2240 Oneiric Shard (1980 + 260 Bonus) - Rp. 431.532</option>
                        <option value="719820">3880 Oneiric Shard (3280 + 600 Bonus) - Rp. 719.820</option>
                        <option value="1440541">8080 Oneiric Shard (6480 + 1600 Bonus) - Rp. 1.440.541</option>
                        <option value="71171">Express Supply Pass - Rp. 71.171</option>
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