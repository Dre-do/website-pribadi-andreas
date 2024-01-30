<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
    <title>Post Manage</title>
</head>
<style>
    /* CSS */
    body {
        background-color: #f8f9fa;
        background-image: linear-gradient(120deg, #ff6b6b, #3a86ff);
        background-size: 200% 200%;
        animation: gradientAnimation 10s ease infinite;
        font-family: 'Poppins', Arial, sans-serif;
    }

    h1 {
        text-align: center;
        margin-top: 50px;
        color: #333;
        font-size: 36px;
        font-weight: bold;
        text-transform: uppercase;
    }

    /* CSS */
    html {
        scroll-behavior: smooth;
    }

    /* CSS */
    .fade-in {
        opacity: 0;
        transition: opacity 0.5s;
    }

    .fade-in.fade-in-visible {
        opacity: 1;
    }

    /* CSS */
    #toggleTarget {
        width: 200px;
        height: 200px;
        background-color: #f1f1f1;
    }
</style>
<body>
    <div>
        <nav>
            <ul class="navbar-nav ms-auto">
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Welcome back, {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu">
                    <li class="nav-item">
                    <a href="{{ route('posts.index') }}" class="nav-link">Posts</a>
                </li>
                    </ul>
                </li>
                @else
                <li class="nav-item">
                    <a href="/login" class="nav-link">Sign in</a>
                </li>
                @endauth
            </ul>
        </nav>
    </div>

    @yield('content')

    <script>
        window.addEventListener("scroll", function() {
            var fadeInElements = document.querySelectorAll(".fade-in");
            for (var i = 0; i < fadeInElements.length; i++) {
                var element = fadeInElements[i];
                var bounding = element.getBoundingClientRect();
                if (
                    bounding.top >= 0 &&
                    bounding.bottom <= (window.innerHeight || document.documentElement.clientHeight)
                ) {
                    element.classList.add("fade-in-visible");
                }
            }
        });

        var toggleBtn = document.getElementById("toggleBtn");
        var toggleTarget = document.getElementById("toggleTarget");

        toggleBtn.addEventListener("click", function() {
            toggleTarget.classList.toggle("bg-blue");
        });
    </script>
</body>
</html>
