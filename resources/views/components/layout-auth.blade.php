<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gashop</title>
    <meta name="description" content="Shop">
    <meta name="keywords" content="shop,store">
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,400&display=swap" rel="stylesheet">
</head>

<body>
    <x-navbar-auth></x-navbar-auth>
    <div class="flex justify-center items-center h-screen bg-white">
        {{ $slot }}
    </div>
</body>

</html>
