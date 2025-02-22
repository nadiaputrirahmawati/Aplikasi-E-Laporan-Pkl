@extends('layout.students', ['title' => 'Tambah Kegiatan', 'url' => '/students/logbook'])

@section('content')
    <div class="bg-base-content shadow rounded-3xl p-8 w-full mt-5">
        <div class=" grid lg:grid-cols-2  grid-cols-1 gap-4">
            <div>
                <span class="text-neutral"> Tanggal</span>
                <input type="date" name="nama" id="url" value="Nadia P.R"
                    class="input input-bordered w-full mt-1 rounded-full border-2 shadow text-neutral">
            </div>
            <div>
                <span class="text-neutral"> Pekerjaan</span>
                <input type="text" name="nama" id="url" value="2230511065" 
                    class="input input-bordered w-full mt-1 rounded-full border-2 shadow text-neutral">
            </div>
        </div>
        <div class="flex flex-col mt-4">
            <span class="text-neutral font-medium text-lg pb-2 "> Catatan Kegiatan </span>
            <textarea name="descriptions" id="editor" class=""></textarea>
        </div>
        <div class="flex justify-end mt-3">
            <button type="submit" class="bg-primary btn rounded-full px-9"> Kirim</button>
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
@endsection
