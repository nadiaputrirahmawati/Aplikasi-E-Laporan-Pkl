@extends('layout.students', ['title' => 'Jurnal Kegiatan', 'url' => '/students/logbook'])

@section('content')
<div class="bg-base-300 shadow-lg rounded-3xl p-4 text-neutral mt-5">
    <div class="flex justify-between items-center">
        <!-- Tombol Tambah Guru di sebelah kiri -->
        <div>
            <a href={{ url('students/logbook/create') }} class="text-md text-white font-medium h-12 lg:mt-14 mt-4 shadow-md py-3 px-8 rounded-full ml-3 bg-primary"> 
                Buat Kegiatan
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
    <div class="overflow-x-auto mt-4">
        <table class="table ">
            <!-- head -->
            <thead class="text-neutral text-lg ">
                <tr>
                    <th>No</th>
                    <th>Hari / Tanggal </th>
                    <th>Unit Kerja/Pekerjaan</th>
                    <th>Catatan</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- row 1 -->
                @for ($i = 0; $i < 5; $i++)
                    <tr>
                        <th>{{ $i + 1 }}</th>
                        <th class="max-w-fit"> 22 - 10 - 2022</th>
                        <td>Asistensi di Bagian Servis dan Perbaikan</td>
                        <td>
                            {{ \Illuminate\Support\Str::limit('Saya membantu teknisi di bengkel servis dengan tugas-tugas rutin seperti pemeriksaan sistem kelistrikan pada mobil, pengecekan kondisi rem, dan penggantian komponen kecil seperti busi dan kabel. Saya juga belajar cara menggunakan alat diagnostik untuk membaca kode error yang muncul pada ECU kendaraan. Hal ini membantu saya memahami bagaimana teknisi mendiagnosa masalah dan menentukan solusi yang tepat.', 80, '...') }}
                        </td>
                        <td class="text-center flex space-x-3 justify-center">
                            <a href={{ url('students/detail') }}><i class="fa-regular fa-file-circle-info text-xl bg-orange-100 px-2 py-1 rounded-lg text-orange-700"></i></a>
                            <a href={{ url('students/detail') }}><i class="fa-regular fa-file-pen text-xl bg-blue-100 px-2 py-1 rounded-lg text-blue-900"></i></a>
                            <a href={{ url('students/detail') }}><i class="fa-regular fa-file-xmark text-xl bg-red-100 px-2 py-1 rounded-lg text-red-900"></i></a>
                        </td>
                    </tr>
                @endfor

            </tbody>
        </table>
    </div>
</div>
@endsection