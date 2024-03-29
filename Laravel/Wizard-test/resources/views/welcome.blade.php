<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cursos Online</title>
    @livewireStyles
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap">
    <link href="{{ asset('multiform.css') }}" rel="stylesheet" id="bootstrap">
</head>

<body class="mt-5">
    <div class="container pb-3">
        <div class="text-center">
            <h1 class="text-xl">@yield('title')</h1>

        </div>
        {{$slot}}
    </div>
</body>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
@livewireScripts

</html>