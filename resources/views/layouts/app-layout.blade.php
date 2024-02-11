<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery Photo | @yield('title')</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="">

    @include('layouts.sidebar')

    <div class="p-4 lg:ml-64">
        <div class="p-4 rounded-lg mt-14">
            @yield('content')
        </div>
    </div>
</body>

</html>
