<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gashop</title>
    <meta name="description" content="Shop">
    <meta name="keywords" content="shop,store">
    <link rel="stylesheet" href="/css/style.css">
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,400&display=swap" rel="stylesheet">
</head>

<body class="bg-white text-gray-600 work-sans leading-normal text-base tracking-normal">

    {{-- Navbar --}}
    <x-navbar-user></x-navbar-user>

    {{-- Content --}}
    {{ $slot }}

    {{-- Footer --}}
    <x-footer-user></x-footer-user>

</body>

</html>
