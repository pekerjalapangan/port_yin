<nav class="flex justify-between items-center p-4 bg-black">
    <!-- Logo -->
    <div class="text-2xl font-bold text-white">
        <span class="text-pink-600">Mhn.</span><span class="text-white">Port.</span><span class="text-pink-600">com</span>
    </div>

    <!-- Menu for desktop -->
    <div class=" flex  justify-center items-center hidden md:flex gap-6">
        <a href="#" class="text-white hover:text-pink-600 hover:underline underline-offset-8 duration-500">Beranda</a>
        <a href="#" class="text-white hover:text-pink-600 hover:underline underline-offset-8 duration-500">About Me</a>
        <a href="#" class="text-white hover:text-pink-600 hover:underline underline-offset-8 duration-500">Skill</a>
        <a href="#" class="text-white hover:text-pink-600 hover:underline underline-offset-8 duration-500">Project</a>
        
    </div>
    <div class="  hidden md:flex">
        <button class="bg-pink-600 text-white rounded-lg px-4 py-2 hover:bg-green-500 duration-300">
            Contact
        </button>
    </div>

    <!-- Hamburger Menu -->
    <button id="menu-btn" class="md:hidden text-white focus:outline-none">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
        </svg>
    </button>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="flex hidden fixed top-0 left-0 w-2/3 h-full bg-purple-600 text-white z-50 flex-col items-center  space-y-6 pt-16 md:hidden">
        <!-- Close Button -->
        <button id="close-btn" class="absolute top-4 right-4 text-white">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
        <!-- Logo -->
    <div class="text-2xl font-bold text-white">
        <span class="text-pink-600">Mhn.</span><span class="text-white">Port.</span><span class="text-pink-600">com</span>
    </div>
        <a href="#" class=" hover:text-black duration-500 hover:underline underline-offset-8">Beranda</a>
        <a href="#" class=" hover:text-black duration-300">About Me</a>
        <a href="#" class=" hover:text-black duration-300">Skill</a>
        <a href="#" class=" hover:text-black duration-300">Project</a>
        <a href="https://wa.me/6285648080941?text=Semangat%20Kawan" target="_blank">
        <button class="bg-pink-600 text-white rounded-lg px-4 py-2 hover:bg-green-500 hover:text-white duration-500">
            Contact
        </button>
        </a>
    </div>
</nav>

<script>
    const menuBtn = document.getElementById('menu-btn');
    const closeBtn = document.getElementById('close-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    // Toggle slidebar on menu button click
    menuBtn.addEventListener('click', () => {
        mobileMenu.classList.remove('hidden');
    });

    // Close slidebar on close button click
    closeBtn.addEventListener('click', () => {
        mobileMenu.classList.add('hidden');
    });
</script>
