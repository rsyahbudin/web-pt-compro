@extends ('front.layouts.app')
@section ('content')

<div id="header" class="relative">
    <div class="container max-w-[1130px] mx-auto relative pt-10 z-10">
        <x-navbar />
        <div class="flex flex-col gap-[40px] items-center py-10">

        </div>
    </div>
</div>

<div id="Contact" class="container max-w-[1130px] mx-auto flex flex-wrap xl:flex-nowrap justify-between gap-12 relative z-10" data-aos="fade-up">
    <div class="flex flex-col gap-12 w-full xl:w-1/2" data-aos="fade-right">
        <div class="breadcrumb flex items-center gap-4" data-aos="fade-left">
            <p class="text-gray-500 last-of-type:text-gray-500 last-of-type:font-semibold">Home</p>
            <span class="text-cp-light-grey">/</span>
            <p class="text-gray-600">Product</p>
            <span class="text-cp-light-grey">/</span>
            <p class="text-cp-black font-semibold">Appointment</p>
        </div>
        <h1 class="text-5xl font-bold leading-tight text-gray-800" data-aos="zoom-in">We Help You to Build Awesome Projects</h1>
        <div class="space-y-4" data-aos="fade-up">
        <div class="flex items-center gap-2" data-aos="fade-up" data-aos-delay="100">
        <img src="assets/icons/global.svg" alt="Location Icon" class="w-6 h-6">
                <p class="text-cp-dark-blue font-semibold">Kawasan Bangunan Multi Guna, Taman Tekno BSD City, Blk. H2 Jl. Sektor 11 No.5, Setu, Kec. Setu, Kota Tangerang Selatan, Banten 15314</p>
            </div>
            <div class="flex items-center gap-2" data-aos="fade-up" data-aos-delay="200">
                <img src="assets/icons/call.svg" alt="Phone Icon" class="w-6 h-6">
                <p class="text-cp-dark-blue font-semibold">(021) 7563713</p>
            </div>
            <div class="flex items-center gap-2" data-aos="fade-up" data-aos-delay="300">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-blue-800">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                </svg>
                <p class="text-cp-dark-blue font-semibold">
                    <a href="mailto:alghifari@setiaprimatamas.com" class="hover:underline">alghifari@setiaprimatamas.com</a>
                </p>
            </div>
        </div>
    </div>

    <form class="w-full xl:w-[700px] bg-white shadow-lg p-10 rounded-2xl space-y-8" data-aos="fade-left">
        <h2 class="text-xl font-bold text-gray-800 mb-6 text-center">Contact Us</h2>

        @csrf
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div>
                <label for="name" class="block font-medium mb-2 text-gray-700">Complete Name</label>
                <div class="flex items-center ">
                    <img src="assets/icons/profile.svg" alt="Profile Icon" class="w-5 h-5 mr-3">
                    <input type="text" name="name" id="name" class="w-full p-2 bg-transparent outline-none placeholder-gray-500 rounded-md" placeholder="Your complete name" required>
                </div>
            </div>
            <div>
                <label for="company_name" class="block font-medium mb-2 text-gray-700">Company Name</label>
                <div class="flex items-center ">
                    <svg xmlns="http://www.w3.org/2000/svg" height="14" width="10.5" viewBox="0 0 384 512" class="w-5 h-5 mr-3">
                        <path d="M64 48c-8.8 0-16 7.2-16 16l0 384c0 8.8 7.2 16 16 16l80 0 0-64c0-26.5 21.5-48 48-48s48 21.5 48 48l0 64 80 0c8.8 0 16-7.2 16-16l0-384c0-8.8-7.2-16-16-16L64 48zM0 64C0 28.7 28.7 0 64 0L320 0c35.3 0 64 28.7 64 64l0 384c0 35.3-28.7 64-64 64L64 512c-35.3 0-64-28.7-64-64L0 64zm88 40c0-8.8 7.2-16 16-16l48 0c8.8 0 16 7.2 16 16l0 48c0 8.8-7.2 16-16 16l-48 0c-8.8 0-16-7.2-16-16l0-48zM232 88l48 0c8.8 0 16 7.2 16 16l0 48c0 8.8-7.2 16-16 16l-48 0c-8.8 0-16-7.2-16-16l0-48c0-8.8 7.2-16 16-16zM88 232c0-8.8 7.2-16 16-16l48 0c8.8 0 16 7.2 16 16l0 48c0 8.8-7.2 16-16 16l-48 0c-8.8 0-16-7.2-16-16l0-48zm144-16l48 0c8.8 0 16 7.2 16 16l0 48c0 8.8-7.2 16-16 16l-48 0c-8.8 0-16-7.2-16-16l0-48c0-8.8 7.2-16 16-16z" />
                    </svg>
                    <input type="text" name="company_name" id="company_name" class="w-full p-2 bg-transparent outline-none placeholder-gray-500 rounded-md" placeholder="Your company name" required>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div>
                <label for="email" class="block font-medium mb-2 text-gray-700">Email Address</label>
                <div class="flex items-center ">
                    <img src="assets/icons/sms.svg" alt="Email Icon" class="w-5 h-5 mr-3">
                    <input type="email" name="email" id="email" class="w-full p-2 bg-transparent outline-none placeholder-gray-500 rounded-md" placeholder="Your email address" required>
                </div>
            </div>
            <div>
                <label for="product_id" class="block font-medium mb-2 text-gray-700">Your Interest</label>
                <div class="flex items-center ">
                    <img src="assets/icons/building-4-black.svg" alt="Interest Icon" class="w-5 h-5 mr-3">
                    <select name="product_id" id="product_id" class="w-full p-2 bg-transparent outline-none rounded-md" required>
                        <option value="" disabled selected>Choose a project</option>
                        @foreach ($principles as $principle)
                        <option value="{{ $principle->id }}">{{ $principle->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div>
            <label for="brief" class="block font-medium mb-2 text-gray-700">Brief</label>
            <div class="flex ">
                <img src="assets/icons/message-text.svg" alt="Message Icon" class="w-5 h-5 mr-3 mt-1">
                <textarea name="brief" id="brief" rows="4" class="w-full p-2 bg-transparent outline-none resize-none placeholder-gray-500 rounded-md" placeholder="Tell us about your project"></textarea>
            </div>
        </div>

        <button type="button" onclick="sendEmail()" class="w-full py-3 bg-red-600 text-white font-semibold rounded-full hover:shadow-lg transition duration-300" data-aos="zoom-in-up">Book Appointment</button>
    </form>




</div>

<x-footer />

@endsection

@push ('after-scripts')
<script src="js/contact-form.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

@endpush