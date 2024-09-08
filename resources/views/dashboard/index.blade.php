@php

use App\Models\Depo;

@endphp

@extends('layouts.main')

@section('container')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-8 informasi-akun-view">
            <div class="card" style="width: 800px; margin-top:10px;">
                <div class="card-body" style="width: 800px;">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="profile-akun">
                                <div class="current-img">
                                    <div class="current-img">
                                        <img src="{{ asset('storage/' . $user->image) }}" style="border-radius:500px; width:150px; height:150px;" />
                                    </div>
                                </div>
                                <div id=" dropzone" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;">
                                    <input type="file" accept="image/*" style="display: none;">
                                </div>
                            </div>
                            <ul class="list-group list-group-unbordered" style="margin-top:10px;">
                                <li class="list-group-item">
                                    <b>Saldo</b>
                                    @php
                                    $userDeposits = Depo::where('user_id', auth()->id())->orderByDesc('id')->limit(1)->get();
                                    $totalDeposits = $userDeposits->sum('nominal');
                                    @endphp
                                    @if($totalDeposits > 0)
                                    <a id="saldoAkun" href="/depo" class="pull-right text-decoration-none">Rp {{ number_format($totalDeposits, 0, ',', '.',) }}</a>
                                    @else
                                    <span class="pull-right">Data saldo tidak tersedia</span>
                                    @endif
                                </li>
                            </ul>


                        </div>
                        <div class="col-md-8">
                            <table class="table table-hover" style="margin-bottom: 0;">
                                <tbody>
                                    <tr>
                                        <td style="width: 140px;">Nama Lengkap</td>
                                        <td>: {{ auth()->user()->name}}</td>
                                    </tr>
                                    <tr>
                                        <td style="width: 140px;">Email</td>
                                        <td>: {{ auth()->user()->email}}</td>
                                    </tr>
                                    <tr>
                                        <td style="width: 140px;">No. HP</td>
                                        <td>: <strong>{{ auth()->user()->no_hp}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td style="width: 140px;">Tanggal Mendaftar</td>
                                        <td>: {{ auth()->user()->created_at}}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="/dashboard/edit" class="btn btn-default btn-block"><b><i class="fa fa-pencil-square-o"></i> Ubah Profil</b></a>
                                </div>
                                <div class="col-md-6">
                                    <a href="/depo" class="btn btn-default btn-block"><b><i class="fa fa-credit-card"></i> Tambah Saldo</b></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection