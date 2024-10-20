@extends('front.layouts.app')

@section('content')
<div id="header" class="bg-[#F6F7FA] relative overflow-hidden">
    <div class="container max-w-[1130px] mx-auto pt-10 z-10 relative">
        <x-navbar />

        @forelse ($hero_section as $hero)
        <input type="hidden" name="path_video" id="path_video" value="{{$hero->path_video}}">
        <div id="Hero" class="flex flex-col gap-6 mt-10 pb-16 sm:mt-20 sm:pb-20 text-left relative">
            <!-- Mobile overlay to darken the background -->

            <div class="relative flex flex-col gap-4 sm:text-left text-center">
                <h1 class="font-extrabold text-2xl leading-snug text-white sm:text-black sm:text-4xl sm:leading-tight sm:max-w-[536px] text-shadow-lg">
                    {{$hero->heading}}
                </h1>
                <p class="text-white leading-6 sm:text-gray-700 sm:leading-7 sm:max-w-[437px] text-shadow-md">
                    {{$hero->subheading}}
                </p>
            </div>
            <div class="relative flex flex-col items-center gap-4 sm:flex-row">
                <a href="#OurPrinciples" class="bg-red-600 py-3 px-6 rounded-lg shadow-md hover:bg-red-700 transition-all duration-300 font-bold text-white text-base sm:text-lg">
                    Explore Now
                </a>

                <button class="bg-blue-600 py-3 px-6 rounded-lg shadow-md hover:bg-blue-700 transition-all duration-300 font-bold text-white text-base sm:text-lg flex items-center gap-2" onclick="{modal.show()}">
                    <img src="{{ asset('assets/icons/play-circle.svg') }}" class="w-5 h-5" alt="icon">
                    <span>Watch Video</span>
                </button>
            </div>
        </div>
        @empty
        <p class="text-lg">Belum ada data terbaru</p>
        @endforelse
    </div>
    <div class="warehouse-bg absolute w-full h-full top-0 right-0 overflow-hidden z-0 sm:w-[43%]">
        <div class="absolute inset-0 bg-black opacity-50 sm:hidden"></div>
        <img src="{{ asset('assets/backgrounds/warehouseori.jpg') }}" class="object-cover w-full h-full" alt="banner">
    </div>
</div>
<div id="Clients" class="container max-w-[1130px] mx-auto flex flex-col justify-center text-center gap-5 mt-20">
    <h2 class="font-bold text-lg">Trusted by 500+ Leading Food and Pharmaceutical Manufacturers Across Indonesia</h2>
    <div class="logo-container flex flex-wrap gap-5 justify-center">
        @forelse ($clients as $client)
        <div class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
            <div class="overflow-hidden h-9">
                <img src="{{ Storage::url($client->logo)}}" class="object-contain w-full h-full" alt="logo">
            </div>
        </div>
        @empty
        <p>belum ada data terbaru</p>
        @endforelse
    </div>
</div>
<div id="OurPrinciples" class="container max-w-[1130px] mx-auto flex flex-col gap-2 mt-20">
    <div class="flex flex-col items-center md:flex-row md:items-start justify-between">
        <div class="flex-grow text-center md:text-left">
            <span class="bg-blue-500 text-white inline-block p-3 rounded-full uppercase font-bold text-sm">OUR PRODUCTS</span>

            <h2 class="font-bold text-3xl sm:text-4xl leading-tight text-black mt-2">
                We Provide Best Products <br> For Your Company
            </h2>
        </div>

        <a href="#" class="bg-red-600 py-2 px-4 rounded-xl font-bold text-white mt-4 md:mt-0 md:ml-4">Explore More</a>
    </div>


    <div class="flex flex-wrap items-start gap-6 justify-center">
        @forelse ($principles as $principle)
        <div class="card w-full sm:w-[356px] flex flex-col bg-white border border-[#E8EAF2] rounded-[20px] overflow-hidden hover:border-cp-dark-blue transition-all duration-300 shadow-lg mb-6 h-[450px]">
            <div class="h-[200px] flex shrink-0 overflow-hidden">
                <img src="{{ Storage::url($principle->thumbnail) }}" class="object-cover object-center w-full h-full" alt="thumbnail">
            </div>
            <div class="flex flex-col p-4 gap-2 relative z-10 flex-grow">
                <p class="font-bold text-xl leading-6 text-black">{{ $principle->name }}</p>
                <p class="leading-6 text-gray-700 flex-grow">{{ $principle->subtitle }}</p> <!-- Use flex-grow to allow the subtitle to expand -->
                <a href="#" class="font-semibold text-cp-dark-blue hover:underline mt-auto">Learn More</a> <!-- mt-auto to push Learn More button down -->
            </div>
        </div>
        @empty
        <p class="text-center text-gray-500">Belum ada data terbaru</p>
        @endforelse
    </div>
