<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Andreas Domenico Situmorang</title>
    <link rel="stylesheet" href="css/style.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

</head>

<body>
    <!-- Navbar Start -->
    <nav class="navbar">
        <!-- <img src="img/logo.jpg" alt=" logo" style="height: 50px" /> -->
        <a href="#" class="navbar-logo">Dre.<span>do</span></a>

        <div class="navbar-nav">
            <a href="/">Home</a>
            <a href="/table">Table</a>
            <a href="/form">Form</a>
            <a href="/login">Login</a>
            {{-- <a href="#contact">Contact</a> --}}
        </div>

        <div class="navbar-extra">
            <!-- Mau membuat dark/light mode -->
            <!-- <div class="switch">
                <input type="checkbox" name="switch" id="custom-switch" class="switch-checkbox">
                <label for="custom-switch" class="switch-label">
                    <span class="switch-one"></span>
                    <span class="switch-two"></span>
                </label>
            </div> -->
            <a href="#" id="search"> <i data-feather="search"></i></a>
            <a href="#" id="shopping-cart"> <i data-feather="shopping-cart"></i></a>
            <a href="#" id="hamburger-menu"> <i data-feather="menu"></i></a>
        </div>
    </nav>
    <!-- Navbar end -->

    @yield('container')

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- Feather Icons -->
    <script>
        feather.replace()
    </script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"
        integrity="sha512-ZKNVEa7gi0Dz4Rq9jXcySgcPiK+5f01CqW+ZoKLLKr9VMXuCsw3RjWiv8ZpIOa0hxO79np7Ec8DDWALM0bDOaQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/animate.js"></script>
    <script src="js/script.js"></script>
</body>


</html>