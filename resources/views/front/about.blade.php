@extends ('front.layouts.app')
@section ('content')

<div id="header" class="bg-[#F6F7FA] relative">
    <div class="container max-w-[1130px] mx-auto relative pt-10 z-10">
        <x-navbar />

        <div class="flex flex-col gap-[50px] items-center py-20">
            <div class="breadcrumb flex items-center justify-center gap-[30px]">
                <p class="text-gray-500 last-of-type:text-gray-500 last-of-type:font-semibold">Home</p>
                <span class="text-cp-light-grey">/</span>
                <p class="text-cp-light-grey last-of-type:text-cp-black last-of-type:font-semibold">Our Product</p>
            </div>
            <div id="AboutUs" class="container max-w-[1130px] mx-auto flex flex-col gap-8 mt-8 px-4">
                <div class="bg-white p-8 rounded-lg shadow-lg transform -translate-y-10" data-aos="fade-up">
                    <p class="text-gray-800 text-center leading-relaxed">
                        PT Setia Primatama Semesta is located in Tangerang, Indonesia. A company that supplies chemicals mostly for food additives and nutrition to Indonesia's food manufacturing sector. We are a sister company with PT Setia Tritunggal Inti Artha, which has been mainly focused on pharmaceuticals for more than 10 years of operation.
                    </p>
                    <p class="text-gray-800 text-center leading-relaxed mt-2">
                        The company aims to serve the best quality ingredients at competitive prices while providing excellent service to the industry. We are committed to being your raw material ingredient partner solution within the range of product development.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- About Us Section -->

</div>



<div id="Clients" class="container max-w-[1130px] mx-auto flex flex-col justify-center text-center gap-5 mt-20" data-aos="fade-up">
    <h2 class="font-bold text-lg" data-aos="fade-in" data-aos-delay="200">
        Trusted by Leading Companies Across Indonesia
    </h2>
    <div class="logo-container flex flex-wrap gap-5 justify-center">
        @forelse ($clients as $client)
        <div class="relative group">
            <div class="logo-card h-[68px] w-[120px] flex items-center justify-center border border-[#E8EAF2] rounded-[18px] p-4 bg-white hover:border-cp-dark-blue transition-all duration-300 sm:w-[45%] md:w-[150px]" data-aos="zoom-in" data-aos-delay="300">
                <div class="overflow-hidden h-9">
                    <img src="{{ Storage::url($client->logo)}}" class="object-contain w-full h-full" alt="logo">
                </div>
            </div>
            <!-- Tooltip -->
            <div class="absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 hidden group-hover:block bg-gray-800 text-white text-sm rounded-lg py-1 px-2 shadow-lg transition-opacity duration-300 delay-150 opacity-0 group-hover:opacity-100">
                {{ $client->name }}
            </div>
        </div>
        @empty
        <p class="w-full" data-aos="fade-in" data-aos-delay="400">Belum ada data terbaru</p>
        @endforelse
    </div>
</div>

<!-- Map Section -->
<div id="Map" class="container max-w-[1130px] mx-auto mt-20 px-4" data-aos="zoom-in">
    <div class="map-container rounded-lg overflow-hidden shadow-lg">
        <iframe
            class="w-full h-[400px] rounded-lg"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.492370344165!2d106.67201287540472!3d-6.330191961940083!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e53ccf25a49b%3A0x4851bdd34fc134cd!2sPT%20Setia%20Primatama%20Semesta!5e0!3m2!1sen!2sid!4v1729567352167!5m2!1sen!2sid"
            frameborder="0"
            allowfullscreen=""
            aria-hidden="false"
            loading="lazy" referrerpolicy="no-referrer-when-downgrade"
            tabindex="0">
        </iframe>
    </div>
</div>

