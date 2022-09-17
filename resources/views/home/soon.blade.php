@extends('layouts.app') @section('title', 'Coming Soon...')

@section('content')

<div class="container" id="stages">

    <div class="row">
        <div class="col-sm-3 col-md-6 col-lg-4 p-5" style="color:white;background-color:#652ec7;">
            <h4>Stage 1</h4>
            <ul>
                <li>Website v1</li>
                <li>Community Building</li>
                <li>Token Creation</li>
                <li>Launch</li>
                <li>Marketing</li>
                <li>AMA</li>
            </ul>
        </div>

        <div class="col-sm-9 col-md-6 col-lg-4 p-5" style="color:white;background-color:#560a86;;">
            <h4>Stage 2</h4>
            <ul>
                <li>Website v2</li>
                <li>Airdrop</li>
                <li>Grant Request from ETHW foundation</li>
                <li>Marketing</li>
            </ul>
        </div>

        <div class="col-sm-9 col-md-6 col-lg-4 p-5" style="color:white;background-color:#33135c;">
            <h4>Stage 3</h4>
            <ul>
                <li>Website v3</li>
                <li>Lauch Beta v1</li>
                <li>Airdrop for Beta testers</li>
                <li>Marketing</li>
            </ul>
        </div>
    </div>

</div>
</div>


<div class="container col-sm-9 col-md-6 col-lg-4 p-5 mt-4" style="color:white;    background: rgb(9, 9, 54);
">
    <h4>Tokenomics</h4>
    <ul>
        <li>80%: Liquidity</li>
        <li>10%: Marketing</li>
        <li>10%: Airdrop</li>
    </ul>
</div>
</div>


<div class="container" id="soon">
    <img style="filter:brightness(70%)" src="{{ asset('img/server.svg') }}" alt="server" width="50%" height="120em">
    <h1>COMING SOON...</h1>
</div>
@endsection