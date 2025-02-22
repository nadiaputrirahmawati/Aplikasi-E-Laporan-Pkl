@extends('layout.operator', ['title' => 'Tambah Akun Guru'])

@section('content')
    <div class="w-full shadow rounded-3xl mt-5 bg-base-300 p-5">
        <div class=" grid lg:grid-cols-2  grid-cols-1 gap-4">
            <div>
                <span class="text-neutral"> Nama</span>
                <input type="text" name="nama" id="url" value="Nadia P.R"
                    class="input input-bordered w-full mt-1 rounded-full border-2 shadow text-neutral">
            </div>
            <div>
                <span class="text-neutral"> Nip</span>
                <input type="text" name="nama" id="url" value="2230511065"
                    class="input input-bordered w-full mt-1 rounded-full border-2 shadow text-neutral">
            </div>
        </div>
        <div class="grid lg:grid-cols-2  grid-cols-1 mt-3 gap-4">
            <div >
                <span class="text-neutral"> Tempat Pkl</span>
                <div class="w-full">
                    <div class="relative">
                        <select id="status" class="block w-full  py-2 px-3 focus:outline-none focus:ring-2  mt-1 rounded-full border-2 shadow text-neutral focus:ring-primary focus:border-primary">
                            <option value="pending">Pending</option>
                            <option value="shipped">Shipped</option>
                            <option value="delivered" selected>Delivered</option>
                        </select>
                        <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                        </div>
                    </div>
                </div>
            </div>
            <div >
                <span class="text-neutral"> Upload File</span>
                <input type="file" name="nama" id="url" placeholder="Masukan Penanggung Jawab Pkl ..."
                    class="input input-bordered w-full mt-1 rounded-full border-2 shadow text-neutral">
            </div>
        </div>
        <div class="flex mt-3 justify-end">
            <button type="submit" class="bg-primary btn rounded-full px-9"> Kirim</button>
        </div>
    </div>
@endsection
