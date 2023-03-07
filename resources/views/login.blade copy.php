<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Login</title>
</head>

<body class="bg-gray-200">
    <!-- <p class="bg-red-400 hover:bg-red-600">This is Paragraph</p> -->
    <div class="flex justify-center mt-20">
        <form action="user_login" method="post" class="bg-white p-9 xs:m-2 xs:p-4 w-[27rem] rounded-md xs:w-[20rem]">

            @if (Session::has('success'))
                <div class="bg-green-600 text-white py-3 px-2 mb-3 rounded-md">{{ Session::get('success') }}</div>
            @elseif(Session::has('fail'))
                <div class="bg-red-600 text-white py-3 px-2 mb-3 rounded-md">{{ Session::get('fail') }}</div>
            @endif
            <div class="text-center font-bold text-gray-700 text-md"><label>Login Form</label></div>

            <label for="email" class="font-bold text-gray-700">Email Address</label>
            <div>
                @csrf
                <input
                    class="pl-1 rounded-md border-solid border-gray-400 border focus:outline focus:outline-blue-500 w-full h-11 mt-2 mb-2"
                    type="email" id="email" name="email" value="{{old('email')}}">
                @error('email')
                    <p class="text-red-500 pb-3 font-bold">{{ $message }}</p>
                @enderror

            </div>

            <label for="password" class="font-bold text-gray-700">Password</label>
            <div><input
                    class="pl-1 rounded-md border-solid border-gray-400 border focus:outline focus:outline-blue-500 w-full h-11 mt-2 mb-2"
                    type="password" id="password" name="password">
                    @error('password')
                    <p class="text-red-500 pb-3 font-bold">{{ $message }}</p>
                    @enderror
                
                </div>

            <div class="flex justify-between">
                <div>
                    <input type="checkbox"> <label>Remember</label>
                </div>
                <div class="hidden xs:block">
                    <a href="#" class="font-bold text-blue-700">Forgot password?</a>
                </div>
                <div class="xs:hidden block">
                    <a href="#" class=" font-bold text-blue-700">Forgot your password?</a>
                </div>

            </div>

            <button type="button" onclick="window.location.href='/registration'"
                class="w-full bg-green-600 hover:bg-green-700 text-white px-9 py-2 mt-5 rounded-md ">Registration</button>

            <button class="w-full bg-blue-700 hover:bg-blue-600 text-white px-2 py-2 rounded-md mt-3 mb-3">Login</button>

        </form>
    </div>
</body>

</html>
