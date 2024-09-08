@extends('partials.navbar')

@section('container')


<div class="internet-box" style="margin:auto; padding:auto; margin-top:190px;">
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <h1>Isi Paket Internet</h1>
        </div>
        <div class="card-body text-center">
        @if(session('error'))
            <div class="alert alert-danger" id="errorAlert">
                {{ session('error') }}
            </div>
            @endif
            <form action="{{route('internet')}}" method="post">
                @csrf
                <div class="input-group mb-3">
                    <input class="form-control" type="text" placeholder="Voucher Internet" readonly id="nama_barang" name="nama_barang" value="Voucher Internet">
                    <div class="input-group-append"></div>
                </div>
                <div class="input-group mb-3">
                    <input type="number" class="form-control" placeholder="Nomor Pelanggan" id="nomor_pelanggan" name="nomor_pelanggan" required>
                    <div class="input-group-append">
                    </div>
                </div>
                <div class="input-group mb-3">
                    <select class="form-control" id="jum" name="jum" required>
                        <option selected disabled>Pilih Paket</option>
                        <option value="5000">3 GB - 5 Hari (Rp. 3.000)</option>
                        <option value="10000">5 GB - 10 Hari (Rp. 5.000)</option>
                        <option value="18000">10 GB - 15 Hari (Rp. 10.000)</option>
                        <option value="30000">15 GB - 30 Hari (Rp. 15.000)</option>
                        <option value="35000">20 GB - 30 Hari (Rp. 20.000)</option>
                        <option value="45000">30 GB - 30 Hari (Rp. 30.000)</option>
                        <option value="75000">50 GB - 30 Hari (Rp. 50.000)</option>
                        <option value="90000">75 GB - 30 Hari (Rp. 75.000)</option>
                        <option value="150000">100 GB - 30 Hari (Rp. 100.000)</option>
                        <option value="250000">Unlimited - 30 Hari (Rp. 150.000)</option>
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

<script>
    document.getElementById('payment').addEventListener('change', function() {
        var selectedPayment = this.value;
        var selectedPackagePrice = document.getElementById('jum').value;
        var totalPayment = selectedPayment === '' ? 0 : selectedPackagePrice;
        document.getElementById('total_pembayaran').value = totalPayment;
    });
</script>