<input type="checkbox" id="my_modal_2" class="modal-toggle" />
<div class="modal bg-base-200">
    <div class="modal-box text-neutral w-5/12 max-w-5xl">
        <h3 class="text-lg font-bold text-center">Gabung Kelas Pembimbing</h3>
        <div class="relative mt-6">
            <input id="username" name="username" type="text" placeholder=""
                class="border-b border-gray-300 py-1 focus:border-b-2 focus:border-blue-950 transition-colors focus:outline-none peer bg-inherit w-full" />
            <label for="username"
                class="absolute -top-4 text-md left-0 cursor-text peer-focus:text-md peer-focus:-top-4 transition-all peer-focus:text-blue-950 peer-focus:font-semibold peer-placeholder-shown:top-1 peer-placeholder-shown:text-sm">
                Code Kelas
            </label>
            <div class="flex justify-end space-x-4">
                <button type="submit" class="btn btn-primary text-md text-white rounded-full mt-6">Gabung</button>
                <!-- Tombol Batal sebagai tombol biasa, bukan bagian dari form -->
                <label for="my_modal_2" class="bg-red-500 w-20 h-12 font-medium text-white mt-6 rounded-full cursor-pointer text-center flex items-center justify-center">Batal</label>
            </div>
        </div>
    </div>
</div>
