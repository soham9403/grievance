<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet"> --}}
    <link href="{{ asset('font/Poppins-Regular.ttf') }}">
    <script src="{{ asset('js/jquery.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/header.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/common.css') }}" />


    <title>@yield('title')</title>
    @yield('styles')
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}" />
    <style>
        @font-face {
            font-family: "Poppins";
            src: url("{{asset('font/Poppins-Regular.ttf')}}");            
            font-weight: 400;
            font-style: normal;
        }

        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

    </style>
</head>

<body>
    @yield('body')
    @yield('scripts')
</body>

</html>
