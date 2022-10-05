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
    <div class="grid w-screen h-screen place-items-center">
        <!-- <a href="{{route('customers.index')}}">Customers</a> -->
        <a href="{{url('customers')}}">Customers</a>
        <ul>
            <!-- <li> <a href="{{url('customers')}}">List Customers</a></li>
            <li> <a href="{{url('customers/create')}}">Create Customers</a></li>
            <li> <a href="{{url('customers/1')}}">Show Customer</a></li>
            <li> <a href="{{url('customers/1/edit')}}">Edit Customers</a></li> -->
            <li> <a href="{{route('customers.index')}}">List Customers</a></li>
            <li> <a href="{{route('customers.create')}}">Create Customers</a></li>
            <li> <a href="{{route('customers.show',2)}}">Show Customer</a></li>
            <li> <a href="{{route('customers.edit',3)}}">Edit Customers</a></li>
        </ul>
    </div>


</body>

</html>