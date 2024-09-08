@extends('partials.navbar')

@section('container')

<div class="ml-box" style="margin:auto; padding:auto; margin-top:170px;">
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <h1>Isi Genesis Genshin Impact</h1>
        </div>
        <div class="card-body text-center">
        @if(session('error'))
            <div class="alert alert-danger" id="errorAlert">
                {{ session('error') }}
            </div>
            @endif
            <form action="{{ route('genshin') }}" method="post">
                @csrf
                <div class="input-group mb-3">
                    <input class="form-control" type="text" placeholder="Genshin Impact" readonly id="nama_game" name="nama_game" value="Genshin Impact">
                    <div class="input-group-append"></div>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Player Id" id="player_id" name="player_id" required>
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
                        <option value="1467568">6480+1600 Genesis Crystals - Rp. 1.467.568</option>
                        <option value="734234">3280+600 Genesis Crystals - Rp. 734.234</option>
                        <option value="440541">1980+260 Genesis Crystals - Rp. 440.541</option>
                        <option value="229730">980+110 Genesis Crystals - Rp. 229.730</option>
                        <option value="72973">300+30 Genesis Crystals - Rp. 72.973</option>
                        <option value="14865">60 Genesis Crystals - Rp. 14.865</option>
                        <option value="72973">Blessing of the Welkin Moon - Rp. 72.973</option>
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