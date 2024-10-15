<nav class="flex flex-wrap justify-evenly items-center md:justify-between  bg-white p-[20px_30px] rounded-[20px] gap-y-3 relative">
    <div class="flex items-center gap-3">
        <div class="flex shrink-0 h-[43px] overflow-hidden">
            <img src="assets/logo/logo.svg" class="object-contain w-full h-full" alt="logo">
        </div>
        <div class="flex flex-col">
            <p id="CompanyName" class="font-extrabold text-xl leading-[30px]">ShaynaComp</p>
            <p id="CompanyTagline" class="text-sm text-cp-light-grey">Build Futuristic Dreams</p>
        </div>
        <div class="md:hidden ">
            <button id="hamburger" class="text-3xl focus:outline-none">
                &#9776; <!-- Hamburger icon (three horizontal lines) -->
            </button>
        </div>
    </div>

    <!-- Hamburger Icon (hidden on md and larger screens) -->

    <!-- Responsive Navigation Links -->
    <ul id="navLinks" class="hidden flex-col items-center justify-center gap-5 mt-4 min-h-screen md:flex md:gap-[30px] md:flex-wrap md:flex-row">
        <li class="{{request()->routeIs('front.index') ? 'text-cp-light-grey' : ''}} font-semibold hover:text-cp-dark-blue transition-all duration-300">
            <a href="{{ route('front.index') }}">Home</a>
        </li>
        <li class="font-semibold hover:text-cp-dark-blue transition-all duration-300">
            <a href="">Products</a>
        </li>
        <li class="{{request()->routeIs('front.team') ? 'text-cp-light-grey' : ''}} font-semibold hover:text-cp-dark-blue transition-all duration-300">
            <a href="{{ route('front.team') }}">Company</a>
        </li>
        <li class="font-semibold hover:text-cp-dark-blue transition-all duration-300">
            <a href="">Blog</a>
        </li>
        <li class="{{request()->routeIs('front.about') ? 'text-cp-light-grey' : ''}} font-semibold hover:text-cp-dark-blue transition-all duration-300 mb-5">
            <a href="{{route('front.about')}}">About</a>
        </li>
        <!-- Add Get a Quote button inside the nav links for mobile view -->
        <li class="mt-5 md:hidden bg-cp-dark-blue p-[14px_20px] w-fit rounded-xl hover:shadow-[0_12px_30px_0_#312ECB66] transition-all duration-300 font-bold text-white">
            <a href="{{route('front.appointment')}}" class="">Get a Quote</a>
        </li>
    </ul>

    <!-- Call to Action Button (hidden on small screens) -->
    <div class="hidden md:flex">
        <a href="{{route('front.appointment')}}" class="  bg-cp-dark-blue p-[14px_20px] w-fit rounded-xl hover:shadow-[0_12px_30px_0_#312ECB66] transition-all duration-300 font-bold text-white">Get a Quote</a>
    </div>
</nav>

<script>
    // Get the hamburger button and navigation links
    const hamburger = document.getElementById('hamburger');
    const navLinks = document.getElementById('navLinks');

    // Function to reset navbar state
    function resetNavbarState() {
        navLinks.classList.add('hidden'); // Ensure the navbar starts hidden on mobile
    }

    // Toggle the visibility of the navigation links when hamburger is clicked
    hamburger.addEventListener('click', () => {
        navLinks.classList.toggle('hidden');
    });

    // Reset the navbar state when the page loads
    window.onload = resetNavbarState;
</script>
