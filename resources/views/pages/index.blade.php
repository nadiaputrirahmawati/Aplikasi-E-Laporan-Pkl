@extends('index', ['title' => 'Dashboard'])
@section('content')
    <div class="flex lg:flex-row flex-col lg:space-x-3 space-x-0 mt-10">
        <div class="lg:w-7/12 w-full ">
            <div class="card  bg-base-content shadow lg:h-36">
                <div class="flex">
                    <div class="w-7/12 p-4">
                        <h1 class="lg:text-xl text-sm font-semibold text-neutral "> Selamat datang di E-PKL</h1>
                        <p class="lg:text-sm text-xs mt-1  text-neutral">Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit.
                        </p>
                        <div class="mt-3">
                            <a href="" class="bg-primary py-1 px-4 rounded-lg lg:text-sm text-xs text-white"> Learn More</a>
                        </div>
                    </div>
                    <img src="{{ asset('img/design_guru.png') }}" alt="" class="w-5/12 lg:-mt-14 -mt-9">
                </div>
            </div>
            <h1 class="mt-3 text-neutral"> Static Data</h1>
            <div class="grid grid-cols-3 gap-4">

                <div>
                    <div class=" lg:w-24 w-16 h-6 bg-base-content rounded-ss-2xl clip-trapezoid mt-4 shadow"></div>
                    <div class="lg:h-28 h-20 bg-base-content text-neutral rounded-e-2xl rounded-b-2xl shadow">
                        <div class="pt-6 p-4">
                            <h1 class="text-center lg:text-2xl text-md"> 30 </h1>
                            <h1 class="text-center lg:text-2xl text-md font-semibold"> Laporan </h1>
                        </div>
                    </div>
                </div>
                <div>
                    <div class=" lg:w-24 w-16 h-6 bg-base-content rounded-ss-2xl clip-trapezoid mt-4 shadow"></div>
                    <div class="lg:h-28 h-20 bg-base-content text-neutral rounded-e-2xl rounded-b-2xl shadow">
                        <div class="pt-6 p-4">
                            <h1 class="text-center lg:text-2xl text-md"> 30 </h1>
                            <h1 class="text-center lg:text-2xl text-md font-semibold"> Laporan </h1>
                        </div>
                    </div>
                </div>
                <div>
                    <div class=" lg:w-24 w-16 h-6 bg-base-content rounded-ss-2xl clip-trapezoid mt-4 shadow"></div>
                    <div class="lg:h-28 h-20 bg-base-content text-neutral rounded-e-2xl rounded-b-2xl shadow">
                        <div class="pt-6 p-4">
                            <h1 class="text-center lg:text-2xl text-md"> 30 </h1>
                            <h1 class="text-center lg:text-2xl text-md font-semibold"> Laporan </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="rounded-3xl lg:mt-0 mt-5 bg-base-content lg:w-5/12 w-full p-4 shadow h-full">
            <h1 class="text-xl font-semibold text-neutral ">  Pengajuan Judul</h1>
            <p class="text-neutral"> Dibawah adalah pengajuan judul terbaru</p>
            <div class="rounded-lg w-full bg-gradient-to-br from-primary to-secondary p-3 shadow mt-2">
                <div class="flex space-x-3">
                    <h1 class="bg-base-content text-neutral py-2 px-4 rounded-full font-semibold"> 1</h1>
                    <h1 class="py-2 text-neutral"> hallo</h1>
                </div>
            </div>
            <div class="rounded-lg w-full bg-gradient-to-br from-primary to-secondary p-3 shadow mt-2">
                <div class="flex space-x-3">
                    <h1 class="bg-base-content text-neutral py-2 px-4 rounded-full font-semibold"> 2</h1>
                    <h1 class="py-2 text-neutral"> hallo</h1>
                </div>
            </div>
            <div class="rounded-lg w-full bg-gradient-to-br from-primary to-secondary p-3 shadow mt-2">
                <div class="flex space-x-3">
                    <h1 class="bg-base-content text-neutral py-2 px-4 rounded-full font-semibold"> 3</h1>
                    <h1 class="py-2 text-neutral"> hallo</h1>
                </div>
            </div>
            <div class="mt-2 flex justify-end">
                <a href="" class="bg-base-content py-1 px-4 rounded-lg text-sm text-center w-20 text-neutral"> More</a>
            </div>
        </div>
    </div>
    <div class="w-full rounded-3xl bg-primary   mt-4">
        <div class="flex justify-between p-3  mb-2 font-semibold text-white">
            <h1> Report </h1>
            <a href=""> see all report</a>
        </div>
        <div class="rounded-3xl  bg-base-content p-3">
            <div class="overflow-x-auto">
                <table class="table border-spacing-14 border-gray-300">
                    <thead class="text-lg text-neutral font-normal">
                        <tr>
                            <th> Name </th>
                            <th> Date </th>
                            <th> Status </th>
                            <th> Message </th>
                        </tr>
                    </thead>
                    <tbody>
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
                                        <div class="font-normal">Hart Hagerty</div> <!-- Mengurangi ketebalan font -->
                                        <div class="text-sm opacity-50">United States</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                22-30-2040
                            </td>
                            <td>Purple</td>
                            <th>
                                <button class="btn btn-ghost btn-xs">details</button>
                            </th>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
