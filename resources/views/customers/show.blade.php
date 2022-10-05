<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <!-- tailwind css file -->
    @vite('resources/css/app.css')

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased">
    <div class="grid w-screen place-items-center">
        <div style='margin-top:50px'>{{$customer->name}}</div>
        <div class="flex flex-row">
            <div class="text-red-800 mr-3">Phone:</div>
            <div>{{$customer->phone}}</div>
        </div>
        <div class="flex flex-row">
            <div class="text-red-800 mr-3">Blood Group:</div>
            <div>{{$customer->blood_group}}</div>
        </div>
        <div>edit</div>



    </div>

</body>

</html>