<!-- Awards Section -->
<div id="Awards" class="container max-w-7xl mx-auto flex flex-col gap-8 mt-10 px-4">
    <div class="awards-card-container grid grid-cols-1 md:grid-cols-3 gap-8" data-aos="fade-up">
        <div class="awards-card bg-white flex flex-col h-full p-6 gap-6 rounded-lg border border-gray-200 hover:border-blue-600 transition-all duration-300" data-aos="flip-left">
            <div class="flex shrink-0">
                <img src="{{ asset('assets/icons/values.jpg')}}" alt="Vision icon" class="w-16 h-14">
            </div>
            <hr class="border-gray-200">
            <p class="font-bold text-xl">Vision</p>
            <hr class="border-gray-200">
            <p class="text-gray-500 text-sm">
            <ul class="list-inside mt-2">
                <li>We will strive to dominate every market sector in the food and beverage industry by emphasizing quality, marketing strategies, and customer service via the skill and dedication of every person in every role they perform.</li>
                <li>To be the industry's chosen leading partner for the provision of excellent raw materials, nutritional products, and business solution.</li>
            </ul>
            </p>
        </div>

        <div class="awards-card bg-white flex flex-col h-full p-6 gap-6 rounded-lg border border-gray-200 hover:border-blue-600 transition-all duration-300" data-aos="flip-right">
            <div class="flex shrink-0">
                <img src="{{ asset('assets/icons/mission.jpg')}}" alt="Mission icon" class="w-16 h-14">
            </div>
            <hr class="border-gray-200">
            <p class="font-bold text-xl">Mission</p>
            <hr class="border-gray-200">
            <p class="text-gray-500 text-sm">
            <ul class="list-inside mt-2">
                <li>Our goal is to deliver the finest service so that the food and beverage sector can embrace us at all levels.</li>
            </ul>
            </p>
        </div>

        <div class="awards-card bg-white flex flex-col h-full p-6 gap-6 rounded-lg border border-gray-200 hover:border-blue-600 transition-all duration-300" data-aos="flip-left">
            <div class="flex shrink-0">
                <img src="{{ asset('assets/icons/vision.jpg')}}" alt="Values icon" class="w-16 h-14">
            </div>
            <hr class="border-gray-200">
            <p class="font-bold text-xl">Values</p>
            <hr class="border-gray-200">
            <p class="text-gray-500 text-sm">
            <ul class="list-inside mt-2">
                <li>We uphold long-term client relationships by keeping our word, supporting our business dealings, and providing the highest level of professional services to foster mutual growth.</li>
            </ul>
            </p>
        </div>
    </div>
</div>

<div id="Teams" class="bg-gray-100 w-full py-20 px-4 mt-20">
    <div class="container max-w-[1130px] mx-auto flex flex-col gap-8 items-center">
        <div class="flex flex-col gap-4 items-center" data-aos="fade-down">
            <p class="bg-blue-500 text-white px-4 py-2 rounded-full uppercase font-bold text-sm">OUR CORE VALUE</p>
            <h2 class="font-bold text-4xl leading-[45px] text-center text-gray-800">These Are The Core Values <br> Upheld By Our Company.</h2>
        </div>
        <div class="teams-card-container grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8 w-full" data-aos="fade-up">
            @forelse($teams as $team)
            <div class="card bg-white flex flex-col h-full items-center p-8 gap-4 rounded-lg border border-gray-200 hover:shadow-lg transition-all duration-300" data-aos="zoom-in">
                <div class="w-[100px] h-[100px] flex items-center justify-center rounded-full overflow-hidden bg-gray-200">
                    <img src="{{ Storage::url($team->avatar)}}" class="object-cover w-full h-full" alt="photo">
                </div>
                <div class="flex flex-col gap-1 text-center">
                    <p class="font-bold text-xl leading-[30px] text-gray-800">{{ $team->name }}</p>
                    <p class="text-gray-600">{{ $team->occupation }}</p>
                </div>
            </div>
            @empty
            <p class="text-center text-gray-500">Belum ada data terbaru</p>
            @endforelse
            <!-- <a href="{{route('front.team')}}" class="bg-red-600 text-white rounded-xl py-2 px-4 mt-6 col-span-full text-center hover:bg-red-700 transition-all">View All</a> -->
        </div>
    </div>
</div>



<x-footer />

@endsection