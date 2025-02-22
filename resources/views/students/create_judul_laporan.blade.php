@extends('layout.students', ['title' => 'Judul Laporan', 'url' => '/students/title-report'])

@section('content')
    <div class="w-full shadow rounded-3xl mt-5 bg-base-300 p-5">
        <div class=" grid lg:grid-cols-2  grid-cols-1 gap-4">
            <div>
                <span class="text-neutral"> Nama</span>
                <input type="text" name="nama" id="url" value="Nadia P.R" readonly
                    class="input input-bordered w-full mt-1 rounded-full border-2 shadow text-neutral">
            </div>
            <div>
                <span class="text-neutral"> Nis</span>
                <input type="text" name="nama" id="url" value="2230511065" readonly
                    class="input input-bordered w-full mt-1 rounded-full border-2 shadow text-neutral">
            </div>
        </div>
        <div class="grid lg:grid-cols-2  grid-cols-1 mt-3 gap-4">
            <div >
                <span class="text-neutral"> Tempat Pkl</span>
                <input type="text" name="nama" id="url" value="Pt Honda" readonly
                    class="input input-bordered w-full mt-1 rounded-full border-2 shadow text-neutral">
            </div>
            <div >
                <span class="text-neutral"> Penanggung Jawab Pkl</span>
                <input type="text" name="nama" id="url" value="Bpk. Jaka" readonly
                    class="input input-bordered w-full mt-1 rounded-full border-2 shadow text-neutral">
            </div>
        </div>
        <div class="mt-3">
            <span class="text-neutral"> Judul Laporan</span>
            <input type="text" name="nama" id="url" placeholder="Masukan Judul Laporan ..."
                class="input input-bordered w-full mt-1 rounded-full border-2 shadow text-neutral">
        </div>
        <div class="flex mt-3 justify-end">
            <button type="submit" class="bg-primary btn rounded-full px-9"> Kirim</button>
        </div>
    </div>
@endsection
