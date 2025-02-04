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
    
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="{{asset('SignUp.css')}}" rel="stylesheet">
    <link href="{{asset('Sidebar.css')}}" rel="stylesheet">
    <link href="{{asset('SignIn.css')}}" rel="stylesheet">
    <link href="{{ asset('app.css') }}" rel="stylesheet">
</head>

<body style="background-color:#f0eee9;">
    <nav class="nav  navbar-expand-lg bg-parchment center" data-bs-theme="dark">
        <div class="container-fluid signav d-flex justify-content-center">
            <a class="navbar-brand" href="#">
                <img class="logo-nav" src="{{ asset('images/logo.png') }}" alt="Logo">
            </a>
        </div>
    </nav>
    <div class="d-flex flex-row ">
        <div class="sidebar">

            <div class="top">
                <div class="logo">
                    <i class="bx bxl-codepen"></i>
                    <span>GreenLeaf </span>
                </div>
                <i class="bx bx-menu" id="btn"></i>
            </div>
    
            <div class="user">
                <img src="{{ asset('images/profile.svg') }}" alt="me" class="user-img">
                <div><p class="bold">Client B.</p>
                <p>Admin</p>
            </div>
            </div>
            <ul>
                <li>
                    <a href="/">
                        <i class='bx bxs-home-alt-2'></i>
                        <span class="nav-item">Menu</span>
                    </a>
                    <span class="tooltip">Menu</span>
                </li><li>
                    <a href="/ProductsList">
                        <i class="bx bxs-shopping-bag"></i>
                        <span class="nav-item">Products</span>
                    </a>
                    <span class="tooltip">Products</span>
                </li> <li>
                    <a href="/CitiesList">
                        <i class='bx bxs-city'></i>
                        <span class="nav-item">Cities</span>
                    </a>
                    <span class="tooltip">Cities</span>
                </li> <li>
                    <a href="TypeList">
                        <i class="bx bx-list-check"></i>
                        <span class="nav-item">Type</span>
                    </a>
                    <span class="tooltip">Type</span>
                </li><li>
                    <a href="StatutList">
                        <i class='bx bx-question-mark'></i>
                        <span class="nav-item">Statut</span>
                    </a>
                    <span class="tooltip">statut</span>
                 </li>{{-- <li>
                    <a href="#">
                        <i class="bx bx-cog"></i>
                        <span class="nav-item">Settings</span>
                    </a>
                    <span class="tooltip">Settings </span>
                </li>--}}<li> 
                    <a href="/logout">
                        <i class="bx bx-log-out"></i>
                        <span class="nav-item">Logout</span>
                    </a>
                    <span class="tooltip">Logout</span>
                </li>
            </ul>
        </div>

        <div class="main-content ">