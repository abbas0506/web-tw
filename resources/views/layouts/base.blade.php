<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOT</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="container h-screen w-screen">
        <div class="h-5/6">
            @yield('header')
            @yield('body')
        </div>
        <!-- footer -->
        <x-app-footer></x-app-footer>
    </div>

</body>

</html>