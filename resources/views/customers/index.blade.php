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
    <a href="{{route('customers.create')}}">
        <div class="bg-blue-400 px-5 py-2 text-center w-20">+</div>
    </a>
    <div class="grid w-3/4 place-items-center">
        <h1>Customers Detail</h1>
        <div class="flex flex-row py-1 w-full font-bold border-blue-500 border-bottom">
            <div class="w-2/5">name</div>
            <div class="w-1/5">phone</div>
            <div class="w-1/5">Blod</div>
            <div class="w-1/5">Age</div>
        </div>
        @foreach($customers->sortDesc() as $customer)
        <div class="flex flex-row py-1 w-full border-blue-50 border-bottom">
            <div class="w-2/5"><a href="{{url('customers', $customer->id)}}">{{$customer->name}}</a></div>
            <div class="w-1/5">{{$customer->phone}}</div>
            <div class="w-1/5">{{$customer->blood_group}}</div>
            <div class="w-1/5">{{$customer->age}}</div>
            <div class="flex">
                <a href="{{route('customers.edit', $customer->id)}}">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                    </svg>
                </a>

                <div class="ml-2 text-red-700">
                    <form action="{{route('customers.destroy', $customer)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white font-bold py-2 px-4 rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                            </svg>
                        </button>

                    </form>
                </div>
            </div>

        </div>
        @endforeach

        <a href="/">Back</a>
    </div>
    <div class="w-2/3">
        <table class="table-fixed w-full">
            <thead>
                <tr>
                    <th class="border border-slate-300 bg-slate-500 text-3xl font-sans">Song</th>
                    <th>Artist</th>
                    <th>Year</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>The Sliding Mr. Bones (Next Stop, Pottersville)</td>
                    <td>Malcolm Lockyer</td>
                    <td>1961</td>
                </tr>
                <tr>
                    <td>Witchy Woman</td>
                    <td>The Eagles</td>
                    <td>1972</td>
                </tr>
                <tr>
                    <td>Shining Star</td>
                    <td>Earth, Wind, and Fire</td>
                    <td>1975</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>