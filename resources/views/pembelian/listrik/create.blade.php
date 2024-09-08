@extends('partials.navbar')

@section('container')

<div class="listrik-box" style="margin:auto; padding:auto; margin-top:190px;">
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <h1>Isi Token Listrik</h1>
        </div>
        <div class="card-body text-center">
        @if(session('error'))
            <div class="alert alert-danger" id="errorAlert">
                {{ session('error') }}
            </div>
            @endif
            <form action="{{route('listrik')}}" method="post">
                @csrf
                <div class="input-group mb-3">
                    <input class="form-control" type="text" placeholder="Token Listrik" readonly id="nama_barang" name="nama_barang" value="Token Listrik">
                    <div class="input-group-append"></div>
                </div>
                <div class="input-group mb-3">
                    <input type="number" class="form-control" placeholder="Nomor Token" id="no_token" name="no_token" required>
                    <div class="input-group-append">
                    </div>
                </div>
                <div class="input-group mb-3">
                    <select class="form-control" id="jum" name="jum" required>
                        <option selected disabled>Pilih Paket</option>
                        <option value="20000">Token Rp20 ribu (listrik 13,2 kWh)</option>
                        <option value="50000">Token Rp50 ribu (listrik 33,1 kWh)</option>
                        <option value="100000">Token Rp100 ribu (listrik 66,2 kWh)</option>
                        <option value="250000">Token Rp250 ribu (listrik 132,3 kWh)</option>
                        <option value="500000">Token Rp500 ribu (listrik 328,9 kWh)</option>
                        <option value="1000000">Token Rp1 juta (listrik 659,7 kWh)</option>
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
                <button class="btn btn-primary"><a href="/" style="color: white;">Back</a></button>
            </form>
        </div>
    </div>
</div>
@endsection