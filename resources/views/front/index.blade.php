@extends('front.layouts.app')

@section('content')
<div id="header" class="relative bg-[#F6F7FA] overflow-hidden">
    <!-- Navbar -->
    <div class="relative z-20">
        <div class="container max-w-[1130px] mx-auto pt-6">
            <x-navbar />
        </div>
    </div>

    <!-- Hero Section -->
    <div class="container max-w-[1200px] mx-auto pt-12 pb-16 sm:pt-20 sm:pb-24 relative z-10 text-center sm:text-left text-white">
        @forelse ($hero_section as $hero)
        <input type="hidden" name="path_video" id="path_video" value="{{ $hero->path_video }}">
        
        <div id="Hero" class="flex flex-col gap-6 items-center sm:items-start mt-10 relative px-6" data-aos="fade-up" data-aos-duration="1000">
            <!-- Hero Heading -->
            <div class="max-w-3xl mx-auto sm:mx-0 text-center sm:text-left">
                <h1 class="font-extrabold text-4xl sm:text-5xl md:text-6xl leading-tight bg-clip-text text-transparent bg-gradient-to-r from-blue-500 to-blue-700 drop-shadow-md mb-2 sm:mb-4" data-aos="fade-down" data-aos-duration="1200">
                    {{ $hero->heading }}
                </h1>
                
                <!-- Subheading -->
                <p class="text-white text-lg sm:text-xl md:text-2xl leading-relaxed max-w-lg mx-auto sm:mx-0 opacity-90" data-aos="fade-left" data-aos-duration="1200">
                    {{ $hero->subheading }}
                </p>
            </div>

            <!-- Hero Buttons -->
            <div class="flex gap-4 justify-center sm:justify-start mt-6" data-aos="fade-right" data-aos-duration="1000">
                <a href="#Explore" class="bg-red-600 hover:bg-red-700 text-white py-3 px-8 rounded-full font-medium transition-transform transform hover:scale-105 shadow-lg">
                    Explore Now
                </a>
            </div>
        </div>
        @empty
        <p class="text-lg text-gray-400 mt-10">Belum ada data terbaru</p>
        @endforelse
    </div>

    <!-- Background Image with Gradient Overlay -->
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-b from-black via-transparent to-black opacity-50"></div>
        <img src="{{ asset('assets/backgrounds/warehouseori.jpg') }}" class="w-full h-full object-cover filter brightness-75">
    </div>
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


<div id="Explore"></div>
<div id="OurPrinciples" class="container max-w-[1130px] mx-auto flex flex-col gap-2 mt-10" data-aos="fade-up">
    <div class="flex flex-col items-center md:flex-row md:items-start justify-between" data-aos="fade-right">
        <div class="flex-grow text-center md:text-left">
            <span id="OurProducts" class="bg-blue-500 text-white inline-block p-3 rounded-full uppercase font-bold text-sm">OUR PRODUCTS</span>

            <h2 class="font-bold text-3xl sm:text-4xl leading-tight text-black mt-2">
                We Provide Best Products <br> For Your Company
            </h2>
        </div>

        <a href="{{route('front.product')}}" class="bg-red-600 py-2 px-4 rounded-xl font-bold text-white mt-4 md:mt-0 md:ml-4" data-aos="fade-left" data-aos-delay="200">Explore More</a>
    </div>

    <div class="flex flex-wrap items-start gap-6 justify-center" data-aos="fade-up" data-aos-delay="300">
        @forelse ($principles as $principle)
        <div class="card w-full sm:w-[356px] flex flex-col bg-white border border-[#E8EAF2] rounded-[20px] overflow-hidden hover:border-cp-dark-blue transition-all duration-300 shadow-lg mb-6 h-[450px]" data-aos="zoom-in" data-aos-delay="400">
            <div class="h-[200px] flex shrink-0 overflow-hidden">
                <img src="{{ Storage::url($principle->thumbnail) }}" class="object-cover object-center w-full h-full" alt="thumbnail">
            </div>
            <div class="flex flex-col p-4 gap-2 relative z-10 flex-grow">
                <p class="font-bold text-xl leading-6 text-black">{{ $principle->name }}</p>
                <p class="leading-6 text-gray-700 flex-grow">{{ $principle->subtitle }}</p>
                <a href="{{route('front.product')}}" class="font-semibold text-cp-dark-blue hover:underline mt-auto">Learn More</a>
            </div>
        </div>
        @empty
        <p class="text-center text-gray-500" data-aos="fade-in" data-aos-delay="500">Belum ada data terbaru</p>
        @endforelse
    </div>
</div>

