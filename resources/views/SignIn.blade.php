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
    <link href="./app.css" rel="stylesheet">
    <link href="./SignUp.css" rel="stylesheet">
    <link href="./SignIn.css" rel="stylesheet">
</head>

<body class="dark-green">
    <div class="header-container">

        <nav class="nav navbar navbar-expand-lg bg-parchment" data-bs-theme="dark">
            <div class="container-fluid signav d-flex justify-content-center">
                <a class="navbar-brand" href="#">
                    <img class="logo-nav" src="./images/logo.png" alt="Logo">
                </a>
            </div>
        </nav>
        <!--navbar end-->

        <div class="bgimg">
            <div class="SignInform">
                <div class="CentredItems">
                    <img class="logo-nav-bigger" src="./images/logo.png" alt="">
                    <h1 class="bgcText "><b><i><u>Log In</u></i> </b></h1>

                    <form class="CentredItems" method="POST" action="/login">
                        @csrf
                        <div>
                            <div class="form-group">
                                <label for="exampleInputEmail1"><b class="green-input"> <i>Email address</i> </b></label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Enter email" value="{{ old('email') }}">
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1"><b class="green-input"><i>Password</i> </b></label>
                                <input type="password" class="form-control tt @error('password') is-invalid @enderror" name="password" placeholder="Password" value="{{ old('password') }}">
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    
                        <button type="submit" class="mt-4 btn bgc "><b class="card-text"><i>Log In</i> </b></button>
                        <small>You don't have an account? <a href="/SignUp">Sign up</a></small>
                    </form>


            </div>
        </div>

</body>

</html>
