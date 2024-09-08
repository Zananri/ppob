@extends('layouts.main')

@section('container')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-8 informasi-akun-view">
            <div class="card" style="width: 800px; margin-top:10px;">
                <div class="card-body" style="width: 800px;">
                    <form action="{{ route('depo') }}" method="post">
                        @csrf
                        <div class="input-group mb-3">
                            <input class="form-control" type="text" placeholder="Depo Saldo" readonly id="nama_barang" name="nama_barang" value="Depo Saldo">
                            <div class="input-group-append"></div>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">RP</span>
                            <input type="number" class="form-control" placeholder="Nominal" id="nominal" name="nominal" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-credit-card"></i></span>
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
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Deposit</button>
                        <button class="btn btn-primary"><a href="/dashboard" style="color: white; text-decoration:none;">Back</a></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection