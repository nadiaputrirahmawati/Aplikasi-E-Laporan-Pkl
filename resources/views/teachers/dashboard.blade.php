@extends('layout.guru', ['title' => 'Dashboard'])
@section('content')
    <div class="flex lg:flex-row flex-col lg:space-x-6 space-x-0 mt-14">
        <div class="lg:w-6/12 w-full ">
            <div class="card  bg-base-content shadow lg:h-36">
                <div class="flex">
                    <div class="w-8/12 p-4">
                        <h1 class="lg:text-xl text-sm font-semibold text-neutral "> Selamat datang di E-PKL</h1>
                        <p class="lg:text-sm text-xs mt-1  text-neutral">Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit.
                        </p>
                        <div class="mt-3 hover:scale-105 duration-700">
                            <a href=""
                                class="bg-base-200 shadow-lg hover:shadow-none hover:font-normal  py-2 px-4 rounded-full lg:text-sm text-xs text-white ">
                                Learn
                                More</a>
                        </div>
                    </div>
                    <img src="{{ asset('img/design_guru.png') }}" alt="" class="w-5/12 lg:-mt-14 -mt-9">
                </div>
            </div>
        </div>
        <div class="grid grid-cols-3 gap-16  w-5/12 mt-8">
            {{-- @for ($i = 0; $i < 3; $i++) --}}
            <div class="hover:-translate-y-2 duration-700 hover:scale-105 ">
                <div class=" lg:w-14 w-16 h-4 bg-base-content rounded-ss-2xl clip-trapezoid  shadow"></div>
                <div class="lg:h-24 h-20 w-36 bg-base-content text-neutral rounded-e-2xl rounded-b-2xl shadow">
                    <div class="flex flex-row pt-6 p-4">
                        <div>
                            <i
                                class=" fa-light fa-users mr-2 w-12 h-12 text-2xl py-2 px-2 text-sky-900 bg-blue-100 rounded-full"></i>
                        </div>
                        <div>
                            <h1 class="text-center lg:text-2xl text-md"> 30 </h1>
                            <h1 class="text-center lg:text-md text-md font-semibold"> Siswa </h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hover:-translate-y-2 duration-700 hover:scale-105 ">
                <div class=" lg:w-14 w-16 h-4 bg-base-content rounded-ss-2xl clip-trapezoid  shadow"></div>
                <div class="lg:h-24 h-20 w-36 bg-base-content text-neutral rounded-e-2xl rounded-b-2xl shadow">
                    <div class="flex flex-row pt-6 p-4">
                        <div>
                            <i
                                class=" fa-thin fa-files mr-2 w-12 h-12 text-2xl py-2 px-3 text-orange-800 bg-orange-100 rounded-full"></i>
                        </div>
                        <div>
                            <h1 class="text-center lg:text-2xl text-md"> 30 </h1>
                            <h1 class="text-center lg:text-md text-md font-semibold"> Laporan </h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hover:-translate-y-2 duration-700 hover:scale-105 ">
                <div class=" lg:w-14 w-16 h-4 bg-base-content rounded-ss-2xl clip-trapezoid  shadow"></div>
                <div class="lg:h-24 h-20 w-36 bg-base-content text-neutral rounded-e-2xl rounded-b-2xl shadow">
                    <div class="flex flex-row pt-6 p-4">
                        <div>
                            <i
                                class=" fa-thin fa-file-chart-column mr-2 w-12 h-12 text-2xl py-2 px-4 text-green-950 bg-green-100 rounded-full"></i>
                        </div>
                        <div>
                            <h1 class="text-center lg:text-2xl text-md"> 30 </h1>
                            <h1 class="text-center lg:text-md text-md font-semibold"> Judul </h1>
                        </div>
                    </div>
                </div>
            </div>
            {{-- @endfor --}}
        </div>
    </div>
    <div class="flex space-x-4 mt-4">
        <div class="w-7/12 rounded-3xl bg-primary   ">
            <div class="flex justify-between p-3  mb-2 font-semibold text-white">
                <h1> Laporan </h1>
                <a href="/guru/laporan"> Lihat Semua Laporan</a>
            </div>
            <div class="rounded-3xl  bg-base-300 p-3">
                <div class="overflow-x-auto">
                    <table class="table border-spacing-14 border-gray-300">
                        <thead class="text-lg text-neutral font-normal">
                            <tr>
                                <th> Name </th>
                                <th> Tanggal </th>
                                <th> Note </th>
                                <th> Aksi </th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 0; $i < 4; $i++)
                                <tr class="text-neutral">
                                    <td>
                                        <div class="flex items-center gap-3">
                                            <div class="avatar">
                                                <div class="mask mask-squircle h-12 w-12">
                                                    <img src="https://img.daisyui.com/images/profile/demo/2@94.webp"
                                                        alt="Avatar Tailwind CSS Component" />
                                                </div>
                                            </div>
                                            <div>
                                                <div class="font-normal">Irez Abdullah</div>
                                                <!-- Mengurangi ketebalan font -->
                                                <div class="text-sm opacity-50">2230511065</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        22-30-2040
                                    </td>
                                    <td> Bab 1 & Bab 2</td>
                                    <th>
                                        <button class="btn btn-ghost btn-xs bg-primary text-white">detail</button>
                                    </th>
                                </tr>
                            @endfor

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="rounded-3xl lg:mt-0  bg-base-content lg:w-5/12 w-full p-4 shadow h-full ">
            <div class="flex justify-between">
                <h1 class="text-xl font-semibold text-neutral "> Pengajuan Judul</h1>
                <div class="flex justify-end">
                    <a href="/guru/laporan/judul" class="bg-base-100 py-1 px-4 rounded-full text-sm text-center w-20 text-neutral">
                        All</a>
                </div>
            </div>
            <p class="text-neutral"> pengajuan judul terbaru</p>
            @for ($i = 0; $i < 3; $i++)
                <div class="rounded-lg w-full bg-base-200 p-3 shadow mt-2">
                    <div class="flex space-x-3">
                        <h1 class="bg-base-content text-neutral py-2 px-4 h-10 rounded-full font-semibold"> {{ $i + 1 }}
                        </h1>
                        <div>
                            <h1 class="text-white font-bold text-md"> Irez Abdullah - 2230511065</h1>
                            <h1 class=" text-white font-semibold text-sm"> Penerapan Teknologi untuk Meningkatkan Efektivitas
                                Operasional di PT ABC </h1>
                        </div>
                    </div>
                </div>
            @endfor
            
        </div>
    </div>
@endsection
