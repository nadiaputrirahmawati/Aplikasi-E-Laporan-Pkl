@extends('layout.students', ['title' => 'Detail Siswa', 'url' => '/guru/laporan'])

@section('content')
    {{-- <div class="mt-5"> --}}
    <div class="flex lg:flex-row flex-col lg:space-x-7 space-x-0 mt-5">
        <div class="w-full">
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
                                <td class="font-semibold py-2 text-sm">Dunia Kerja Tempat Pkl</td>
                                <td>:</td>
                                <td class="py-2 text-sm">PT Tirtamas Lestari</td>
                            </tr>
                            <tr>
                                <td class="font-semibold py-2 text-sm">Instruktur Pkl</td>
                                <td>:</td>
                                <td class="py-2 text-sm">Bpk Jalal</td>
                            </tr>
                            <tr>
                                <td class="font-semibold py-2 text-sm">Guru Pembimbing</td>
                                <td>:</td>
                                <td class="py-2 text-sm">Bpk Jiko</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="flex justify-start">
                    <a href="/students/report/create">
                        <h1 class="bg-primary py-2 px-8 rounded-full text-white font-semibold"> Ajukan Laporan </h1>
                    </a>
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
                                    <i class=" fa-light fa-circle-info text-2xl"
                                        onclick="document.getElementById('my_modal_2').checked = true;"></i>
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
                                    <a href="/guru/siswa/detail"><i class="fa-solid fa-file-pdf text-2xl mr-2"></i></a>
                                    <i class=" fa-light fa-circle-info text-2xl"
                                        onclick="document.getElementById('my_modal_2').checked = true;"></i>
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
                                    <i class=" fa-light fa-circle-info text-2xl"
                                        onclick="document.getElementById('my_modal_2').checked = true;"></i>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <input type="checkbox" id="my_modal_2" class="modal-toggle" />
    <div class="modal bg-base-200">
        <div class="modal-box text-neutral  w-7/12 max-w-5xl">
            <form method="dialog">
                <label for="my_modal_2" class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</label>
            </form>
            <h3 class="text-lg font-bold text-center"> Detail Bimbingan Laporan</h3>
            <h3 class="text-md font-medium text-center text-red-500 "> Status Laporan Anda Masih <i>Revisi</i>  Silahkan Lakukan Bimbingan Kembali</h3>
            <table class="table-auto w-full mt-3 ">
                <tbody>
                    <tr>
                        <td class="font-semibold py-2">Materi </td>
                        <td>:</td>
                        <td class="py-2">Bab 1</td>
                    </tr>
                    <tr>
                        <td class="font-semibold py-2">Deskripsi </td>
                        <td>:</td>
                        <td class="py-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, possimus?</td>
                    </tr>
                    <tr>
                        <td class="font-semibold py-2">Evaluasi</td>
                        <td>:</td>
                        <td class="py-2">Perbaiki Bab 1 Latar Belakang Kurang bagus</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
