@extends('layout.students', ['title' => 'Update Profile'])

@section('content')
    <div class="w-full shadow rounded-3xl mt-5 bg-base-300 p-5">
        <div class="flex lg:flex-row flex-col lg:justify-start justify-center">
            <div class="lg:w-5/12 w-full justify-center flex">
                <div class="mt-6">
                    <div class="">
                        <div class="relative inline-block">
                            <!-- Gambar -->
                            <img id="profileImage" src="{{ asset('img/1.png') }}" alt="Profile Picture"
                                class="w-32 h-32 rounded-full object-cover">
                            <button onclick="document.getElementById('profileImageInput').click()"
                                class="absolute bottom-0 right-0 mb-2 mr-2 w-8 h-8 bg-base-200 text-white p-1 rounded-full shadow-md hover:bg-base-100 hover:text-neutral">
                                <i class="fa-light fa-pen"></i>
                            </button>
                            <input type="file" id="profileImageInput" class="hidden" accept="image/*"
                                onchange="previewProfileImage(event)">
                        </div>
                        <h1 class="text-neutral text-md font-medium mt-2"> Update Foto Profile</h1>
                    </div>
                </div>
            </div>
            <div>
                <div class="mt-6 mb-4">
                    <h1 class="text-neutral text-lg font-medium mt-2"> Profile</h1>
                    <hr class="border-1 border-neutral mt-2 w-2/12">
                </div>
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
                <div class="grid lg:grid-cols-3  grid-cols-1 mt-3 gap-4">
                    <div>
                        <span class="text-neutral"> Email</span>
                        <input type="text" name="nama" id="url" placeholder="Masukan Email Anda"
                            class="input input-bordered w-full mt-1 rounded-full border-2 shadow text-neutral">
                    </div>
                    <div>
                        <span class="text-neutral"> Nomer Telephone</span>
                        <input type="text" name="nama" id="url" placeholder="Masukan No Telephone ..."
                            class="input input-bordered w-full mt-1 rounded-full border-2 shadow text-neutral">
                    </div>
                    <div>
                        <span class="text-neutral"> Tanggal Lahir</span>
                        <input type="date" name="nama" id="url" placeholder="Masukan Tempat Pkl ..."
                            class="input input-bordered w-full mt-1 rounded-full border-2 shadow text-neutral">
                    </div>
                </div>
                <div class="grid lg:grid-cols-1  grid-cols-1 mt-3 gap-4">
                    <div>
                        <span class="text-neutral"> Alamat</span>
                        <input type="text" name="nama" id="url" placeholder="Masukan alamat Domisili Anda"
                            class="input input-bordered w-full mt-1 rounded-full border-2 shadow text-neutral">
                    </div>
                </div>
            </div>
        </div>
        <h1 class="text-neutral text-lg font-medium mt-2"> Education</h1>
        <hr class="border-1 border-neutral mt-2 w-2/12">
        <div class="grid lg:grid-cols-2 mt-3 gap-4">
            <div>
                <span class="text-neutral">Instruktur:</span>
                <input type="text" name="nama" id="url" placeholder="Instruktur PKL"
                    class="input input-bordered w-full mt-1 rounded-full border-2 shadow text-neutral">
            </div>
            <div>
                <span class="text-neutral">Tempat PKL:</span>
                <input type="text" name="nama" id="url" placeholder="Tempat PKL"
                    class="input input-bordered w-full mt-1 rounded-full border-2 shadow text-neutral">
            </div>
        </div>
        <div class="grid grid-cols-1">
            <div class="flex mt-7 justify-end">
                <button type="submit" class="bg-primary text-white btn w-full rounded-full px-9"> Update
                    Profile</button>
            </div>
        </div>
    </div>
    <script>
        // Fungsi untuk menampilkan gambar preview setelah memilih file
        function previewProfileImage(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    // Ganti gambar profil dengan gambar baru
                    document.getElementById('profileImage').src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        }
    </script>
@endsection
