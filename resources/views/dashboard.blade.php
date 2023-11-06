<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite('resources/css/app.css')

    {{-- Data Table --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
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
                        class="flex justify-center font-della text-2xl ">{{ $userCurrent->karyawan->nama_karyawan }}</span>
                </div>
                <div class="flex flex-col bg-indigo-500  w-[130px] h-[35px] mx-4 rounded-[10px] mt-10">
                    <a href="/admin/profil">
                        <button class="flex items-center space-x-2 justify-left mx-3 w-[120px]">
                            <div class="mx-0">
                                <img src="{{ asset('asset/propil.png') }}" class="w-[21x] h-[21px] mt-1">
                            </div>
                            <div class=" text-white font-della mt-1" style="font-size: 16px;">
                                <span>Profil Admin</span>
                            </div>
                        </button>
                    </a>
                </div>
                <div class="flex flex-col bg-indigo-500  w-[130px] h-[35px] mx-4 rounded-[10px] mt-5">
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

            {{-- body --}}
            <div class="h-20 w-[1320px] px-4">
                <div class="bg-white w-auto h-20 mt-4 rounded-[5px] text-center">
                    <div class="pt-3">
                        <span class="font-della ">PT.Dilia Utama</span><br>
                        <span class="font-della ">Aplikasi Manajemen Informatika</span>
                    </div>
                </div>
                <div class="bg-white mt-5 w-auto h-14 rounded-[5px]">
                    <div class="pl-5 pt-2">
                        <span class="font-della mt-5">Dashboard</span>
                    </div>
                </div>

                {{-- table --}}
                <div class="tabel bg-white p-3 mt-5 rounded-xl">
                    <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr class="text-center">
                                <th class="w-[5%] text-center">No</th>
                                <th class="w-[15%] text-center">Id Karyawan</th>
                                <th class="w-[25%] text-center">Nama</th>
                                <th class="w-[15%] text-center">Daftar Hadir</th>
                                <th class="w-[15%] text-center">Jam</th>

                            </tr>
                        </thead>
                        <tbody>
                            {{ $no = 1 }}
                            @foreach ($dataAbsen as $absen)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $absen->id_karyawan }}</td>
                                    <td>{{ $absen->karyawan->nama_karyawan }}</td>
                                    <td>{{ $absen->daftar_hadir }}</td>
                                    <td>{{ $absen->jam }}</td>

                                </tr>
                            @endforeach

                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>


    {{-- Data Table --}}
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script>
        new DataTable('#example', {
            responsive: true
        });
    </script>
</body>

</html>
