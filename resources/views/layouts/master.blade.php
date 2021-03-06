<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Qash - Crypto Exchange Dashboard UI Kit</title>
    @include('layouts.head')
</head>

<body>
<div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div> 
    <div id="main-wrapper">
    @yield("header")
        @yield('content')
    </div>
    @include('layouts.footer-script')
</body>
</html>
