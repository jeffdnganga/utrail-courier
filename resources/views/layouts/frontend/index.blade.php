<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') || UTrail</title>
    <script src="https://kit.fontawesome.com/01b4b6f929.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
</head>
<body>
    {{-- Different Navigation bars --}}
        @guest
            @include('layouts.frontend.includes.navigation') 
        @else
            @if (Auth::user()->role->id == 1)
            @include('layouts.frontend.includes.navigation') 
            @elseif (Auth::user()->role->id == 2)
                @include('layouts.frontend.includes.transporter_navigation')
            @else
                @include('layouts.frontend.includes.client_navigation')
            @endif  
        @endguest
    {{-- Navigation bar ends --}}

    @yield('content')


    @include('layouts.frontend.includes.footer')
    @include('layouts.frontend.includes.scripts')  

    </body>
</html>
