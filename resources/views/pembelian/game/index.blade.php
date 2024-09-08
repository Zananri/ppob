@extends('partials.navbar')

@section('content')

<a href="/" style="margin-top: 8px;">Back</a>

@endsection

@section('container')

<style>
    .icon.d-flex img {
        width: 190px;
        height: 190px;
        margin-right: 0.8cm;
    }
</style>

<div class="icon d-flex" style="margin-top: 18px;">

    <a href="/ml"><img src="/img/ML.jpg" class="img-thumbnail" alt="mobile-legends"></a>
    <a href="/coc"><img src="/img/COC.jpg" class="img-thumbnail"></a>
    <a href="/ff"><img src="/img/FF.jpg" class="img-thumbnail"></a>
    <a href="/genshin"><img src="/img/Genshin.jpg" class="img-thumbnail"></a>
    <a href="/pubg"><img src="/img/PUBG.jpg" class="img-thumbnail"></a>
</div>

<div class="icon d-flex" style="margin-top: 18px;">
    <a href="/lol"><img src="/img/LOL.jpg" class="img-thumbnail"></a>
    <a href="/dragon"><img src="/img/Dragon.jpeg" class="img-thumbnail"></a>
    <a href="/pb"><img src="/img/PB.jpg" class="img-thumbnail"></a>
    <a href="/honkai"><img src="/img/Honkai.jpg" class="img-thumbnail"></a>
    <a href="/valo"><img src="/img/VALO.jpg" class="img-thumbnail"></a>
</div>

<div class="icon d-flex" style="margin-top: 18px;">
    <a href="/cod"><img src="/img/COD.jpg" class="img-thumbnail"></a>
    <a href="/cr"><img src="/img/CR.jpg" class="img-thumbnail"></a>
    <a href="/aov"><img src="/img/AOV.jpg" class="img-thumbnail"></a>
    <a href="/hayday"><img src="/img/Hayday.jpg" class="img-thumbnail"></a>
    <a href="/opbr"><img src="/img/OPBR.jpg" class="img-thumbnail"></a>
</div>
@endsection