@extends('layout.guru', ['title' => 'Detail Siswa', 'url' => '/guru/laporan'])

@section('content')
    {{-- <div class="mt-5"> --}}
    <div class="flex lg:flex-row flex-col lg:space-x-7 space-x-0 mt-5">
        <div class="lg:w-3/12 w-full bg-base-content shadow p-4 rounded-3xl max-h-fit ">
            <div class="text-center mt-2">
                <i class="fa-solid fa-user-vneck-hair-long  text-7xl text-base-200"></i>
                <h1 class="text-neutral text-xl font-semibold mt-2"> Nadia P.R</h1>
                <div class="flex justify-center">
                    <h1 class="text-primary bg-orange-50 mt-2 py-1 w-20 font-normal text-center  rounded-full text-xs">
                        Student</h1>
                </div>
            </div>
            <div class="mt-7 pl-3">
                <h1 class="text-neutral font-semibold text-sm mt-3 mb-1"> Details </h1>
                <hr>
                <h1 class="text-neutral font-semibold text-sm mt-3 mb-5"> Name : <span class="font-normal text-gray-600">
                        Nadia P.R</span> </h1>
                <h1 class="text-neutral font-semibold text-sm mt-3 mb-5"> Nis : <span
                        class="font-normal text-gray-600">2230511065</span> </h1>
                <h1 class="text-neutral font-semibold text-sm mt-3 mb-5"> Kelas : <span class="font-normal text-gray-600">
                        10 TKJ B</span> </h1>
                <h1 class="text-neutral font-semibold text-sm mt-3 mb-5"> Tanggal Lahir : <span
                        class="font-normal text-gray-600"> 10/10/2007</span> </h1>
                <h1 class="text-neutral font-semibold text-sm mt-3 mb-5"> Nomer : <span class="font-normal text-gray-600">
                        091281175423</span> </h1>
                <h1 class="text-neutral font-semibold text-sm mt-3 mb-5"> Email : <span class="font-normal text-gray-600">
                        nad@gmail.com</span> </h1>
            </div>
        </div>
        <div class="lg:w-9/12 w-full">
            <h1
                class="text-white text-center shadow mb-5 text-lg font-semibold bg-base-200 py-2 px-4 rounded-full w-48 lg:mt-0 mt-5">
                Progress Laporan </h1>
            <div class=" bg-base-content shadow p-4 rounded-3xl">
                <div class="flex justify-between">
                    <h1 class="text-neutral text-md font-semibold p-2"> Detail Progress</h1>
                    <h1 class="text-base-200 text-md font-semibold p-2 mr-3"> Cetak <i
                            class="fa-solid fa-file-pdf text-2xl ml-3"></i></h1>
                </div>
                <hr>
                <div class="p-2">
                    <table class="table-auto w-full text-neutral ">
                        <tbody>
                            <tr>
                                <td class="font-semibold py-2 text-sm">Judul </td>
                                <td>:</td>
                                <td class="py-2 text-sm">Penerapan Teknologi untuk Meningkatkan Efektivitas
                                    Operasional di PT ABC</td>
                            </tr>
                            <tr>
                                <td class="font-semibold py-2 text-sm">Tempat Pkl</td>
                                <td>:</td>
                                <td class="py-2 text-sm">PT Tirtamas Lestari</td>
                            </tr>
                            <tr>
                                <td class="font-semibold py-2 text-sm">Coordinator</td>
                                <td>:</td>
                                <td class="py-2 text-sm">Bpk Jalal</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="overflow-x-auto ">
                    <table class="table ">
                        <!-- head -->
                        <thead class="text-neutral text-lg font-normal">
                            <tr>
                                <th>Tanggal</th>
                                <th>Materi </th>
                                <th>Evaluasi</th>
                                <th>Status</th>
                                <th class="text-center">File</th>
                            </tr>
                        </thead>
                        <tbody class="text-neutral font-normal text-xs">
                            <!-- row 1 -->
                                <tr>
                                    <th> 10-10-2025</th>
                                    <td>Bab 1</td>
                                    <td>Latar Belakang</td>
                                    <td>
                                        <h1
                                            class="text-red-500 bg-red-50 mt-2 py-1 w-20 font-normal text-center  rounded-full text-xs">
                                            Revisi</h1>
                                    </td>
                                    <td class="text-center">
                                        <a href="/guru/siswa/detail"><i class="fa-solid fa-file-pdf text-2xl mr-2"></i></a>
                                        <i class=" fa-light fa-circle-info text-2xl" onclick="document.getElementById('my_modal_2').checked = true;"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <th> 10-10-2025</th>
                                    <td>Bab 2</td>
                                    <td>-</td>
                                    <td>
                                        <h1
                                            class="text-orange-600 bg-orange-50 mt-2 py-1 w-28 font-normal text-center  rounded-full text-xs">
                                            Belum Di Periksa</h1>
                                    </td>
                                    <td class="text-center">
                                        <a href="/guru/laporan/detail">
                                            <h1 class="text-white bg-primary mt-2 py-1 w-20 font-normal text-center  rounded-full text-xs">  Periksa</h1>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th> 10-10-2025</th>
                                    <td> Sudah Bagus</td>
                                    <td> Bagus</td>
                                    <td>
                                        <h1
                                            class="text-green-600 bg-green-50 mt-2 py-1 w-28 font-normal text-center  rounded-full text-xs">
                                            Di Setujui</h1>
                                    </td>
                                    <td class="text-center">
                                        <a href="/guru/siswa/detail"><i class="fa-solid fa-file-pdf text-2xl mr-2"></i></a>
                                        <i class=" fa-light fa-circle-info text-2xl"></i>
                                    </td>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    @include('guru.modal_detail_siswa')
@endsection
