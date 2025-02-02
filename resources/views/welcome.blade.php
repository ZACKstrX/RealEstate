<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>GreenLeaf Estates</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-datepicker@1.9.0/dist/css/bootstrap-datepicker.min.css"
        rel="stylesheet">
    <link rel="icon" href="./images/logo.png" type="image/png">
    
    <link href="./css/bootstrap.css" rel="stylesheet" />
    <link href="./app.css" rel="stylesheet">
</head>

<body class="bg-parchment">
    <div class="header-container">

        <nav class="nav navbar navbar-expand-lg bg-parchment" data-bs-theme="dark">
            <div class="container-fluid">
                <div><img class="logo-nav" src="./images/logo.png" alt=""><a class="navbar-brand"
                        href="#"></a></div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link green-text" href="#"><strong class="wordhover">Homes</strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link green-text " href="#"><strong class="wordhover">Lands</strong></a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto">
                        @if (!Auth::check())
                        <li class="nav-item">
                            <a class="nav-link " href="/login"><button type="button "
                                    class="mybtn btn dark-green "><strong class="wordhover card-text">Log
                                        in</strong></button></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/SignUp"><button type="button"
                                    class="mybtn btn dark-green "><strong class="wordhover card-text">Sign
                                        Up</strong></button></a>
                        </li>
                        @else <!-- If the user is authenticated -->
                        <!-- Show a button to go to the Products List page -->
                        <li class="nav-item">
                            <a class="nav-link" href='/ProductsList'>
                                <button type="button" class="mybtn btn dark-green ">
                                    <strong class="wordhover card-text">Go to Products</strong>
                                </button>
                            </a>
                        </li>
                    @endif
                    </ul>
                </div>
            </div>
        </nav>
        <!--navbar end-->
        <div class="header-image">
            <div class="hero-content">

                <div class="container" style="height: 100%">
                    <div class="hero-slide">
                        <div class="hero-title">
                            <h1 class="title">Find Your Home Here </h1>
                            <p class="sous-title"><i>Discover the perfect</br>
                                    property for your needs.</br>
                                    Browse homes, lands, and more</br>
                                    in just a few clicks!</i></p>
                        </div>
                        <form class="search" role="search">

                            <select class="select dark-green card-text fw-bold nooutlin">
                                <option value="buy" selected>Buy</option>
                                <option value="rent">Rent</option>
                              </select>
                            
                              <select class="select dark-green card-text fw-bold nooutlin">
                                <option selected>City</option>
                                @foreach ($cts as $city)
                                     <option value="{{ $city->id }}">{{ $city->name }}</option>
                                @endforeach
                              </select>
                            <div class="searshdiv">
                            <input class=" form-control-sm  bg-parchment noborder  fw-bold nooutlin"
                                type="search" placeholder="Search" aria-label="Search">
                            <button class=" " type="submit"><strong
                                    class="wordhover card-text ">Search</strong></button>
                                </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <!-- the header of the page ending -->
    <div class="invitation">
        <div>
            <img class="buisnessMen" src="./images/buisnessMen.jpeg">
        </div>

        <div class="invit">
            <h1 class="title2">Sign in for a better experience </h1>
            <p class="sous-title2"><b><i>Be able to easily post and manage your real estate and land listings.</br>
                        Reach more potential buyers,</br>
                        track your listings, and enjoy a seamless experience tailored to your needs.</br>
                        Start selling your properties today with ease!</p></i></b>
            <a class="nav-link" href="/SignUp"><button type="button" class=" btn bg-parchment mybtn2"><b
                        class="wordhover green-text">Sign
                        Up</b></button></a>
        </div>
    </div> <!--end of invitation-->

    <div class="cards">


        <div class="my_card">
            <img src="./images/sell.png " style="width: 150px; height:150px;">
            <div class="card-content">
                <h3 class="card-text">Sell a home</h3>
                <p class="card-text"><b><i> No matter what path you take to sell your
                            home, we can help you navigate a successful sale.</i> </b></p>
            </div>
            <div> 
                @if (Auth::check())
                <a href='productform' class="mybtn2 btn bg-parchment"><b class="green-text">Post it Now!</b></a>
            @else
                <a href='login' class="mybtn2 btn bg-parchment"><b class="green-text">Login to Post it Now!</b></a>
            @endif
            </div>
        </div>
        <div class="my_card">
            <img src="./images/buy.png " style="width: 150px; height:150px;">
            <div class="card-content">
                <h3 class="card-text">Join the community</h3>
                <p class="card-text"><b><i> Join a network of homeowners, buyers, and sellers in our vibrant
                            community.
                            We’re here to support you with resources, insights, and local connections to help you every
                            step of the way.</i> </b></p>
            </div>
            <div> <a href="/SignUp" class="mybtn2 btn bg-parchment"><strong class="green-text">Sign up
                    </strong></a></div>
        </div>

        <div class="my_card">
            <img src="./images/home.png " style="width: 150px; height:150px;">
            <div class="card-content">
                <h3 class="card-text"> Buy a home</h3>
                <p class="card-text"><strong><i>Find your place with an immersive photo
                            experience and the most listings, including things you won’t find anywhere else.</i>
                    </strong></p>
            </div>
            <div> <a href="/Menu" class="mybtn2 btn bg-parchment"><strong class="green-text">Browse
                        homes</strong></a></div>
        </div>
    </div> <!--End of cards-->

    <footer class="foot py-3 foot">
        <div class="prefooter">

        </div>
        <div>
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary"><b
                            class="card-text">Terms of Use</b></a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary"> <b
                            class="card-text">Features</b></a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary"><b
                            class="card-text">Who are We ?</b></a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary"><b
                            class="card-text">FAQs</b></a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary"><b
                            class="card-text">About</b></a></li>
            </ul>
            <p class=" text-center text-body-secondary "><b class="card-text">&copy; 2024 GreenLeaf Estates, Inc</b>
            </p>
            <div class="icons">
                <i class="icon fa-brands fa-facebook" style="color: #F2E8CF"></i>
                <i class="icon fa-brands fa-instagram" style="color: #F2E8CF"></i>
                <i class="icon fa-brands fa-x-twitter" style="color: #F2E8CF"></i>
            </div>

        </div>
    </footer>
    <script src="./js/bootstrap.js">
    </script> 

</body>
</html>
