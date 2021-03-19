<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Tailwind Starter Template - Minimal Blog: Tailwind Toolbox</title>
    <meta name="author" content="name" />
    <meta name="description" content="description here" />
    <meta name="keywords" content="keywords,here" />
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <!-- Page Content -->

    {{ $slot }}

</body>

</html>