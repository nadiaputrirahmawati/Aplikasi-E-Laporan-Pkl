@extends('layout.teachers', ['title' => 'Daftar Siswa'])

@section('content')
<div class="bg-base-300 shadow-lg rounded-3xl p-4 text-neutral mt-5">
    <div class="">
        <div class="relative  px-0 lg:w-4/12 w-full lg:px-3 lg:mt-0 mt-4" id="input">
            <form>
                <input placeholder="Search..." name="search" value="{{ request('search') }}"
                    class="block w-full text-sm h-[50px] px-4 text-slate-900 shadow rounded-full bg-base-100 appearance-none focus:border-transparent focus:outline focus:outline-2 focus:outline-info focus:ring-0 hover:border-brand-500-secondary- peer invalid:border-error-500 invalid:focus:border-error-500 overflow-ellipsis overflow-hidden text-nowrap pr-[48px]"
                    id="floating_outlined" type="text" />
                <div class="absolute top-2 right-8 bg-primary py-1 px-2 rounded-full">
                    <button type="submit"> <i class="fa-solid fa-magnifying-glass text-xl text-white"></i></button>
            </form>
        </div>
    </div>
    <div class="overflow-x-auto mt-4">
        <table class="table ">
            <!-- head -->
            <thead class="text-neutral text-lg ">
                <tr>
                    <th> No</th>
                    <th>Name</th>
                    <th>Nis</th>
                    <th>Kelas</th>
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
                        <td>10 TKJ A</td>
                        <td class="text-center">
                            <div class="flex flex-col justify-center items-center">
                                <a href={{ url('teacher/students/logbook') }} class="bg-orange-100 text-orange-900 max-w-fit text-md mb-1 font-medium  py-2 px-8 rounded-full" title="Detail Kegiatan Siswa"> Log-Book</a>
                                <a href={{ url('teacher/students/detail') }}  class="bg-blue-100 text-blue-900 max-w-fit text-md mb-1 font-medium  py-2 px-9 rounded-full" title="Detail Pengajuan Laporan Siswa"> Laporan</a>
                            </div>
                        </td>
                    </tr>
                @endfor

            </tbody>
        </table>
    </div>
</div>
@endsection