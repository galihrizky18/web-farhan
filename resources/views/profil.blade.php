<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="bg-[#ebebeb] h-[653px]">
        <div class="flex flex-row">
            <div class="bg-zinc-600 h-[650px] w-[280px]">
                <div class="flex flex-row">
                    <div class="mx-5 mt-5">
                        <img src="{{ asset('asset/logo.jpeg') }}" class="w-[50px] h-[50px] rounded-full">
                    </div>
                    <div class="mt-10 text-white font-della font-bold">
                        <span>Dilia Utama</span>
                    </div>
                </div>
                <div class="border-white border-t border-b text-white w-[195px] mx-5 mt-8">
                    <span
                        class="flex justify-center font-della text-2xl">{{ $userCurrent->karyawan->nama_karyawan }}</span>
                </div>
                <div class="flex flex-col bg-indigo-500  w-[130px] h-[35px] mx-4 rounded-[10px] mt-10">
                    <a href="/admin/profil"></a>
                    <button class="flex items-center space-x-2 justify-left mx-3 w-[120px]">
                        <div class="mx-0">
                            <img src="{{ asset('asset/propil.png') }}" class="w-[21x] h-[21px] mt-1">
                        </div>
                        <div class=" text-white font-della mt-1" style="font-size: 16px;">
                            <span>Profil Admin</span>
                        </div>
                    </button>
                </div>
                <div class="flex flex-col bg-indigo-500  w-[120px] h-[35px] mx-4 rounded-[10px] mt-5">
                    <a href="/admin">
                        <button class="flex items-center space-x-2 justify-center">
                            <div class="">
                                <img src="{{ asset('asset/dash.png') }}" class="w-[20px] h-[20px] mt-1">
                            </div>
                            <div class=" text-white font-della mt-1 " style="font-size: 16px;">
                                <span>Dashboard</span>
                            </div>
                        </button>
                    </a>
                </div>
                <div class="flex flex-col border-t border-b  w-[120px] h-[35px] mx-10 mt-[340px]">
                    <a href="/logout" class="flex flex-row justify-center">
                        <button class="flex items-center space-x-2 justify-center">
                            <div class="">
                                <img src="{{ asset('asset/log.png') }}" class="w-[22px] h-[22px] mt-1">
                            </div>
                            <div class=" text-white font-della" style="font-size: 14px;">
                                <span>Log Out</span>
                            </div>
                        </button>
                    </a>
                </div>
            </div>
            <div class="h-20 w-[1320px]">
                <div class="bg-white w-auto h-[110px] ml-3 mr-3 rounded-[5px]">
                    <div class="pt-5">
                        <span class="font-della  pl-[38%]" style="font-size: 20px;">PT.Dilia Utama</span><br>
                        <span class="font-della  pl-[33%]" style="font-size: 20px;">Aplikasi Pengarsipan Data</span>
                    </div>
                </div>

                <form action="/admin/update-profil" method="POST">
                    @csrf
                    <div class="bg-white mt-10 w-[400px] h-[350px] mx-[270px] rounded-[5px] shadow-md hover:shadow-lg">
                        <div class="bg-zinc-600 flex flex-row h-[80px]">
                            <div class="pl-5 pt-2 mt-2">
                                <img src="{{ asset('asset/propil.png') }}" class="w-[40px] h-[40px]">
                            </div>
                            <div class="mt-6 ml-3">
                                <span class="font-della text-white">Profil Admin</span>
                            </div>
                        </div>
                        <div class="mx-[100px] mt-[40px] ">
                            <input type="text" id="username" name="username" value="{{ $userCurrent->username }}"
                                class="rounded-md shadow-md bg-slate-200 w-[200px] h-[35px]"
                                style="border-radius: 5px;">
                        </div>
                        <div class="mx-[100px] mt-[25px] ">
                            <input type="text" id="email" name="email" value="{{ $userCurrent->email }}"
                                class="rounded-md shadow-md bg-slate-200 w-[200px] h-[35px]"
                                style="border-radius: 5px;">
                        </div>
                        <div class="mx-[100px] mt-[25px] ">
                            <input type="text" id="noHp" name="noHp" value="{{ $userCurrent->noHp }}"
                                class="rounded-md shadow-md bg-slate-200 w-[200px] h-[35px]"
                                style="border-radius: 5px;">
                        </div>
                        <div class="tombol flex justify-center mt-5">
                            <button type="submit" class="bg-sky-500 text-white w-[50%] font-bold">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
