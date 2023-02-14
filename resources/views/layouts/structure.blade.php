<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">     
    <meta name="viewport" content="width=device-width, initial-scale=1">            
    <link href="ico/logo.ico" rel="icon">
    <title>@yield('title')</title>    
    {{-- @vite(['resources/css/app.css','resources/scss/app.scss','resources/js/app.js']) --}}
</head>
<body class="p-3 m-0 border-0 bd-example">    
    <div class="1">
        @include('partials.navbar')
    </div>
    <div class="2">
    @yield('content')    
    </div>
    <div class="3">        
        <br>
        <br>
        <hr>
        @include('partials.footer')
    </div>       
</body>
</html>

