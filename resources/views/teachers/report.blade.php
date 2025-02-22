@extends('layout.guru', ['title' => 'Daftar Laporan'])
@section('content')
    <div class="w-full">
        <div class="flex lg:flex-row flex-col justify-between lg:space-x-4 space-x-0 mt-5">
            <div class="flex space-x-4 mt-5 overflow-x-auto">
                <h1 class="text-center text-white font-normal text-sm bg-yellow-400 px-3 py-1 rounded-full"> Pengajuan : 6
                </h1>
                <h1 class="text-center text-white font-normal text-sm bg-primary px-3 py-1 rounded-full"> Semua : 6</h1>
            </div>
            <div class="relative  px-0 lg:w-4/12 w-full lg:px-3 lg:mt-0 mt-4" id="input">
                <form>
                    <input placeholder="Search..." name="search" value="{{ request('search') }}"
                        class="block w-full text-sm h-[50px] px-4 text-slate-900 shadow rounded-full bg-base-300 appearance-none focus:border-transparent focus:outline focus:outline-2 focus:outline-info focus:ring-0 hover:border-brand-500-secondary- peer invalid:border-error-500 invalid:focus:border-error-500 overflow-ellipsis overflow-hidden text-nowrap pr-[48px]"
                        id="floating_outlined" type="text" />
                    <div class="absolute top-2 right-8 bg-primary py-1 px-2 rounded-full">
                        <button type="submit"> <i class="fa-solid fa-magnifying-glass text-xl text-white"></i></button>
                </form>
            </div>
        </div>
    </div>
    @for ($i = 0; $i < 5; $i++)
        <div class="rounded-lg w-full bg-base-300 to-secondary p-2  shadow mt-3">
            <div class="flex justify-between space-x-3">
                <div class="flex space-x-3 w-9/12">
                    <i class="fa-thin fa-file-lines text-xl text-gray-700 bg-gray-100 py-2 px-4 h-11 w-11 rounded-full"></i>
                    <div>
                        <h1 class="text-neutral font-bold text-md"> Irez Abdullah - 2230511065</h1>
                        <h1 class=" text-neutral font-semibold text-sm"> Penerapan Teknologi untuk Meningkatkan Efektivitas
                            Operasional di PT ABC </h1>
                    </div>
                </div>
                <a href="/guru/siswa/detail" class="flex justify-center w-2/12">
                    <div class="flex lg:flex-row flex-col h-6 mt-3 px-5 rounded-full  lg:space-x-5  bg-primary space-x-0">
                        <h1 class=" font-normal text-white">Detail </h1>
                    </div>
                </a>
            </div>
        </div>
    @endfor
@endsection
