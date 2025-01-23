<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>GreenLeaf Estates</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-datepicker@1.9.0/dist/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link rel="icon" href="./images/logo.png" type="image/png">
    <link href="./app.css" rel="stylesheet"> 
</head>
<body class="bg-parchment">
    <div class="header-container">
       
        <nav class="nav navbar navbar-expand-lg bg-parchment" data-bs-theme="dark">
            <div class="container-fluid">
                <div><img class="logo-nav" src="./images/logo.png" alt=""><a class="navbar-brand" href="#"></a></div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="color:#6a994e" ><strong class="wordhover">Homes</strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"style="color:#6a994e"><strong class="wordhover">Lands</strong></a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto">
                        
                        <li class="nav-item">
                            <a class="nav-link " href="#"><button type="button " class="mybtn btn dark-green " ><strong class="wordhover">Sign in</strong></button></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><button type="button" class="mybtn btn dark-green " ><strong class="wordhover">Sign Up</strong></button></a>
                        </li>
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
                                <h1 class="title" style="color: #F2E8CF">Find Your Home Here </h1>
                                <p class="sous-title" style="color: #F2E8CF"><i>Discover the perfect</br>
                                                         property for your needs.</br>
                                                          Browse homes, lands, and more</br>
                                                          in just a few clicks!</i></p>
                            </div>
                            <form class="search" role="search">
                                <input class="form-control form-control-sm me-2 bg-parchment inputfocus inputhover" type="search" placeholder="Search" aria-label="Search"
                                  >
                                <button class="btn dark-green buttonhover buttonfocus "  type="submit" style="color: white"><strong class="wordhover">Search</strong></button>   
                             </form>
                        </div>
                   
                </div>
             </div>
        </div>
        
    </div>

                                                <!-- the header of the page ending -->
<div class="invitation" >
    <div>
        <img class="buisnessMen" src="./images/buisnessMen.jpeg" >
    </div>

    <div class="invit">
        <h1 class="title2" >Sign in for a better experience </h1>
        <p class="sous-title2" ><strong><i>Be able to easily post and manage your real estate and land listings.</br>
                                          Reach more potential buyers,</br> 
                                          track your listings, and enjoy a seamless experience tailored to your needs.</br>
                                          Start selling your properties today with ease!</p></i></strong>
             <a class="nav-link" href="#"><button type="button" class=" btn bg-parchment inputhover inputfocus" ><strong class="wordhover" style="color: #6a994e">Sign Up</strong></button></a>
    </div>
</div>                                   <!--end of invitation-->

<div class="cards">
    <div class="card" style="width: 18rem;">
        <img src="./images/buy.png " style="width: 150px; height:150px;">
        <div class="card-content">
          <h3 class="card-title" style="color: #F2E8CF"> Buy a home</h3>
          <p class="card-text" style="color: #F2E8CF"><strong><i>Find your place with an immersive photo experience and the most listings, including things you won’t find anywhere else.</i> </strong></p>
        </div>
        <div> <a href="#" class="mybtn btn dark-green" style="background-color: #F2E8CF"><strong style="color:  #6a994e">Browse homes</strong></a></div>
      </div>

      <div class="cards">
        <div class="card" style="width: 18rem;">
            <img src="./images/sell.png " style="width: 150px; height:150px;">
            <div class="card-content">
              <h3 class="card-title" style="color: #F2E8CF">Sell a home</h3>
              <p class="card-text" style="color: #F2E8CF"><strong><i> No matter what path you take to sell your home, we can help you navigate a successful sale.</i> </strong></p>
            </div>
            <div> <a href="#" class="mybtn btn dark-green" style="background-color: #F2E8CF"><strong style="color:  #6a994e">Post it Now !</strong></a></div>
          </div>

      

</div>



</body>
</html>