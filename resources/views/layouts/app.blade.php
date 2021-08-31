<!DOCTYPE html>
<html lang="eng">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Laracasts</title>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>{{-- Swal 2 --}}
    @livewireStyles
</head>

<body class="fundo">

   

    <div class="container-fluid">
        @include('header')
    </div>

    <div class="container">
        @yield('content')
    </div>

    @if(isset($slot))
    <div class="container">
        {{$slot}}
    </div>
    @endif
    
    <div class="container-fluid">
        @include('footer')
    </div>
    <script type="text/javascript" src="{{mix('/js/app.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    @livewireScripts
</body>

</html>