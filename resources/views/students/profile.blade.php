@extends('layout.students', ['title' => 'Profile Siswa'])
@section('content')
    <div class="mt-5">
        <img src="{{ asset('img/profile_siswa.png') }}" alt="" class="w-full max-h-96 rounded-xl">
        <div class="flex lg:flex-row flex-col justify-center items-center lg:-mt-14 -mt-5">
            <div class="w-full ml-5 mr-5 lg:h-44 h-max-fit bg-base-content shadow-lg p-5 rounded-2xl">
                <div class="flex lg:flex-row flex-col space-x-3 lg:justify-between justify-center">
                    <div class="flex lg:justify-start justify-center lg:flex-row flex-col space-x-4">
                        <div class="flex lg:justify-start justify-center">
                            <div class="relative inline-block">
                                <!-- Gambar -->
                                <img src="{{ asset('img/1.png') }}" alt="Profile Picture"
                                    class="w-28 rounded-full object-cover">

                                <!-- Tombol Edit Profile -->
                                <a href="{{ url('/students/profile/update') }}"
                                    class="absolute bottom-0 right-0 mb-2 mr-2 w-8 h-8 bg-base-200 text-white px-2 py-1 rounded-full shadow-md hover:bg-base-100 hover:text-neutral">
                                    <i class="fa-light fa-pen"></i>
                                </a>
                            </div>
                        </div>

                        <div class="mt-5 lg:text-start text-center">
                            <div class="flex space-x-3 justify-center lg:justify-start">
                                <h1 class="font-semibold text-2xl text-neutral"> Nadia P.R</h1>
                                <p
                                    class="text-xs text-primary font-semibold bg-orange-100 w-16 border border-orange-500 py-1 text-center rounded-full h-6">
                                    Siswa</p>
                            </div>
                            <h1 class="font-normal text-lg text-gray-500"> Lorem ipsum dolor sit amet.</h1>
                            <h1 class="font-medium text-sm text-neutral">
                                <i class="fa-solid fa-circle text-[7px] text-green-600 mr-2"></i> <span>Active</span>
                            </h1>
                        </div>
                    </div>
                    <a href="{{ url('/students/profile/update') }}"
                        class="text-md text-white font-medium h-12 lg:mt-14 mt-4 shadow-md py-3 px-8 rounded-xl bg-base-200">
                        Edit Profile</a>
                </div>
                <h1 class="text-neutral text-md font-medium mt-3"> <i class="fa-light fa-circle-user mr-2"></i>My Profile
                </h1>
            </div>
        </div>

        <div class="lg:ml-5 ml-0 mt-6 lg:mr-5 mr-0 h-max-fit bg-base-content shadow-xl p-5 rounded-2xl">
            <h1 class="font-semibold text-xl text-neutral"> About Me</h1>
            <h1 class="font-normal text-md text-gray-500"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam
                magni distinctio ipsam, possimus animi quam debitis perferendis temporibus quis aspernatur suscipit
                assumenda soluta explicabo? Dolore dolores sint, amet ad commodi sunt maxime! Ipsam possimus dicta
                architecto quos autem voluptatibus! Quod!</h1>
            <hr class="mt-2">
            <div class="grid grid-cols-2 mt-2">
                <div>
                    <h1 class="font-semibold text-xl text-neutral"> Contact</h1>
                    <div class="flex text-neutral space-x-4 mt-4">
                        <i
                            class="fa-light fa-envelope text-xl text-green-600 bg-green-50 px-3 py-2 h-11 w-11 rounded-full"></i>
                        <div>
                            <h1><span class="font-semibold text-neutral text-md">Email</span></h1>
                            <h1><span class="font-normal text-gray-500 text-sm">Naadia@gmail.com</span></h1>
                        </div>
                    </div>

                    <div class="flex text-neutral space-x-4 mt-4">
                        <i class="fa-light fa-phone text-xl text-blue-500 bg-blue-50 px-3 py-2 h-11 w-11 rounded-full"></i>
                        <div>
                            <h1><span class="font-semibold text-neutral text-md">Phone</span></h1>
                            <h1><span class="font-normal text-gray-500 text-sm">08128117265</span></h1>
                        </div>
                    </div>

                    <div class="flex text-neutral space-x-4 mt-4">
                        <i
                            class="fa-light fa-cake-candles text-xl text-orange-600 bg-orange-50 px-3 py-2 h-11 w-11 rounded-full"></i>
                        <div>
                            <h1><span class="font-semibold text-neutral text-md">Tanggal Lahir</span></h1>
                            <h1><span class="font-normal text-gray-500 text-sm">21 Maret 2004</span></h1>
                        </div>
                    </div>

                    <div class="flex text-neutral space-x-4 mt-4">
                        <i
                            class="fa-light fa-location-dot text-xl text-yellow-500 bg-yellow-50 px-4 py-2 h-11 w-11 rounded-full"></i>
                        <div>
                            <h1><span class="font-semibold text-neutral text-md">Alamat</span></h1>
                            <h1><span class="font-normal text-gray-500 text-sm">Kp. Sukabumi</span></h1>
                        </div>
                    </div>
                </div>
                <div>
                    <h1 class="font-semibold text-xl text-neutral"> Education</h1>
                    <div class="flex text-neutral space-x-4 mt-4">
                        <i
                            class="fa-light fa-circle-info text-xl text-blue-500 bg-blue-50 px-3 py-2 h-11 w-11 rounded-full"></i>
                        <div>
                            <h1><span class="font-semibold text-neutral text-md">Nis (Nomer Induk Siswa)</span></h1>
                            <h1><span class="font-normal text-gray-500 text-sm">2230511065</span></h1>
                        </div>
                    </div>
                    <div class="flex text-neutral space-x-4 mt-4">
                        <i
                            class="fa-light fa-chalkboard-user text-xl text-yellow-500 bg-yellow-50 px-3 py-2 h-11 w-11 rounded-full"></i>
                        <div>
                            <h1><span class="font-semibold text-neutral text-md">Pembimbing</span></h1>
                            <h1><span class="font-normal text-gray-500 text-sm"> Bpk Jaka</span></h1>
                        </div>
                    </div>
                    <div class="flex text-neutral space-x-4 mt-4">
                        <i
                            class="fa-light fa-screen-users text-xl text-orange-600 bg-orange-50 px-3 py-2 h-11 w-11 rounded-full"></i>
                        <div>
                            <h1><span class="font-semibold text-neutral text-md">Kelas</span></h1>
                            <h1><span class="font-normal text-gray-500 text-sm"> 10 TKJ B</span></h1>
                        </div>
                    </div>
                    <div class="flex text-neutral space-x-4 mt-4">
                        <i
                            class="fa-light fa-building-memo text-xl text-green-600 bg-green-50 px-3 py-2 h-11 w-11 rounded-full"></i>
                        <div>
                            <h1><span class="font-semibold text-neutral text-md">Tempat Pkl</span></h1>
                            <h1><span class="font-normal text-gray-500 text-sm"> Pt Tirtamas Lestari</span></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
