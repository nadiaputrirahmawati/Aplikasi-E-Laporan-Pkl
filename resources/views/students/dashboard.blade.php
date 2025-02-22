@extends('layout.students', ['title' => 'Dashboard', 'url' => '/students/dashboard'])

@section('content')
@include('students.modal.modal_join_class')
<div class="flex lg:flex-row flex-col-reverse lg:space-x-6 space-x-0 lg:mt-16 mt-4">
    <!-- Kelas (Desktop kiri, Mobile bawah) -->
    <div class="lg:w-4/12 w-full lg:mt-0 mt-5">
        <div class="rounded-3xl p-5 bg-base-content shadow">
            <h1 class="lg:text-2xl text-sm font-semibold text-neutral text-center">Kelas</h1>
            <p class="lg:text-sm text-xs text-neutral">* Silahkan Gabung Kelas Pembimbing Pkl</p>
            <div class="mt-6 mb-3 text-center">
                <a href="#"
                   class="bg-base-200 shadow-lg hover:scale-105 duration-700 hover:shadow-none hover:font-normal py-2 px-4 font-semibold rounded-full lg:text-md text-lg text-white"
                   onclick="document.getElementById('my_modal_2').checked = true;">
                    Gabung Kelas
                </a>
            </div>
        </div>
    </div>

    <!-- Selamat datang (Desktop kanan, Mobile atas) -->
    <div class="lg:w-8/12 w-full lg:mt-0 mt-7">
        <div class="rounded-3xl bg-base-content shadow">
            <div class="flex">
                <div class="w-8/12 p-5">
                    <h1 class="lg:text-2xl text-xs font-semibold text-neutral">Selamat datang di E-PKL</h1>
                    <p class="lg:text-sm text-xs mt-2 text-neutral">Hi, Nadia Putri Silahkan Lakukan Bimbangan Pkl</p>
                    <div class="mt-4">
                        <a href=""
                           class="bg-orange-100 hover:scale-105 duration-700 hover:shadow-none hover:font-normal py-2 px-4 font-medium rounded-full lg:text-sm text-xs text-orange-400">
                            Learn More
                        </a>
                    </div>
                </div>
                <img src="{{ asset('img/siswa.png') }}" alt="" class="w-5/12 lg:-mt-14 -mt-8">
            </div>
        </div>
    </div>
</div>


    <div class="flex lg:flex-row flex-col lg:space-x-2  lg:mt-0 mt-6 space-x-0 ">
        <div class="lg:w-6/12 rounded-3xl lg:mt-6 w-full bg-primary  shadow h-full">
            <div class="flex justify-between pt-3 pl-4">
                <h1 class="text-xl font-semibold text-white "> Judul Laporan Pkl</h1>
            </div>
            <div class="rounded-3xl w-full bg-base-300 p-4 shadow mt-2">
                <div>
                    <h1 class="text-neutral font-medium text-xs mb-1"> 20 February 2025 - <span
                            class="bg-orange-500 px-2 py-1 text-white rounded-full"> Belum di Setujui</span></h1>
                    <h1 class=" text-neutral font-semibold text-md"> Judul Kegiatan: <br> Penerapan Teknologi untuk
                        Meningkatkan Efektivitas
                        Operasional di PT ABC </h1>
                </div>
            </div>
        </div>
        <div class="lg:w-7/12 rounded-3xl lg:mt-6 w-full bg-primary mt-3  shadow h-full">
            {{-- <div class="flex justify-between pt-3 pl-4">
                <h1 class="text-xl font-semibold text-white "> Judul Laporan Pkl</h1>
            </div> --}}
            <div class="rounded-3xl w-full bg-base-300 p-4 shadow mt-2">
                <div>
                    <h1 class="text-neutral text-center font-semibold text-lg mb-1"> Laporan </h1>
                    <h1 class="text-neutral font-medium text-xs mb-1 ml-3 mt-2"> 20 February 2025 - <span
                            class="bg-orange-500 px-2 py-1 text-white rounded-full"> Revisi</span>
                        <h1>
                            {{-- <div class="p-2"> --}}
                            <table class="table-auto w-full text-neutral ">
                                <tbody>
                                    <tr class="border-b border-gray-200">
                                        <td class="font-semibold py-2 text-sm pl-3">Topik</td>
                                        <td class="py-2 text-sm pl-2 pr-3">:</td>
                                        <td class="py-2 text-sm pl-3">Bab 1 & Bab 2</td>
                                    </tr>
                                    <tr>
                                        <td class="font-semibold py-2 text-sm pl-3">Evaluasi</td>
                                        <td class="py-2 text-sm pl-2 pr-3">:</td>
                                        <td class="py-2 text-sm pl-3">Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit.
                                            Distinctio nam ullam officiis ex at accusamus eligendi, consequuntur officia
                                            nostrum
                                            illo, vel cum unde animi aspernatur. Optio quaerat aliquid laboriosam laborum!
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="flex justify-end">
                                <h1
                                    class="text-white text-center shadow mt-5 text-sm font-semibold bg-primary py-2 px-4 rounded-full max-w-fit lg:mt-0 ">
                                    Detail Laporan </h1>
                            </div>
                </div>
            </div>
        </div>
    </div>
@endsection
