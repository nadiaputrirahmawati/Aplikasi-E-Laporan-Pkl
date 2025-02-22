@extends('layout.teachers', ['title' => 'Logbook' , 'url' => '/teacher/students'])
@section('content')
    <div class="bg-base-300 shadow-lg rounded-3xl p-4 text-neutral mt-5">
        <div class="flex justify-between items-center">
            <!-- Tombol Tambah Guru di sebelah kiri -->
            <div>
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
                                {{ \Illuminate\Support\Str::limit('Saya membantu teknisi di bengkel servis dengan tugas-tugas rutin seperti pemeriksaan sistem kelistrikan pada mobil, pengecekan kondisi rem, dan penggantian komponen kecil seperti busi dan kabel. Saya juga belajar cara menggunakan alat diagnostik untuk membaca kode error yang muncul pada ECU kendaraan. Hal ini membantu saya memahami bagaimana teknisi mendiagnosa masalah dan menentukan solusi yang tepat.', 150, '...') }}
                            </td>
                        </tr>
                    @endfor

                </tbody>
            </table>
        </div>
    </div>
@endsection
