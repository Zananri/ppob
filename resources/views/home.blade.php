@extends('partials.navbar')

@section('container')

<div class="texts text-white" style="margin-top: 150px; font-family:sans-serif;">

    <h1>Solusi Tepat Pengisian Pulsa, Kuota</h1>
    <h1>dan Pembayaran Tagihan</h1>
</div>

<div class="row" style="margin-top: 30px; margin-left:100px;">
    <div class="col-md-3">
        <div class="card" style="width: 50%; align-items: center;" onclick="location.href='/pulsa'; cursor: pointer;">
            <img src="/img/pulsa.png" class="card-img-top" alt="..." style="width: 100px;">
            <div class="card-body">
                <p class="card-text">Pulsa</p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card" style="width: 50%; align-items: center;" onclick="location.href='/internet'; cursor: pointer;">
            <img src="/img/internet.png" class="card-img-top" alt="..." style="width: 100px;">
            <div class="card-body">
                <p class="card-text">Internet</p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card" style="width: 50%; align-items: center;" onclick="location.href='/listrik'; cursor: pointer;">
            <img src="/img/listrik.png" class="card-img-top" alt="..." style="width: 100px;">
            <div class="card-body">
                <p class="card-text">Listrik</p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card" style="width: 50%; align-items: center;" onclick="location.href='/game'; cursor: pointer;">
            <img src="/img/game.png" class="card-img-top" alt="..." style="width: 100px;">
            <div class="card-body">
                <p class="card-text">Game</p>
            </div>
        </div>
    </div>
</div>

@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert" id="success-alert">
    {{ session('success') }}
</div>
@endif

@endsection

<script>
    setTimeout(function() {
        $('#success-alert').alert('close');
    }, 2000);
</script>