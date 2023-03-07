<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Dashboard</title>
</head>

<body>
    <div class="bg-yellow-500 px-3 py-2 m-1 flex justify-between items-center ">
        <div class="align-middle">Hi <span class="font-bold">{{ Session::get('username') }}</span>, Welcome Your Dashboard</div>
        <div onclick="window.location.href='logout'"><button class="bg-green-700 hover:bg-green-600 outline-offset-2 outline-green-300 outline-2 hover:outline-solid focus:outline-solid py-2 px-2 rounded-md text-white">Logout</button></div>
        {{-- <div>{{Session::get('login')}}</div>    --}}
    </div>
</body>

</html>
