<div
    class="fixed w-60 bg-gradient-to-br from-primary to-secondary top-2 left-2 rounded-3xl bottom-2 transition-all duration-500 brightness-110 contrast-100 overflow-hidden navigation hidden lg:block">
    <div class="mb-8">
        <div class="flex items-center justify-center p-2 mb-">
            <img src="{{ asset('img/logo.png') }}" alt=""
                class="w-24 mt-5 drop-shadow-[0_0_5px_rgba(255,255,255,0.5)] brightness-110 contrast-100">
        </div>
        <h1 class="text-white text-2xl font-semibold sidebar-text text-center">E-LAPORAN PKL</h1>
    </div>
    <ul class="w-full pl-4 flex flex-col h-fit">
        <li class="group relative {{ request()->is('/') ? 'active rounded-s-full text-black' : 'text-black' }}">
            <a href="/" class="flex items-center py-3 px-4 text-slate-50 relative">
                <span class="mr-6">
                    <i class="fa-solid fa-grid-2 text-xl"></i>
                </span>
                <span class="text-lg sidebar-text font-semibold">Dashboard</span>
            </a>
        </li>
        <li class="group relative {{ request()->is('kelas') ? 'active rounded-s-full' : '' }}">
            <a href="/kelas" class="flex items-center py-3 px-4 text-slate-50 relative">
                <span class="mr-6">
                    <i class="fa-duotone fa-regular fa-screen-users text-xl"></i>
                </span>
                <span class="text-lg sidebar-text font-semibold">Kelas</span>
            </a>
        </li>
        <li class="group relative {{ request()->is('/na') ? 'active rounded-s-full' : '' }}">
            <a href="/na" class="flex items-center py-3 px-4 text-slate-50 relative">
                <span class="mr-6">
                    <i class="fa-regular fa-clipboard-list text-3xl"></i>
                </span>
                <span class="text-lg sidebar-text font-semibold">Judul Laporan</span>
            </a>
        </li>
        <li class="group relative {{ request()->is('/na') ? 'active rounded-s-full' : '' }}">
            <a href="/na" class="flex items-center py-3 px-4 text-slate-50 relative">
                <span class="mr-4">
                    <i class="fa-solid fa-person-chalkboard text-2xl"></i>
                </span>
                <span class="text-lg sidebar-text font-semibold">Bimbingan</span>
            </a>
        </li>

        {{-- <li class="flex justify-center mt-20 {{ request()->is('/na') ? 'active rounded-s-full' : '' }}">
            <a href="/logout" class="flex items-center py-3 px-4 text-slate-50 relative">
                <span class="mr-2">
                    <i class="fa-solid fa-right-from-bracket text-lg"></i>
                </span>
                <span class="text-lg sidebar-text font-semibold">Logout</span>
            </a>
        </li> --}}
    </ul>
    <div
        class="flex flex-row items-center justify-center mx-4 p-2 rounded-xl hover:-translate-y-2 duration-700 mt-16">
        <button
            class="py-2  text-white hover:bg-primary rounded-full
            duration-300 items-center justify-center mt-auto mb-1 px-9 text-xl font-semibold">
             <i class="fa-solid fa-left-from-bracket  mr-2"></i> Logout
        </button>
        
    </div>
</div>

<!-- Navbar Bottom for Mobile -->
<nav
    class="fixed bottom-0 shadow-md  inset-x-0 bg-gradient-to-br from-primary to-secondary  z-50 px-3 rounded-se-3xl rounded-tl-3xl lg:hidden">
    <div class="container mx-auto px-1 flex justify-between items-center py-3 relative">
        <a href="/"
            class="flex flex-col items-center  {{ request()->is('/') ? 'text-white font-semibold' : 'text-white' }}">
            <i class="fa-solid fa-grid-2 text-2xl"></i>
            <span class="text-sm ">Dashboard</span>
        </a>
        <div class="flex flex-col items-center">
            <a href="/kelas"
                class=" {{ request()->is('kelas') ? ' text-primary font-semibold rounded-3xl bg-white py-2 px-3' : 'text-white' }}">
                <i class="fa-duotone fa-regular fa-screen-users text-2xl"></i>
            </a>
            <span class="text-sm text-white">Kelas</span>
        </div>

        <a href="/"
            class="flex flex-col items-center {{ request()->is('/') ? 'text-primary font-semibold' : 'text-white' }}">
            <i class="fa-solid fa-laptop-file text-2xl"></i>
            <span class="text-sm">Bimbingan</span>
        </a>

        <a href="/watchlist"
            class="flex flex-col items-center {{ request()->is('watchlist') ? 'text-primary font-semibold' : 'text-white' }}">
            <i class="fa-solid fa-user text-2xl"></i>
            <span class="text-sm">Profile</span>
        </a>
    </div>
</nav>



<script>
    document.addEventListener("DOMContentLoaded", function() {
        const menuItems = document.querySelectorAll(".navigation ul li");
        let lastActive = document.querySelector(
            ".navigation ul li.active"); // Simpan elemen yang awalnya active

        menuItems.forEach(item => {
            item.addEventListener("mouseenter", function() {
                // Simpan elemen yang sedang aktif sebelum hover
                lastActive = document.querySelector(".navigation ul li.active");

                // Hapus class 'active' dari semua elemen
                menuItems.forEach(i => i.classList.remove("active"));

                // Tambahkan class 'active' ke elemen yang sedang di-hover
                this.classList.add("active");
            });

            item.addEventListener("mouseleave", function() {
                // Hapus class active dari elemen yang sedang di-hover
                this.classList.remove("active");

                // Kembalikan elemen yang sebelumnya aktif
                if (lastActive) {
                    lastActive.classList.add("active");
                }
            });
        });
    });
</script>