</div>
<div id="Teams" class="bg-gray-100 w-full py-20 px-4 mt-20">
    <div class="container max-w-[1130px] mx-auto flex flex-col gap-8 items-center">
        <div class="flex flex-col gap-4 items-center">
            <p class="bg-blue-500 text-white px-4 py-2 rounded-full uppercase font-bold text-sm">OUR CORE VALUE</p>
            <h2 class="font-bold text-4xl leading-[45px] text-center text-gray-800">These Are The Core Values <br> Upheld By Our Company.</h2>
        </div>
        <div class="teams-card-container grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8 w-full">
            @forelse($teams as $team)
            <div class="card bg-white flex flex-col h-full items-center p-8 gap-4 rounded-lg border border-gray-200 hover:shadow-lg transition-all duration-300">
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
<div id="Testimonials" class="w-full flex flex-col gap-[50px] items-center mt-20">
    <div class="main-carousel w-full relative">
        @forelse($testimonials as $testimonial)
        <div class="carousel-card container max-w-[1130px] w-full flex flex-wrap justify-between items-center lg:mx-[calc((100vw-1130px)/2)]">
            <div class="testimonial-container flex flex-col gap-[112px] w-[565px]">
                <div class="flex flex-col gap-[30px]">
                    <div class="h-9 overflow-hidden">
                        <img src="{{ Storage::url($testimonial->client->logo)}}" class="object-contain" alt="icon">
                    </div>
                    <div class="relative pt-[27px] pl-[30px]">
                        <div class="absolute top-0 left-0">
                            <img src="{{ asset('assets/icons/quote.svg')}}" alt="icon">
                        </div>
                        <p class="font-semibold text-4xl leading-[46px] relative z-10">Discover Our Warehouse <br>Serving Clients Nationwide</p>
                    </div>
                </div>
                <div class="carousel-indicator flex items-center justify-center gap-2 h-4 shrink-0"></div>
            </div>
            <div class="testimonial-thumbnail relative w-[470px] h-[550px] rounded-[20px] overflow-hidden bg-[#D9D9D9]">
                <img src="{{ Storage::url($testimonial->thumbnail)}}" class="w-full h-full object-cover object-center" alt="thumbnail">

                <!-- Carousel Arrows inside the thumbnail -->
                <div class="left-arrow absolute top-1/2 left-2 transform -translate-y-1/2 bg-gray-800 text-white rounded-full p-2 cursor-pointer">
                    &#10094; <!-- Left Arrow -->
                </div>
                <div class="right-arrow absolute top-1/2 right-2 transform -translate-y-1/2 bg-gray-800 text-white rounded-full p-2 cursor-pointer">
                    &#10095; <!-- Right Arrow -->
                </div>
            </div>
        </div>
        @empty
        <p>Belum ada data terbaru</p>
        @endforelse
    </div>
