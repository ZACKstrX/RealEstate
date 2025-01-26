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
    
    <link rel="icon" href="./images/logo.png" type="image/png">
    <link href="./app.css" rel="stylesheet">
    <link href="./SignUp.css" rel="stylesheet">
    <link href="./SignIn.css" rel="stylesheet">
    <link href="./sidebar.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body class="bg-parchment">
    <nav class="nav  navbar-expand-lg bg-parchment center" data-bs-theme="dark">
        <div class="container-fluid signav d-flex justify-content-center">
            <a class="navbar-brand" href="#">
                <img class="logo-nav" src="./images/logo.png" alt="Logo">
            </a>
        </div>
    </nav>
    
    <div class="sidebar">

        <div class="top">
            <div class="logo">
                <i class="bx bxl-codepen"></i>
                <span>GreenLeaf </span>
            </div>
            <i class="bx bx-menu" id="btn"></i>
        </div>

        <div class="user">
            <img src="./images/profile.svg" alt="me" class="user-img">
            <div><p class="bold">Client B.</p>
            <p>Admin</p>
        </div>
        </div>
        <ul>
            <li>
                <a href="#">
                    <i class="bx bxs-grid-alt"></i>
                    <span class="nav-item">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>  <li>
                <a href="#">
                    <i class="bx bxs-shopping-bag"></i>
                    <span class="nav-item">Products</span>
                </a>
                <span class="tooltip">Products</span>
            </li>  <li>
                <a href="#">
                    <i class="bx bx-cog"></i>
                    <span class="nav-item">Settings</span>
                </a>
                <span class="tooltip">Settings </span>
            </li>  <li>
                <a href="#">
                    <i class="bx bx-list-check"></i>
                    <span class="nav-item">Categories</span>
                </a>
                <span class="tooltip">Categories</span>
            </li> <li>
                <a href="#">
                    <i class="bx bx-log-out"></i>
                    <span class="nav-item">Logout</span>
                </a>
                <span class="tooltip">Logout</span>
            </li>
        </ul>
    </div>

    <div class="main-content">
        <div class="container">
            <h1>GreenLeaf Estates </h1>
        </div>
    </div>  

</body>
<script>
    let btn = document.querySelector('#btn');
    let sidebar = document.querySelector('.sidebar');
    btn.onclick = function(){
        sidebar.classList.toggle('active');
    };
</script>
</html>
