<nav id="navbar"
    class="bg-base-content fixed top-5 rounded-2xl lg:left-[17.4rem] left-5 right-5 h-16 flex items-center px-6 z-30 shadow shadow-gray-800">
    <div class="flex justify-between w-full">
        <div class="text-2xl font-bold text-base-200 lg:space-x-0 space-x-32">
            <div class=" lg:mt-9 mt-1">
                <a href={{ $url ?? '#' }}>{{ $title ?? 'E-LAPORAN PKL' }}</a>
            </div>
        </div>
        <!-- Right side: Icons and Avatar (only visible on larger screens) -->
        <div class=" items-center space-x-3 pr-4  text-neutral flex"> <!-- This will hide on mobile -->
            <label class="swap swap-rotate mr-2">
                <!-- this hidden checkbox controls the state -->
                <input type="checkbox" class="theme-controller" value="synthwave" id="toggleDarkMode" />

                <!-- sun icon -->
                <svg class="swap-off h-8 w-8 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path
                        d="M5.64,17l-.71.71a1,1,0,0,0,0,1.41,1,1,0,0,0,1.41,0l.71-.71A1,1,0,0,0,5.64,17ZM5,12a1,1,0,0,0-1-1H3a1,1,0,0,0,0,2H4A1,1,0,0,0,5,12Zm7-7a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4A1,1,0,0,0,12,5ZM5.64,7.05a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.41l-.71-.71A1,1,0,0,0,4.93,6.34Zm12,.29a1,1,0,0,0,.7-.29l.71-.71a1,1,0,1,0-1.41-1.41L17,5.64a1,1,0,0,0,0,1.41A1,1,0,0,0,17.66,7.34ZM21,11H20a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Zm-9,8a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V20A1,1,0,0,0,12,19ZM18.36,17A1,1,0,0,0,17,18.36l.71.71a1,1,0,0,0,1.41,0,1,1,0,0,0,0-1.41ZM12,6.5A5.5,5.5,0,1,0,17.5,12,5.51,5.51,0,0,0,12,6.5Zm0,9A3.5,3.5,0,1,1,15.5,12,3.5,3.5,0,0,1,12,15.5Z" />
                </svg>

                <!-- moon icon -->
                <svg class="swap-on h-8 w-8 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path
                        d="M21.64,13a1,1,0,0,0-1.05-.14,8.05,8.05,0,0,1-3.37.73A8.15,8.15,0,0,1,9.08,5.49a8.59,8.59,0,0,1,.25-2A1,1,0,0,0,8,2.36,10.14,10.14,0,1,0,22,14.05,1,1,0,0,0,21.64,13Zm-9.5,6.69A8.14,8.14,0,0,1,7.08,5.22v.27A10.15,10.15,0,0,0,17.22,15.63a9.79,9.79,0,0,0,2.1-.22A8.11,8.11,0,0,1,12.14,19.73Z" />
                </svg>
            </label>

            <!-- Avatar and Name -->
            <div class="avatar  items-center space-x-2 hidden md:flex">
                <div class="w-12 mr-2 rounded-full">
                    <img src="https://i.pravatar.cc/300" alt="User">
                </div>
                <div class="mt-8">
                    <h1 class="font-bold text-neutral">Nadia P.R</h1>
                    <h1 class="text-xs font-normal text-neutral">Guru</h1>
                </div>
            </div>
        </div>
    </div>

    <!-- Profile Card -->
    <div id="profileCard"
        class="hidden absolute top-14 right-10 bg-base-content shadow-md shadow-gray-800 rounded-xl p-4 w-80 z-50 ">
        <button id="closeProfile" class="absolute top-4 right-6 text-gray-500"><i class="fa-light fa-circle-xmark"></i></button>
        <h1 class="font-semibold text-neutral mb-3"> User Profile</h1>
        <div class="flex items-center space-x-3">
            <img src="https://i.pravatar.cc/300" class="w-16 h-16 rounded-full" alt="User">
            <div class="mt-2">
                <h2 class="font-semibold text-md text-neutral">Nadia P.R</h2>
                <p class="text-sm text-neutral">Guru</p>
                <p class="text-sm text-neutral"><i class="fa-light fa-envelope mr-1"></i>nadia@example.com</p>
            </div>
        </div>
        <hr class="my-3">
        <div class="space-y-2">
            <a href="/teacher/profile" class="flex items-center space-x-2 ">
                <span class="text-primary py-1 px-2 bg-orange-50 rounded-lg"><i
                        class="fa-light fa-id-card-clip text-xl"></i></span>
                <div class="flex flex-col ">
                    <span class="text-sm text-neutral font-normal">My Profile</span>
                    <span class="text-xs text-neutral ">Account Setting</span>
                </div>
            </a>
        </div>
        <hr class="my-3">
        <button class="w-full bg-primary text-white font-semibold py-2 rounded-full shadow">Logout</button>
    </div>

</nav>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const toggle = document.getElementById("toggleDarkMode");
        const html = document.documentElement;

        // Cek tema yang tersimpan di localStorage
        const savedTheme = localStorage.getItem("theme") || "pkl";
        if (savedTheme === "pkl_dark") {
            html.setAttribute("data-theme", "pkl_dark");
            html.classList.add("pkl_dark");
            toggle.checked = true;
        } else {
            html.setAttribute("data-theme", "pkl");
            html.classList.remove("pkl_dark");
        }

        // Event listener untuk toggle
        toggle.addEventListener("change", function() {
            if (this.checked) {
                html.setAttribute("data-theme", "pkl_dark");
                html.classList.add("pkl_dark");
                localStorage.setItem("theme", "pkl_dark");
            } else {
                html.setAttribute("data-theme", "pkl");
                html.classList.remove("pkl_dark");
                localStorage.setItem("theme", "pkl");
            }
        });
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const avatar = document.querySelector(".avatar img");
        const profileCard = document.getElementById("profileCard");
        const closeProfile = document.getElementById("closeProfile");

        // Toggle profile card saat avatar ditekan
        avatar.addEventListener("click", function() {
            profileCard.classList.toggle("hidden");
        });

        // Sembunyikan card saat tombol close ditekan
        closeProfile.addEventListener("click", function() {
            profileCard.classList.add("hidden");
        });

        // Sembunyikan card jika mengklik di luar card
        document.addEventListener("click", function(event) {
            if (!profileCard.contains(event.target) && !avatar.contains(event.target)) {
                profileCard.classList.add("hidden");
            }
        });
    });
</script>