<div id="Teams" class="bg-gray-100 w-full py-20 px-4 mt-20" data-aos="fade-up">
    <div class="container max-w-[1130px] mx-auto flex flex-col gap-8 items-center">
        <div class="flex flex-col gap-4 items-center" data-aos="fade-up">
            <p class="bg-blue-500 text-white px-4 py-2 rounded-full uppercase font-bold text-sm">OUR CORE VALUE</p>
            <h2 class="font-bold text-4xl leading-[45px] text-center text-gray-800">These Are The Core Values <br> Upheld By Our Company.</h2>
        </div>
        <div class="teams-card-container grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8 w-full">
            @forelse($teams as $team)
            <div class="card bg-white flex flex-col h-full items-center p-8 gap-4 rounded-lg border border-gray-200 hover:shadow-lg transition-all duration-300" data-aos="zoom-in" data-aos-delay="200">
                <div class="w-[100px] h-[100px] flex items-center justify-center rounded-full overflow-hidden bg-gray-200">
                    <img src="{{ Storage::url($team->avatar)}}" class="object-cover w-full h-full" alt="photo">
                </div>
                <div class="flex flex-col gap-1 text-center">
                    <p class="font-bold text-xl leading-[30px] text-gray-800">{{ $team->name }}</p>
                    <p class="text-gray-600">{{ $team->occupation }}</p>
                </div>
            </div>
            @empty
            <p class="text-center text-gray-500" data-aos="fade-in">Belum ada data terbaru</p>
            @endforelse
        </div>
    </div>
</div>

<div id="Testimonials" class="w-full flex flex-wrap items-center mt-20" data-aos="fade-up">
    <!-- Testimonial Text Section -->
    <div class="relative text-center px-4 mb-10 w-full lg:w-6/12 mx-auto">
        <div class="absolute top-0 left-0 transform -translate-y-1/2">
            <img src="{{ asset('assets/icons/quote.svg') }}" alt="quote icon" class="w-12 h-12">
        </div>
        <h2 class="font-semibold text-4xl leading-tight relative z-10 mb-4">
            Discover Our Warehouse <br> Serving Clients Nationwide
        </h2>
    </div>

    <!-- Carousel Section -->
    <div class="main-carousel w-full lg:w-6/12 relative mx-auto overflow-hidden">
        <div class="carousel-container flickity" data-flickity='{ "fade": true, "wrapAround": true }'>
            @forelse($testimonials as $testimonial)
            <div class="carousel-card w-full flex justify-center">
                <div class="relative max-w-full">
                    <div class="testimonial-thumbnail w-[470px] h-[550px] rounded-2xl overflow-hidden bg-[#D9D9D9] shadow-lg">
                        <img src="{{ Storage::url($testimonial->thumbnail) }}" class="w-full h-full object-cover object-center" alt="thumbnail">
                    </div>
                </div>
            </div>
            @empty
            <p class="text-center text-gray-500">Belum ada data terbaru</p>
            @endforelse
        </div>
    </div>
    <!-- Carousel Indicators (optional) -->
    <div class="carousel-indicator flex items-center justify-center gap-2 h-4 shrink-0 mt-4 w-full"></div>
</div>
<div id="Awards" class="container mx-auto flex flex-col gap-8 mt-20 px-4">
    <div class="flex flex-col md:flex-row items-center justify-between" data-aos="fade-up">
        <div class="flex flex-col gap-4">
            <h2 class="font-bold text-4xl leading-tight">
                Our Commitment to Excellence<br>Defines Our Vision, Mission, and Values.
            </h2>
        </div>
        <a href="{{ route('front.about') }}" class="bg-red-600 p-4 rounded-xl font-bold text-white mt-6 md:mt-0">
            Explore More
        </a>
    </div>

    <div class="awards-card-container grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="awards-card bg-white flex flex-col h-full p-6 gap-6 rounded-lg border border-gray-200 hover:border-blue-600 transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
            <div class="flex shrink-0">
                <img src="{{ asset('assets/icons/values.jpg') }}" alt="Vision icon" class="w-16 h-14">
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

        <div class="awards-card bg-white flex flex-col h-full p-6 gap-6 rounded-lg border border-gray-200 hover:border-blue-600 transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
            <div class="flex shrink-0">
                <img src="{{ asset('assets/icons/mission.jpg') }}" alt="Mission icon" class="w-16 h-14">
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

        <div class="awards-card bg-white flex flex-col h-full p-6 gap-6 rounded-lg border border-gray-200 hover:border-blue-600 transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
            <div class="flex shrink-0">
                <img src="{{ asset('assets/icons/vision.jpg') }}" alt="Values icon" class="w-16 h-14">
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

