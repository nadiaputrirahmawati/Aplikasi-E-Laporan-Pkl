@extends('layout.teachers', ['title' => 'Kelas'])
@section('content')
    @include('teachers.class.create')
    <div class="mt-5">
        {{-- <div class="flex"> --}}
            <button class=" bg-primary py-2 ml-6 px-4 w-40 text-center text-white rounded-full font-semibold text-lg"
            onclick="document.getElementById('my_modal_2').checked = true;"> Tambah Kelas</button>
            <h1 class="text-neutral font-normal text-md ml-6">* Buat Kelas bimbingan untuk siswa - Untuk Penamaan di sesuaikan</h1>
        {{-- </div> --}}

        <div class="grid lg:grid-cols-3 grid-cols-1 lg:gap-14 gap-6 mt-9 ml-7">
            @for ($i = 0; $i < 3; $i++)
                <div class="bg-base-content shadow-md rounded-xl">
                    <div class="flex ">
                        <img src="{{ asset('img/contoh.png') }}" alt=""
                            class=" mt-8 mb-6 -ml-8 rounded-xl w-36 h-24 object-cover transition duration-500 ease-in-out hover:scale-110 ">
                        <div class="p-4">
                            <h1 class="text-neutral font-semibold text-md"> TKJ 1 2024</h1>
                            <h1 class="text-neutral font-normal mt-2"> <i class="fa-duotone fa-regular fa-users mr-2"></i>
                                20
                                Siswa</h1>
                            <h1 class="text-neutral font-normal mt-2"> <i
                                    class="fa-duotone fa-regular fa-chalkboard-user mr-2"></i></i></i>
                                ZTMXY5</h1>
                            <a href="{{ url('/teacher/students') }}"
                                class="text-white text-sm font-normal btn btn-sm mt-3 w-28 text-center rounded-full bg-base-200 hover:bg-primary">Klik
                                Detail</a>
                        </div>
                    </div>
                </div>
            @endfor

        </div>
    </div>
@endsection
