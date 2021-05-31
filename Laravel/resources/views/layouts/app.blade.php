<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-2021.css">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Scientia') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
</head>

<body class='w3-light-grey'>
<br><br><br>

<!-- HEADER -->
<nav class="w3-display-container w3-center w3-green w3-top" style="max-width:1500px">
    <h3 class="w3-xxlarge"><b>Scientia</b></h3>
    <h6>Join to Scientia to learn English for $FREE.99!</h6>
        @guest
            @if (Route::has('login'))
                <a class="w3-hover-light-grey w3-round w3-button" href="{{ route('login') }}">Login</a>           
            @endif
            @if (Route::has('register'))
                <a class="w3-hover-light-grey w3-round w3-button" href="{{ route('register') }}">Register</a>
            @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
</nav>
<!-- AKHIR HEADER -->

<br><br><br><br><br>   

@yield('content')

<!-- FOOTER -->
<div class='w3-center'>
  <p>Make sure you insert the actual information. Get the best experience by joining Scientia!</p>
  <p>All rights reserved. Copyright © 2021 Scientia Developer Team</p>
</div>
<!-- FOOTER -->
</body>
</html>