<div id="FAQ" class="bg-[#F6F7FA] w-full py-20 px-4 mt-20" data-aos="fade-up">
    <div class="container max-w-[1000px] mx-auto overflow-hidden">
        <div class="flex flex-col lg:flex-row gap-10 items-start">
            <div class="flex flex-col gap-6" data-aos="fade-right">
                <h2 class="font-bold text-4xl leading-[45px]">Frequently Asked Questions</h2>
                <a href="{{route('front.appointment')}}" class="p-4 bg-red-600 rounded-xl text-white font-bold text-center hover:bg-red-700 transition duration-300">Contact Us</a>
            </div>
            <div class="flex flex-col gap-6 w-full" data-aos="fade-left">
                <!-- Accordion Items -->
                <div class="accordion-item bg-white p-5 rounded-2xl shadow-sm max-w-full" data-aos="zoom-in">
                    <button class="accordion-button flex justify-between items-center w-full" data-accordion="accordion-faq-1">
                        <span class="font-bold text-lg">What is the minimum order quantity for purchases from PT SPS?</span>
                        <img src="{{ asset('assets/icons/arrow-circle-down.svg')}}" class="w-6 h-6 text-blue-500 transition-transform duration-300" alt="icon">
                    </button>
                    <div id="accordion-faq-1" class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <p class="text-gray-600 pt-4">
                            The minimum order quantity is 1 sack or drum. For further assistance, please contact us via
                            <a href="https://wa.me/6281398351707" target="_blank" class="text-gray-800 underline">WhatsApp</a>.
                        </p>
                    </div>
                </div>
                <div class="accordion-item bg-white p-5 rounded-2xl shadow-sm max-w-full" data-aos="zoom-in" data-aos-delay="100">
                    <button class="accordion-button flex justify-between items-center w-full" data-accordion="accordion-faq-2">
                        <span class="font-bold text-lg">What are the options for product collection once a purchase has been made?</span>
                        <img src="{{ asset('assets/icons/arrow-circle-down.svg')}}" class="w-6 h-6 text-blue-500 transition-transform duration-300" alt="icon">
                    </button>
                    <div id="accordion-faq-2" class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <p class="text-gray-600 pt-4">The product can be delivered to the customer's warehouse, or alternatively, it can be collected from our warehouse at the specified address.
                        </p>
                    </div>
                </div>
                <div class="accordion-item bg-white p-5 rounded-2xl shadow-sm max-w-full" data-aos="zoom-in" data-aos-delay="200">
                    <button class="accordion-button flex justify-between items-center w-full" data-accordion="accordion-faq-3">
                        <span class="font-bold text-lg">Is it possible for customers to request items not listed in PT SPS's product catalog?                        </span>
                        <img src="{{ asset('assets/icons/arrow-circle-down.svg')}}" class="w-6 h-6 text-blue-500 transition-transform duration-300" alt="icon">
                    </button>
                    <div id="accordion-faq-3" class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <p class="text-gray-600 pt-4">Yes, we can accommodate such requests through our business partners who are equipped to meet those specific needs.</p>
                    </div>
                </div>
                <!-- <div class="accordion-item bg-white p-5 rounded-2xl shadow-sm max-w-full" data-aos="zoom-in" data-aos-delay="300">
                    <button class="accordion-button flex justify-between items-center w-full" data-accordion="accordion-faq-4">
                        <span class="font-bold text-lg">What if we have other questions?</span>
                        <img src="{{ asset('assets/icons/arrow-circle-down.svg')}}" class="w-6 h-6 text-blue-500 transition-transform duration-300" alt="icon">
                    </button>
                    <div id="accordion-faq-4" class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <p class="text-gray-600 pt-4">We want to protect our and clients assets to the max level so that we chose the best one from Jakarta, Indonesia will also protect post building finished completed ahead one.</p>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>


<x-footer />
<div id="video-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full lg:w-1/2 max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-[20px] overflow-hidden shadow">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                <h3 class="text-xl font-semibold text-cp-black">
                    Company Profile Video
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" onclick="{modal.hide()}">
                    <svg')}} class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg')}}" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg')}}>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="">
                <!-- video src added from the js script (modal-video.js) to prevent video running in the backgroud -->
                <iframe id="videoFrame" class="aspect-[16/9]" width="100%" src="" title="Demo Project Laravel Portfolio" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
@endsection

@push('after-scripts')

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<!-- JavaScript -->
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script src="https://unpkg.com/flickity-fade@1/flickity-fade.js"></script>
<script src="{{asset('js/carousel.js')}}"></script>
<script src="{{asset('js/accordion.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<script src="js/modal-video.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flexity/1.2.1/jquery.flexity.min.js"></script>

</script>
@endpush