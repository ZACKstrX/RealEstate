<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>GreenLeaf Estates</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-datepicker@1.9.0/dist/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.googleapis.com/css2?family=Frank+Ruhl+Libre&display=swap" rel="stylesheet">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    
        <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" />
        <link href="{{ asset('SignUp.css') }}" rel="stylesheet">
        <link href="{{ asset('SignIn.css') }}" rel="stylesheet">
        <link href="{{ asset('sidebar.css') }}" rel="stylesheet">
        <link href="{{ asset('form.css') }}" rel="stylesheet">
        <link href="{{ asset('app.css') }}" rel="stylesheet">
        <link href="{{ asset('User.css') }}" rel="stylesheet">
        <link href="{{ asset('Card.css') }}" rel="stylesheet">
    
    

</head>

<body style="background-color:#f0eee9;">
    <nav class="nav  navbar-expand-lg bg-parchment center" data-bs-theme="dark">
        <div class="container-fluid signav d-flex justify-content-center">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img class="logo-nav" src="{{asset('images/logo.png')}}" alt="Logo" >
            </a>
        </div>
    </nav>
        