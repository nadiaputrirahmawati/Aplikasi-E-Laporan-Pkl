@extends('layout.students', ['title' => 'Judul Laporan', 'url' => '/students/report'])

@section('content')
    <div class="w-full shadow rounded-3xl mt-5 bg-base-300 p-5">
        <div class=" grid lg:grid-cols-2  grid-cols-1 gap-4">
            <div>
                <div>
                    <span class="text-neutral text-md "> Materi Bimbingan</span>
                    <input type="text" name="nama" id="url" placeholder="Masukan Materi ..."
                        class="input input-bordered w-full mt-1 rounded-full border-2 shadow text-neutral">
                </div>
                <div class="mt-3">
                    <span class="text-black text-md pb-2"> Descriptions </span>
                    <textarea name="descriptions" id="editor" class="w-full h-40 mt-1 p-4 rounded-3xl border-2 shadow text-neutral"></textarea>
                </div>
            </div>
            <div class="flex items-center justify-center w-full h-full text-neutral">
                <label for="file"
                    class="cursor-pointer bg-slate-50 w-full h-full flex flex-col items-center justify-center p-8 rounded-3xl border-2 border-dashed border-gray-500 shadow-lg">
                    <div class="flex flex-col items-center justify-center gap-2 mt-4">
                        <img id="preview-image" class="w-32 h-32 object-cover rounded-xl mb-4 hidden" alt="Preview Image">
                        <i class="fa-regular fa-file-import text-7xl text-primary"></i>
                        <p class="text-center">Click To Upload Image</p>
                        <p class="text-center">Pdf, Word, Docx</p>
                        <span class="bg-gray-600 px-4 py-2 rounded-lg text-white hover:bg-gray-800 transition-all">
                            Browse file
                        </span>
                    </div>
                    <input type="file" id="file" class="hidden" name="image" />
                </label>
            </div>
        </div>
        <div class="flex mt-3 justify-end">
            <button type="submit" class="bg-primary btn rounded-full px-9"> Kirim</button>
        </div>
    </div>
@endsection
