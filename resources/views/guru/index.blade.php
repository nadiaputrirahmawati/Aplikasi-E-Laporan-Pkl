@extends('index', ['title' => 'Kelas'])
@section('content')
    <div>
        <h1 class=" bg-primary py-2 px-4 w-40 text-center text-white rounded-full font-semibold text-lg"> Tambah Kelas</h1>
        <div class="grid lg:grid-cols-3 grid-cols-1 lg:gap-14 gap-6 mt-9 ml-7">
            @for ($i = 0; $i < 3; $i++)
                <div class="bg-base-content shadow-md rounded-xl">
                    <div class="flex ">
                        <img src="{{ asset('img/contoh.png') }}" alt=""
                            class=" mt-8 mb-6 -ml-8 rounded-xl w-36 h-24 object-cover transition duration-500 ease-in-out hover:scale-110 ">
                        <div class="p-4">
                            <h1 class="text-black font-semibold text-md"> KELAS 11 A TKJ</h1>
                            <h1 class="text-black font-normal mt-2"> <i class="fa-duotone fa-regular fa-users mr-2"></i> 20
                                Siswa</h1>
                            <h1 class="text-black font-normal mt-2"> <i
                                    class="fa-duotone fa-regular fa-chalkboard-user mr-2"></i></i></i>
                                ZTMXY5</h1>
                            <a href="#" class="text-white text-sm font-normal btn btn-sm mt-3 w-28 text-center rounded-full bg-primary hover:bg-primary">Klik Detail</a>
                        </div>
                    </div>
                </div>
            @endfor

        </div>
    </div>
@endsection
