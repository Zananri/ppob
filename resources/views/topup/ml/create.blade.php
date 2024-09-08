@extends('partials.navbar')

@section('container')

<div class="ml-box" style="margin:auto; padding:auto; margin-top:150px;">
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <h1>Isi Diamond Mobile Legends</h1>
        </div>
        <div class="card-body text-center">
        @if(session('error'))
            <div class="alert alert-danger" id="errorAlert">
                {{ session('error') }}
            </div>
            @endif
            <form action="{{ route('ml') }}" method="post">
                @csrf
                <div class="input-group mb-3">
                    <input class="form-control" type="text" placeholder="Mobile Legends" readonly id="nama_game" name="nama_game" value="Mobile Legends">
                    <div class="input-group-append"></div>
                </div>
                <div class="input-group mb-3">
                    <input type="number" class="form-control" placeholder="Player Id" id="player_id" name="player_id" required>
                    <div class="input-group-append"></div>
                </div>
                <div class="input-group mb-3">
                    <input type="number" class="form-control" placeholder="(Zone Id)" id="zone_id" name="zone_id" required>
                    <div class="input-group-append"></div>
                </div>
                <div class="input-group mb-3">
                    <select class="form-control" id="jum" name="jum" required>
                        <option selected disabled>Pilih Paket</option>
                        <option value="1171">3 Diamonds - Rp. 1.171</option>
                        <option value="1423">5 Diamonds - Rp. 1.423</option>
                        <option value="3323">11 Diamonds + 1 Bonus - Rp. 3.323</option>
                        <option value="5223">17 Diamonds + 2 Bonus - Rp. 5.223</option>
                        <option value="7600">25 Diamonds + 3 Bonus - Rp. 7.600</option>
                        <option value="11400">40 Diamonds + 4 Bonus - Rp. 11.400</option>
                        <option value="15200">53 Diamonds + 6 Bonus - Rp. 15.200</option>
                        <option value="21850">77 Diamonds + 8 Bonus - Rp. 21.850</option>
                        <option value="43700">154 Diamonds + 16 Bonus - Rp. 43.700</option>
                        <option value="61750">217 Diamonds + 23 Bonus - Rp. 61.750</option>
                        <option value="76000">256 Diamonds + 40 Bonus - Rp. 76.000</option>
                        <option value="104500">367 Diamonds + 41 Bonus - Rp. 104.500</option>
                        <option value="142500">503 Diamonds + 65 Bonus - Rp. 142.500</option>
                        <option value="218500">774 Diamonds + 101 Bonus - Rp. 218.500</option>
                        <option value="475000">1708 Diamonds + 302 Bonus - Rp. 475.000</option>
                        <option value="1140000">4003 Diamonds + 827 Bonus - Rp. 1.140.000</option>
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