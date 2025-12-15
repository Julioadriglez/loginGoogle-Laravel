<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

     <style>
    
    .hero {
      min-height: 100vh;
      display: flex;
      align-items: center;
    }

    .admin-card {
      background: #0f172a;
      border-radius: 20px;
      box-shadow: 0 20px 40px rgba(0,0,0,0.5);
      transition: transform 0.2s ease;
    }

    .admin-card:hover {
      transform: translateY(-5px);
    }

    .btn-admin {
      background: linear-gradient(135deg, #6366f1, #22d3ee);
      border: none;
      color: #fff;
    }

    .btn-admin:hover {
      opacity: 0.9;
    }

    .icon {
      font-size: 2.5rem;
    }
  </style>
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen text-bg-primary ">
        @include('layouts.navigation')

        <!-- Page Heading -->

        @if(auth()->user()->role === 'admin')
            <div class="container-fluid">
                @if(View::hasSection('content'))@yield('content')
                @else
                    @include('admin')

                @endif

            </div>
        @else
            @include('home')
        @endif
</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.2/dist/umd/popper.min.js"
    integrity="sha384-q9CRHqZndzlxGLOj+xrdLDJa9ittGte1NksRmgJKeCV9DrM7Kz868XYqsKWPpAmn"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
    crossorigin="anonymous"></script>
<footer class="p-3 mb-2 bg-primary text-white fixed-bottom">
    <h6 class="text-center">API Cliente - &copy; 2025</h6>

</footer>

</html>