</div>
<div id="Awards" class="container max-w-7xl mx-auto flex flex-col gap-8 mt-20 px-4">
    <div class="flex flex-col md:flex-row items-center justify-between">
        <div class="flex flex-col gap-4">
            <h2 class="font-bold text-4xl leading-tight">
                Our Commitment to Excellence<br>Defines Our Vision, Mission, and Values.
            </h2>
        </div>
        <a href="#" class="bg-black p-4 rounded-xl font-bold text-white mt-6 md:mt-0">
            Explore More
        </a>
    </div>

    <div class="awards-card-container grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="awards-card bg-white flex flex-col h-full p-6 gap-6 rounded-lg border border-gray-200 hover:border-blue-600 transition-all duration-300">
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

        <div class="awards-card bg-white flex flex-col h-full p-6 gap-6 rounded-lg border border-gray-200 hover:border-blue-600 transition-all duration-300">
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

        <div class="awards-card bg-white flex flex-col h-full p-6 gap-6 rounded-lg border border-gray-200 hover:border-blue-600 transition-all duration-300">
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
<div id="FAQ" class="bg-[#F6F7FA] w-full py-20 px-4 mt-20">
    <div class="container max-w-[1000px] mx-auto">
        <div class="flex flex-col lg:flex-row gap-10 items-center">
            <div class="flex flex-col gap-6">
                <h2 class="font-bold text-4xl leading-[45px]">Frequently Asked Questions</h2>
                <a href="contact.html" class="p-4 bg-red-600 rounded-xl text-white font-bold text-center hover:bg-red-700 transition duration-300">Contact Us</a>
            </div>
            <div class="flex flex-col gap-6 w-full">
                <!-- Accordion Items -->
                <div class="accordion-item bg-white p-5 rounded-2xl shadow-sm">
                    <button class="accordion-button flex justify-between items-center w-full" data-accordion="accordion-faq-1">
                        <span class="font-bold text-lg">Can installments be beneficial for both?</span>
                        <img src="{{ asset('assets/icons/arrow-circle-down.svg')}}" class="w-6 h-6 text-blue-500 transition-transform duration-300" alt="icon">
                    </button>
                    <div id="accordion-faq-1" class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <p class="text-gray-600 pt-4">We want to protect our and clients assets to the max level so that we chose the best one from Jakarta, Indonesia will also protect post building finished completed ahead one.</p>
                    </div>
                </div>
                <div class="accordion-item bg-white p-5 rounded-2xl shadow-sm">
                    <button class="accordion-button flex justify-between items-center w-full" data-accordion="accordion-faq-2">
                        <span class="font-bold text-lg">What kind of framework you popular with?</span>
                        <img src="{{ asset('assets/icons/arrow-circle-down.svg')}}" class="w-6 h-6 text-blue-500 transition-transform duration-300" alt="icon">
                    </button>
                    <div id="accordion-faq-2" class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <p class="text-gray-600 pt-4">We want to protect our and clients assets to the max level so that we chose the best one from Jakarta, Indonesia will also protect post building finished completed ahead one.</p>
                    </div>
                </div>
                <div class="accordion-item bg-white p-5 rounded-2xl shadow-sm">
                    <button class="accordion-button flex justify-between items-center w-full" data-accordion="accordion-faq-3">
                        <span class="font-bold text-lg">What insurance provider do you use?</span>
                        <img src="{{ asset('assets/icons/arrow-circle-down.svg')}}" class="w-6 h-6 text-blue-500 transition-transform duration-300" alt="icon">
                    </button>
                    <div id="accordion-faq-3" class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <p class="text-gray-600 pt-4">We want to protect our and clients assets to the max level so that we chose the best one from Jakarta, Indonesia will also protect post building finished completed ahead one.</p>
                    </div>
                </div>
                <div class="accordion-item bg-white p-5 rounded-2xl shadow-sm">
                    <button class="accordion-button flex justify-between items-center w-full" data-accordion="accordion-faq-4">
                        <span class="font-bold text-lg">What if we have other questions?</span>
                        <img src="{{ asset('assets/icons/arrow-circle-down.svg')}}" class="w-6 h-6 text-blue-500 transition-transform duration-300" alt="icon">
                    </button>
                    <div id="accordion-faq-4" class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <p class="text-gray-600 pt-4">We want to protect our and clients assets to the max level so that we chose the best one from Jakarta, Indonesia will also protect post building finished completed ahead one.</p>
                    </div>
                </div>
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


</script>
@endpush