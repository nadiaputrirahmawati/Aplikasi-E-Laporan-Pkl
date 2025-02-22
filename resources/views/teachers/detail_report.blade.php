@extends('layout.guru', ['title' => 'Detail Siswa'])

@section('content')
    <div class="mt-5">

        <div class="flex flex-col justify-center  mt-5">
            <div class=" w-full bg-base-content shadow p-4 rounded-3xl max-h-fit ">
                <div class="p-2">
                    <table class="table-auto w-full text-neutral ">
                        <tbody>
                            <tr class="border-b border-gray-200">
                                <td class="font-semibold py-2 text-sm pl-3">Topik</td>
                                <td class="py-2 text-sm pl-2 pr-3">:</td>
                                <td class="py-2 text-sm pl-3">Bab 1 & Bab 2</td>
                            </tr>
                            <tr>
                                <td class="font-semibold py-2 text-sm pl-3">Deskripsi</td>
                                <td class="py-2 text-sm pl-2 pr-3">:</td>
                                <td class="py-2 text-sm pl-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Distinctio nam ullam officiis ex at accusamus eligendi, consequuntur officia nostrum
                                    illo, vel cum unde animi aspernatur. Optio quaerat aliquid laboriosam laborum!</td>
                            </tr>
                        </tbody>
                    </table>

                    <h1
                        class="text-white text-center shadow mt-5 text-sm font-semibold bg-base-200 py-2 px-4 rounded-full max-w-fit lg:mt-0 ">
                        Download Laporan <i class="fa-regular fa-download ml-4 text-md"></i> </h1>
                </div>

            </div>
            <div class=" w-full mt-6 bg-primary rounded-3xl">
                <div class="p-2 ">
                    <h1 class="text-white font-semibold text-md text-center"> Feedback Guru</h1>
                </div>
                <div class="bg-base-content shadow p-4 rounded-3xl">
                    <div class="grid w-full items-center gap-1.5 mt-3 p-3">
                        <div class="flex lg:flex-row flex-col lg:space-x-6 space-x-0">
                            <div class="lg:w-4/12 w-full">
                                <label class="text-lg  text-gray-700  font-medium leading-none">
                                    Status Laporan
                                </label>
                                <select class="select select-bordered w-full max-w-xs mt-3 bg-primary">
                                    <option disabled selected class="bordered-none">Pilih Status Laporan</option>
                                    <option> Revisi</option>
                                    <option> Di Setujui</option>
                                </select>
                                <div class="lg:w-full mt-4">
                                    <div class="form-control">
                                        <label class="cursor-pointer mt-2">
                                            <input type="checkbox" id="checkboxPerteumuan"
                                                class="checkbox checkbox-primary" />
                                            <span class="text-xs text-neutral">Ceklis untuk membuat pertemuan</span>
                                        </label>
                                    </div>

                                    <div id="tanggalWaktuContainer" class="flex hidden space-x-2">
                                        <div>
                                            <label class="text-sm text-gray-700 font-medium leading-none">
                                                Tanggal
                                            </label>
                                            <input type="date"
                                                class="text-neutral flex h-10 w-full rounded-lg border-1 border-input bg-base-100 px-3 py-2 text-sm ring-offset-background" />
                                        </div>
                                        <div>
                                            <label class="text-sm text-gray-700 font-medium leading-none">
                                                Waktu
                                            </label>
                                            <input type="time"
                                                class="text-neutral flex h-10 w-full rounded-lg border-1 border-input bg-base-100 px-3 py-2 text-sm ring-offset-background" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lg:w-8/12 rounded-lg overflow-hidden  w-full">
                                <div class="w-full lg:p-3 p-0 lg:mt-0 mt-4">
                                    <div
                                        class="relative h-32 rounded-lg border-2 bg-gray-50 flex justify-center items-center shadow hover:shadow-xl transition-shadow duration-300 ease-in-out">
                                        <div class="absolute flex flex-col justify-center items-center">
                                            <i class="fa-regular fa-file-import  text-primary text-3xl"></i>
                                            <span class="block text-sm text-center text-gray-400 font-normal">* pdf,
                                                word</span>
                                            <span class="block text-gray-600 font-normal mt-1">Upload Laporan</span>
                                        </div>
                                        <input name="" class="h-full w-full opacity-0 cursor-pointer"
                                            type="file" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col mt-4">
                            <span class="text-neutral font-medium text-lg pb-2 "> Catatan Evaluasi </span>
                            <textarea name="descriptions" id="editor" class=""></textarea>
                        </div>
                        <div class="flex justify-end">
                            <button type="submit" class="btn btn-primary text-white"> Kirim Feedback</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .ck-editor__editable_inline {
            min-height: 200px;
        }
    </style>
    <script>
        tinymce.init({
            selector: '#editor', // Pastikan editor sesuai dengan ID atau selector yang digunakan
            plugins: 'image link media table code charmap lists codesample emoticons wordcount preview fullscreen autoresize',
            toolbar: 'undo redo | blocks | bold italic | formatselect | alignleft aligncenter alignright | indent outdent | bullist numlist | link image media | table code codesample | emoticons wordcount preview fullscreen',
            paste_as_text: true,
            relative_urls: false,
            remove_script_host: false,
            document_base_url: 'http://localhost:8000/path1/',
            paste_data_images: true,

            image_class_list: [{
                    title: 'None',
                    value: ''
                },
                {
                    title: 'Responsive Image',
                    value: 'img-fluid'
                }
            ],

            // Menginisialisasi Lightbox pada gambar setelah konten dimuat
            init_instance_callback: function(editor) {
                editor.on('SetContent', function() {
                    if (typeof lightbox !== 'undefined' && lightbox.init) {
                        lightbox.init(); // Inisialisasi Lightbox jika tersedia
                    }
                });
            },

            images_upload_url: '{{ route('project.upload') }}',
            automatic_uploads: true,
            file_picker_types: 'image',
            images_upload_credentials: true,
            autoresize_bottom_margin: 20,
            min_height: 400,
            width: '100%',
            content_style: `
        pre code {
            background-color: #f4f4f4;
            padding: 10px;
            border-radius: 5px;
            display: block;
            overflow-x: auto;
            white-space: pre-wrap;
            word-wrap: break-word;
        }
        img {
            max-width: 100%;
        }
        @media (max-width: 768px) {
            img {
                height: auto;
            }
        }
    `,
            license_key: 'gpl'
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('checkboxPerteumuan').addEventListener('change', function() {
                var container = document.getElementById('tanggalWaktuContainer');
                container.classList.toggle('hidden', !this.checked);
            });
        });
    </script>
@endsection
