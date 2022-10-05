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
    <div class="bg-yellow-400 text-center pt-2 pb-2 text-lime-800 text-3xl">Create Page</div>

    <form action="{{route('customers.store')}}" method='post'>
        @csrf

        <div class="flex flex-col  w-3/4 border border-red-400">
            <div><label for="" class="mt-4">Name</label></div>
            <div><input name='name' type="text" placeholder="Enter name"></div>

            <div><label for="" class="mt-4">Phone</label></div>
            <div><input name='phone' type="text" placeholder="Enter Phone"></div>

            <div><label for="" class="mt-4">Blood Group</label></div>
            <div><input name='blood_group' type="text" placeholder="Enter blood group"></div>

            <div><label for="" class="mt-4">Age</label></div>
            <div><input name='age' type="number" placeholder="Enter age"></div>


        </div>

        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">Submit</button>

    </form>
</body>

</html>