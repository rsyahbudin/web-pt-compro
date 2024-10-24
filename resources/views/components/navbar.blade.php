<nav class="bg-white p-5 rounded-2xl shadow-md">
    <div class="container mx-auto flex flex-wrap items-center justify-between">
        <!-- Logo and Company Info -->
        <a href="{{ route('front.index') }}" class="flex items-center gap-3">
            <div class="h-11 w-11 overflow-hidden">
                <img src="assets/logo/logos.png" class="object-contain w-full h-full" alt="logo">
            </div>
            <div class="flex flex-col">
                <p class="font-extrabold text-xl leading-7">Setia Primatama Semesta</p>
                <p class="text-sm text-gray-500">Your Trusted Solution</p>
            </div>
        </a>

        <!-- Hamburger Icon (Mobile View) -->
        <div class="md:hidden">
            <button id="hamburger" class="text-3xl focus:outline-none">
                &#9776; <!-- Hamburger icon -->
            </button>
        </div>

        <!-- Navigation Links -->
        <ul id="navLinks" class="hidden w-full flex-col items-center text-center gap-5 mt-5 md:flex md:flex-row md:w-auto md:gap-8 md:mt-0">
            <li>
                <a href="{{ route('front.index') }}" class="{{ request()->routeIs('front.index') ? 'text-gray-500' : 'hover:text-blue-500' }} font-semibold transition duration-300">Home</a>
            </li>
            <li>
                <a href="{{ route('front.product') }}" class="{{ request()->routeIs('front.product') ? 'text-gray-500' : 'hover:text-blue-500' }} font-semibold hover:text-blue-500 transition duration-300">Products</a>
            </li>

            <li>
                <a href="{{ route('front.about') }}" class="{{ request()->routeIs('front.about') ? 'text-gray-500' : 'hover:text-blue-500' }} font-semibold transition duration-300">About</a>
            </li>
            <!-- Mobile Get a Quote Button -->
            <li class="md:hidden w-full mt-5">
                <a href="{{ route('front.appointment') }}" class="bg-blue-600 text-white font-bold rounded-xl p-3 w-full text-center hover:shadow-lg transition duration-300">Contact us</a>
            </li>
        </ul>

        <!-- Contact us Button for Desktop -->
        <div class="hidden md:flex">
            <a href="{{ route('front.appointment') }}" class="bg-blue-600 text-white font-bold rounded-xl p-3 hover:shadow-lg transition duration-300">Contact us</a>
        </div>
    </div>
</nav>

<script>
    // JavaScript for the hamburger menu toggle
    document.getElementById('hamburger').addEventListener('click', () => {
        document.getElementById('navLinks').classList.toggle('hidden');
    });
</script>