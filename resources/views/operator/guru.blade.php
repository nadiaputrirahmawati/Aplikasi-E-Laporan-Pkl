@extends('layout.operator', ['title' => 'Daftar Guru'])
@section('content')
    <div class="bg-base-300 shadow-lg rounded-3xl p-4 text-neutral mt-5">
        <div class="flex justify-between items-center">
            <!-- Tombol Tambah Guru di sebelah kiri -->
            <div>
                <a href="/operator/guru/create" class="text-md text-white font-medium h-12 lg:mt-14 mt-4 shadow-md py-3 px-8 rounded-xl bg-primary"> 
                    Tambah Guru
                </a>
            </div>

            <!-- Input Search di sebelah kanan -->
            <div class="relative lg:w-4/12 w-full lg:px-3 mt-4 lg:mt-0" id="input">
                <form>
                    <input placeholder="Search..." name="search" value="{{ request('search') }}"
                        class="block w-full text-sm h-[50px] px-4 text-slate-900 shadow rounded-full bg-base-100 appearance-none focus:border-transparent focus:outline focus:outline-2 focus:outline-info focus:ring-0 hover:border-brand-500-secondary- peer invalid:border-error-500 invalid:focus:border-error-500 overflow-ellipsis overflow-hidden text-nowrap pr-[48px]" 
                        id="floating_outlined" type="text" />
                    <div class="absolute top-2 right-8 bg-primary py-1 px-2 rounded-full">
                        <button type="submit"> 
                            <i class="fa-solid fa-magnifying-glass text-xl text-white"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Tabel Daftar Guru -->
        <div class="overflow-x-auto mt-4">
            <table class="table w-full">
                <!-- head -->
                <thead class="text-neutral text-lg">
                    <tr>
                        <th> No</th>
                        <th>Name</th>
                        <th>Nip</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- row 1 -->
                    @for ($i = 0; $i < 10; $i++)
                        <tr>
                            <th> {{ $i + 1 }}</th>
                            <td>Irez Abdullah</td>
                            <td>2230511065</td>
                            <td class="text-center">
                                <a href="/guru/siswa/detail">
                                    <i class="fa-duotone fa-solid fa-eye text-xl text-yellow-500 mr-2  " title="Lihat Detail"></i>
                                </a>
                                <a href="/guru/siswa/detail">
                                    <i class="fa-duotone fa-solid fa-trash text-xl text-red-600 mr-2" title="Lihat Detail"></i>
                                </a>
                                <a href="/guru/siswa/detail">
                                    <i class="fa-duotone fa-solid fa-pen-to-square text-xl text-blue-600" title="Lihat Detail"></i>
                                </a>
                            </td>
                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>
@endsection
