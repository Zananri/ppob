@extends('layouts.main')

@section('container')
@if($transactions->isNotEmpty())
<table class="table" style="margin-left:155px; width:93%; margin-top:10px;">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Nominal</th>
            <th>Pembayaran</th>
            <th>Tanggal</th>
        </tr>
    </thead>
    <tbody>
        @php $nomorUrut = 1; @endphp
        @foreach($transactions->sortByDesc('created_at') as $transaction)
        <tr>
            <td>{{ $nomorUrut++ }}</td>
            <td>{{ $transaction->nama_game ?? $transaction->nama_barang}}</td>
            <td>{{ isset($transaction->jum) ? "RP " . number_format($transaction->jum, 0, ',', '.') : "RP " . number_format($transaction->nominal, 0, ',', '.') }}</td>
            <td>{{ $transaction->payment }}</td>
            <td>{{ $transaction->created_at }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@else
<p>Belum ada Transaksi</p>
@endif
@endsection