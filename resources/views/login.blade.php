<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <!-- font cdn -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Della+Respira&display=swap" rel="stylesheet">

    @vite('resources/css/app.css')

</head>

<body>
    <div class="bg-stone-200 w-[auto] h-[653px]">
        <div class="flex flex-row bg-neutral-400 h-[100px]">
            <div class="gambar w-[8%] h-[8%] mx-6 mt-2">
                <img src="{{ asset('asset/dilla.png') }} ">
            </div>
            <div class="font-serif text-center mt-5 mx-[16%] w-[670px]">
                <span class="text-2xl text-white font-della">Aplikasi Manajemen</span><br>
                <span class="text-2xl text-white font-della">Pengelola Arsip</span>
            </div>
        </div>
        <div class="bg-gray-200 w-[550px] h-[400px] mb-4 mx-[32%] mt-10 shadow-xl shadow-slate-[50%]">
            <div class=" bg-neutral-400 w-[auto] h-[70px] rounded-bl-none rounded-br-none ">
                <span class="font-della mx-[190px] text-white" style="line-height:4;">Create New Account</span>
            </div>
            <div class="flex flex-row ">
                <div class=" w-[280px] h-[330px]">
                    <img src="{{ asset('asset/propil.png') }}" class="w-[60px] h-[60px] mt-5 mx-[32%]">
                    <span class="text-black mx-24 mb-4 font-della" style="line-height:3;">Login</span>
                    <form action="/login" method="POST">
                        @csrf
                        <div class="flex flex-col">
                            <div class="mx-[10%] mt-1">
                                <input type="text" id="username" name="username" placeholder="Username"
                                    class="w-full h-10 rounded-md shadow-md"
                                    style="width: 90%; height: 27px;  border-radius: 5px;">
                            </div>
                            <div class="mx-[10%] mt-4 shadow-xl shadow-slate-[10%]">
                                <input type="password" id="password" name="password" placeholder="Password"
                                    class="w-full h-10 rounded-md shadow-md"
                                    style="width: 90%; height: 27px;  border-radius: 5px;">
                            </div>
                            <div class="">
                                <a href="/account" class="mx-[10%] text-[55%] font-della">do you have account ? Sign Up
                                    here</a>
                            </div>
                            <div class="text-left mx-[26%] mt-2 ">
                                <button type="submit"
                                    class="bg-blue-500 hover:bg-red-600 text-white font-bold py-2 px-4 in  font-della h-10 w-24 rounded-[15%] shadow-md">
                                    SignIn
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="bg-gray-200 w-[280px] h-[330px] ">
                    <img src="{{ asset('asset/dilla.png') }}" class="mt-16 mx-10 w-[60%] h-[40%]">
                </div>
            </div>
        </div>
    </div>
</body>

</html>
