<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dear Client</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-datepicker@1.9.0/dist/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="./app.css" rel="stylesheet"> 
</head>
<body>
    <div class="header-container">
       
        <nav class="nav navbar navbar-expand-lg bg-success" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Logements</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Homes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Lands</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto">
                        
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sign Up</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

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
                                <input class="form-control form-control-sm me-2" type="search" placeholder="Search" aria-label="Search"
                                  >
                                <button class="btn btn-success"  type="submit">Search</button>   
                             </form>
                        </div>
                   
                </div>
             </div>
        </div>
        
    </div>
<h1>ouuf</h1>
</body>
</html>