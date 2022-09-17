@extends('layouts.app') @section('title', 'Welcome Page')


@section('content')

<div class="container" id="roadmap">
    <h4>OUR ROADMAP IS COMING SOON <a href="{{ route('home.soon') }}"
            style="color: white; text-decoration:underline;font-size: 0.8em">View More</a></h4>
</div>
<div class="container mt-4" style="text-align: center">
    <H1>Building true DeFi.</H1>
    <p>Trade your crypto assets using our non-custodial peer-to-peer trading protocol and earn a
        passive income with our asset-backed governance token.
    </p>
    <div>
        <button class="btn btn-secondary w-100">Buy CLOWDW on PCS</button>
    </div>

    <div>
        <button class="btn btn-primary w-100 mt-3">Buy CLOWDW on UNI</button>
    </div>

</div>


<div class="container mt-4">
    <img src="{{ asset('img/binance.svg') }}" alt="binance_logo" width="10%" />
    <img class="ml-5" src="{{ asset('img/eth.svg') }}" alt="eth_logo" width="10%" />
</div>


<div class="container" id="boxes">
    <h1>Trade Efficiently - "From The Wallet"</h1>

    <p>Trade cryptocurrencies and NFTs using our peer-to-peer, non-custodial trading protocol</p>
    <div class="row">
        <div class="col-sm-3 col-md-6 col-lg-4 p-4" style="color:white;background-color:orange;">
            <h4>Peer-TO-Peer</h4>
            <p>Transactions through our From-The-Wallet (FTW) trading protocol are peer-to-peer, maximising efficiency
                and
                minimising gas cost.</p>
        </div>
        <div class="col-sm-9 col-md-6 col-lg-4 p-4" style="color:white;background-color:blue;">
            <h4>Non-Custodial</h4>
            <p>The FTW limit order protocol is built such that you maintain full custody of your assets at all times.
                This
                is true DeFi.</p>
        </div>
        <div class="col-sm-3 col-md-6 col-lg-4 p-4" style="color:white;background-color:green;">
            <h4>NFT Trading</h4>
            <p>Beyond regular tokens, FTW also supports NFTs, enabling non-custodial peer-to-peer NFT trading between
                buyers
                and sellers.</p>
        </div>

        <button class="btn btn-primary w-100 mt-4">Learn More</button>
    </div>
</div>


<div class="container" id="boxes">
    <h1>Buy Low, Sell High</h1>


    <p>Trade through our aggregator and enjoy the best prices for your favourite tokens across multiple chains</p>
    <div class="row">
        <div class="col-sm-3 col-md-6 col-lg-4 p-4" style="color:white;background-color:orange;">
            <h4>Multi-Chain</h4>
            <p>Trade across the most popular EVM networks, beginning with ETH and BSC and expanding from there.</p>
        </div>
        <div class="col-sm-9 col-md-6 col-lg-4 p-4" style="color:white;background-color:blue;">
            <h4>Limit Orders</h4>
            <p>Perform non-custodial peer-to-peer limit orders using our FTW trading protocol.</p>
        </div>
        <div class="col-sm-3 col-md-6 col-lg-4 p-4" style="color:white;background-color:green;">
            <h4>Optimal Spot Prices</h4>
            <p>Trade effectively – our aggregator routes through top DEXs to call upon the optimal spot price for
                your
                every trade.</p>
        </div>

        <div class="col-sm-9 col-md-6 col-lg-4 p-4 " style="color:white;background-color:gray;">
            <h4>Trade Safely</h4>
            <p>Built with security in mind, buy and sell verified cryptocurrencies and NFT collections.</p>
        </div>

        <button class="btn btn-primary w-100 mt-4">Learn More</button>

    </div>
</div>




<div class="container" id="boxes">
    <h1>One Unified Token</h1>

    <p>We’re upgrading our governance token to maintain an edge in the market.</p>
    <div class="row">
        <div class="col-sm-3 col-md-6 col-lg-4 p-4" style="color:white;background-color:orange;">
            <h4>The Upgrade</h4>
            <p>The new token will bring together the FEG and ROX tokens to offer increased utility, asset-backing,
                interest-free lending and the means to earn a passive income through staking.</p>
        </div>
        <div class="col-sm-9 col-md-6 col-lg-4 p-4" style="color:white;background-color:blue;">
            <h4>Asset-Backed</h4>
            <p>Asset-backing provides the new unified token with an ever-increasing minimum base value and its
                holders
                the opportunity to borrow against it – interest-free.</p>
        </div>
        <div class="col-sm-3 col-md-6 col-lg-4 p-4" style="color:white;background-color:green;">
            <h4>Passive Income​</h4>
            <p>A 2% transaction tax on all volume of the new token is fed to stakers. The FTW trading protocol and
                aggregator will fund additional income streams to the staking pool.</p>
        </div>

        <div class="col-sm-9 col-md-6 col-lg-4 p-4 " style="color:white;background-color:blue;">
            <h4>Multi-Chain​​</h4>
            <p>The new token will launch on the Ethereum and Binance Smart Chain networks with plans to explore
                other
                Ethereum Virtual Machine (EVM) networks such as Polygon, Fantom and Avalanche in the future.</p>
        </div>

        <div class="col-sm-9 col-md-6 col-lg-4 p-4 " style="color:white;background-color:green;">
            <h4>100% Audited​</h4>
            <p>To maximise investor safety, the token contract will be fully audited by a professional third-party
                auditing firm.</p>
        </div>

        <div class="col-sm-9 col-md-6 col-lg-4 p-4 " style="color:white;background-color:orange;">
            <h4>CEX Friendly​</h4>
            <p>The new token contract will feature novel blockchain technology while conforming to the standards
                accepted by decentralised and centralised exchanges.</p>
        </div>
        <button class="btn btn-primary w-100 mt-4">Learn More</button>

    </div>
</div>
<!--ANOTHER SECTION-->


<div class="container" id="smart">

    <h4>SmartDeFi™</h4>
    <p>The smartest token template ever built</p>

    <p>Within the SmartDeFi™ token template, we’ve made all the technology of our new unified governance token
        available
        to others. This means each token created through our SmartDeFi™ Deployer is asset-backed, giving rise to an
        ever-increasing minimum base value and SmartLend – a lending protocol that allows for interest-free loans to
        be
        taken out against the backing pool. SmartDeFi™ tokens can be paired against any other on-chain token which
        also
        dictates the asset by which it is backed.</p>
</div>

@endsection