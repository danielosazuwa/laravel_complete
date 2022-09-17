<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home/home.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rye&display=swap" rel="stylesheet">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
    <script src="{{ mix('js/app.js') }}" defer></script>

    <title>CLOWDW - @yield('title')</title>
</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-light bg-light mt-4">
        <div class="container-fluid">
            <a href="{{ route('home.index') }}" class="navbar-brand" style="font-weight:bold;">CLOWDW
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="{{ route('home.soon') }}" class="nav-item nav-link">RoadMap</a>
                    <a href="https://t.me/+CcWHTOWTB09lMjc0" class="nav-item nav-link">Community Building</a>
                    <a href="{{ route('home.index') }}" class="nav-item nav-link">Token Creation</a>
                    <a href="{{ route('home.index') }}" class="nav-item nav-link">Airdrop</a>
                    {{-- <a href="#" class="nav-item nav-link">Partners</a>
                    <a href="#" class="nav-item nav-link">Socials</a>
                    <a href="#" class="nav-item nav-link">Airdrop</a> --}}

                </div>

            </div>
        </div>
    </nav>

    <div class="container" style="text-align: center">
        <img src="{{ asset('img/logo.png') }}" alt="logo" width="30%" />
        <h6 style="font-family: 'Rye', cursive;">The First Staking Platform on Ethw Chain</h6>
        <p>Creating the dots and fully utilizing the power of Ethw</p>
    </div>



    @yield('content')


    <div class="container my-5">
        <!-- Footer -->
        <footer class="text-center text-lg-start text-white" style="background-color: #3e4551">
            <!-- Grid container -->
            <div class="container p-4 pb-0">
                <!-- Section: Links -->
                <section class="">
                    <!--Grid row-->
                    <div class="row">
                        <!--Grid column-->
                        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                            <h5 class="text-uppercase">CLOWDW</h5>
                            <p>The First Staking Platform on Ethw Chain</p>
                            <p>Creating the dots and fully utilizing the power of Ethw</p>

                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                            <h5 class="text-uppercase">Join Our Community</h5>

                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="https://t.me/+CcWHTOWTB09lMjc0" class="text-white">Telegram</a>
                                </li>
                                {{-- <li>
                                    <a href="#!" class="text-white">Link 2</a>
                                </li>
                                <li>
                                    <a href="#!" class="text-white">Link 3</a>
                                </li>
                                <li>
                                    <a href="#!" class="text-white">Link 4</a>
                                </li> --}}
                            </ul>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        {{-- <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                            <h5 class="text-uppercase">Links</h5>

                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="#!" class="text-white">Link 1</a>
                                </li>
                                <li>
                                    <a href="#!" class="text-white">Link 2</a>
                                </li>
                                <li>
                                    <a href="#!" class="text-white">Link 3</a>
                                </li>
                                <li>
                                    <a href="#!" class="text-white">Link 4</a>
                                </li>
                            </ul>
                        </div>
                        <!--Grid column--> --}}

        </footer>
        <p style="text-align: center">&copy2022 Clowdw.</p>

</body>

</html>