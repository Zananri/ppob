@extends('partials.navbar')

@section('container')

<div class="ml-box" style="margin:auto; padding:auto; margin-top:190px;">
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <h1>Isi Diamond Hayday</h1>
        </div>
        <div class="card-body text-center">
        @if(session('error'))
            <div class="alert alert-danger" id="errorAlert">
                {{ session('error') }}
            </div>
            @endif
            <form action="{{ route('hayday') }}" method="post">
                @csrf
                <div class="input-group mb-3">
                    <input class="form-control" type="text" placeholder="Hayday" readonly id="nama_game" name="nama_game" value="Hayday">
                    <div class="input-group-append"></div>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Player Tag" id="player_tag" name="player_tag" required>
                    <div class="input-group-append"></div>
                </div>
                <div class="input-group mb-3">
                    <select class="form-control" id="jum" name="jum" required>
                        <option selected disabled>Pilih Paket</option>
                        <option value="30834">50 Diamonds + 5 bonus - Rp. 30.834</option>
                        <option value="77316">130 Diamonds + 13 bonus - Rp. 77.316</option>
                        <option value="77316">Farm Pass - Rp. 77.316</option>
                        <option value="154788">275 Diamonds + 28 bonus - Rp. 154.788</option>
                        <option value="309730">570 Diamonds + 57 bonus - Rp. 309.730</option>
                        <option value="619615">1500 Diamonds + 150 bonus - Rp. 619.615</option>
                        <option value="1549271">4000 Diamonds + 400 bonus - Rp. 1.549.271</option>
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