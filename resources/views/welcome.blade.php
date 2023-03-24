<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Script --}}
    @vite(['resources/js/app.js'])

    <title>Terciel</title>
</head>
<body>
    <div class="alert alert-success">
        <h1>Success</h1>
    </div>
</body>
</html>