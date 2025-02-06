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
</head>

<body class="bg-parchment">

    <nav class="nav navbar navbar-expand-lg bg-parchment" data-bs-theme="dark">
        <div class="container-fluid">
            <div>
                <a class="navbar-brand" href="{{ url('/') }}"><img class="logo-nav" src="./images/logo.png"
                        alt=""></a>
            </div>
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

                    <li class="nav-item">
                        <a class="nav-link " href="/login"><button type="button " class="mybtn btn dark-green "><strong
                                    class="wordhover card-text">Sign
                                    in</strong></button></a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    {{-- navbar end --}}


    <div class="img">

        <form class="form" method="POST" action="/signup">
            @csrf
            <div class="d-flex flex-column align-items-center ">
                <img class="w-25" src="./images/logo.png" alt="">
                <h2 class="SignINc"><b><i><u>Sign Up</u></i> </b></h2>
            </div>
            
            <div class="row mb-4">
                <div class="col">
                    <label for="inputFirstName"><b class="green-text">First Name</b> </label>
                    <input type="text" class="form-control searchopacity @error('first_name') is-invalid @enderror"id="inputFirstName" name="first_name"
                        placeholder="First name">
                        @error('first_Name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                </div>
                <div class="col">
                    <label for="inputLastName"><b class="green-text">Last Name</b></label>
                    <input type="text" class="form-control searchopacity @error('last_name') is-invalid @enderror"id="inputLastName" name="last_name"
                        placeholder="Last name">
                        @error('last_Name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                </div>

            </div>
            <div class="row  mb-4">
                <div class="form-group col-md-6">
                    <label for="inputEmail4"><b class="green-text">Email</b></label>
                    <input type="email" class="form-control searchopacity @error('email') is-invalid @enderror" id="inputEmail4" name="email"
                        placeholder="Email">
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                </div>  

                <div class="form-group col-md-6">
                    <label for="inputPhoneNumber"><b class="green-text">Phone Number</b></label>
                    <input type="text" class="form-control searchopacity @error('phone_number') is-invalid @enderror" id="inputPhoneNumber" name="phone_number"
                        placeholder="Phone Number">
                        @error('phone_number')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

            </div>
            <div class="form-group  mb-4">
                <label for="inputAddress "><b class="green-text">Address</b></label>
                <input type="text" class="form-control searchopacity" id="inputAddress" name="adresse"
                    placeholder="1234 Main St">
            </div>


            <div class="row mb-4">
                <div class="form-group  col-md-6 ">
                    <label for="inputPassword4"><b class="green-text">Password</b></label>
                    <input type="password" class="form-control searchopacity @error('password') is-invalid @enderror" id="inputPassword4" name="password"
                        placeholder="Password...">
                        @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group col-md-6">
                    <label for="birthday"><b class="green-text ">Birthday</b></label>
                    <input name="birthday" id="birthday" class="form-control searchopacity"
                        placeholder="Pick a Date">

                </div>

            </div>

            <div class="form-group ">
                <div class="form-check">
                    <input class="form-check-input " type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        <b class="green-text">Check me out</b>
                    </label>
                </div>
            </div>
            <button type="submit" class="mybtn btn dark-green "><strong
                    class="wordhover card-text">SignUp</strong></button>
    </div>



    </form>
    </div>
    </div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-datepicker@1.9.0/dist/js/bootstrap-datepicker.min.js"></script>

<script>
    $(document).ready(function() {
        $('#birthday').datepicker({
            format: 'yyyy/mm/dd',
            endDate: '0d',
            autoclose: true,
            startView: 2,
            todayHighlight: true
        });
    });
</script>

</html>
