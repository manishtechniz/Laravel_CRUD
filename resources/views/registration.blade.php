<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Registration</title>
</head>

<body class="bg-gray-200">
    <!-- <p class="bg-red-400 hover:bg-red-600">This is Paragraph</p> -->
    <div class="flex justify-center mt-20">

        <form action="reg_form" method="post" class="bg-white p-9 xs:m-2 xs:p-4 w-[27rem] rounded-md xs:w-[20rem]">
            @if (Session::has('success'))
                <div class="bg-green-600 text-white py-3 px-2 mb-3 rounded-md">{{ Session::get('success') }}</div>
            @elseif(Session::has('fail'))
                <div class="bg-red-600 text-white py-3 px-2 mb-3 rounded-md">{{ Session::get('fail') }}</div>
            @endif
            <div class="text-center font-bold text-gray-700 text-md"><label>Registration Form</label></div>
            @csrf
             
             <x-input label="Name" type="text" name="name"/>
             <x-input label="Email Address" type="email" name="email"/>
             <x-input label="Password" type="password" name="password"/>
             
            <div class="flex justify-between">
                <div class="w-full">
                    <button type="button" onclick="window.location.href='/login'"
                        class="w-full bg-green-600 hover:bg-green-700 text-white px-9 py-2 mt-3 rounded-md ">Login</button>
                </div>
            </div>

            <button type="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white px-2 py-2 rounded-md mt-2 mb-3">Register</button>

        </form>
    </div>
</body>

</html>
