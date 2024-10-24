<footer class="bg-blue-950 w-full relative overflow-hidden mt-20 py-16">
    <div class="container w-full mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 text-white px-6">
        <!-- Logo and Company Info -->
        <div class="flex flex-col items-start gap-6">
            <div class="flex items-start gap-4">
                <div class="h-[43px] overflow-hidden">
                    <img src="{{ asset('assets/logo/logos.png') }}" class="object-contain w-full h-full" alt="logo">
                </div>
                <div>
                    <p id="CompanyName" class="font-extrabold text-2xl leading-[30px]">Setia Primatama Semesta</p>
                    <p id="CompanyTagline" class="text-sm text-gray-400">Your Trusted Solution</p>
                </div>
            </div>
            <div class="flex gap-4">
                <a href="https://wa.link/6tn09n" target="_blank" class="w-8 h-8 flex cursor-pointer transition-transform transform hover:scale-110">
                    <img src="{{ asset('assets/icons/whatsapp.svg') }}" class="w-full h-full object-contain" alt="whatsapp">
                </a>
            </div>
        </div>

        <!-- Office Info -->
        <div class="flex flex-col items-start md:items-start">
            <h2 class="font-bold text-lg flex items-center gap-2 mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5">
                    <path fill-rule="evenodd" d="M4.5 2.25a.75.75 0 0 0 0 1.5v16.5h-.75a.75.75 0 0 0 0 1.5h16.5a.75.75 0 0 0 0-1.5h-.75V3.75a.75.75 0 0 0 0-1.5h-15ZM9 6a.75.75 0 0 0 0 1.5h1.5a.75.75 0 0 0 0-1.5H9Zm-.75 3.75A.75.75 0 0 1 9 9h1.5a.75.75 0 0 1 0 1.5H9a.75.75 0 0 1-.75-.75ZM9 12a.75.75 0 0 0 0 1.5h1.5a.75.75 0 0 0 0-1.5H9Zm3.75-5.25A.75.75 0 0 1 13.5 6H15a.75.75 0 0 1 0 1.5h-1.5a.75.75 0 0 1-.75-.75ZM13.5 9a.75.75 0 0 0 0 1.5H15A.75.75 0 0 0 15 9h-1.5Zm-.75 3.75a.75.75 0 0 1 .75-.75H15a.75.75 0 0 1 0 1.5h-1.5a.75.75 0 0 1-.75-.75ZM9 19.5v-2.25a.75.75 0 0 1 .75-.75h4.5a.75.75 0 0 1 .75.75v2.25a.75.75 0 0 1-.75.75h-4.5A.75.75 0 0 1 9 19.5Z" clip-rule="evenodd" />
                </svg>
                Office
            </h2>
            <p class="text-gray-400 text-left">
                PT. Setia Primatama Semesta<br>
                Kawasan Bangunan Multi Guna, Taman Tekno BSD City, Blk. H2 Jl. Sektor 11 No.5,<br>
                Setu, Kec. Setu, Kota Tangerang Selatan, Banten 15314
            </p>
        </div>

        <!-- Contact Info -->
        <div class="flex flex-col items-start md:items-start">
            <h2 class="font-bold text-lg flex items-center gap-2 mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5">
                    <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z" clip-rule="evenodd" />
                </svg>
                Contact
            </h2>
            <p class="text-gray-400 text-left">
                (021) 756 3685 / 756 3663 / 756 3701 / 756 2186<br>
                Fax: (021) 756 3713<br>
                <a href="mailto:alghifari@setiaprimatamas.com" class="text-gray-300 hover:underline">
                    alghifari@setiaprimatamas.com
                </a>
            </p>
        </div>
    </div>

    <!-- Background Text -->
    <div class="absolute -bottom-[135px] w-full flex justify-center">
        <p class="font-extrabold text-[250px] leading-[375px] text-center text-white opacity-5">
            SPS
        </p>
    </div>
</footer>