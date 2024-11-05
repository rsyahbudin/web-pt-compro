@extends('front.layouts.app')

@section('content')

<div id="header" class="bg-[#F6F7FA] relative">
    <div class="container max-w-[1130px] mx-auto relative pt-10 z-10">
        <x-navbar />
        <div class="flex flex-col gap-[50px] items-center py-20">
            <div class="breadcrumb flex items-center justify-center gap-[30px]">
                <p class="text-gray-500 last-of-type:text-gray-500 last-of-type:font-semibold">Home</p>
                <span class="text-cp-light-grey">/</span>
                <p class="text-cp-light-grey last-of-type:text-cp-black last-of-type:font-semibold">Our Product</p>
            </div>
            <h2 class="font-bold text-4xl leading-[45px] text-center">Since Beginning We Only <br> Want to Make World Better</h2>
        </div>
    </div>
</div>

<div id="Products" class="container max-w-[1130px] mx-auto py-10">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
        @forelse($principles as $principle)
        <!-- Modal Trigger -->
        <div class="product-card cursor-pointer" id="openModal{{ $principle->id }}" onclick="openModal({{ $principle->id }})" data-aos="fade-up" data-aos-duration="800">
            <div class="w-full h-[250px] flex shrink-0 overflow-hidden relative rounded-lg">
                <img src="{{ Storage::url($principle->thumbnail) }}"
                    class="product-image w-full h-full object-cover transition-transform duration-200 transform hover:scale-105 rounded-lg"
                    alt="{{ $principle->name }}" />
                <div class="overlay absolute inset-0 bg-black bg-opacity-30 flex items-center justify-center opacity-0 sm:opacity-100 transition-opacity duration-300 hover:opacity-100">
                    <h5 class="text-white text-lg font-semibold">{{ $principle->name }}</h5>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div id="productModal{{ $principle->id }}" class="fixed inset-0 flex items-center justify-center hidden transition-opacity duration-300 z-50 modal" onclick="closeModal({{ $principle->id }})">
            <div class="modal-overlay absolute inset-0 bg-black bg-opacity-70 transition-opacity duration-300"></div>
            <div class="modal-content bg-white rounded-lg shadow-lg w-11/12 md:w-1/3 max-h-[90vh] overflow-hidden flex flex-col transform scale-75 md:scale-100 transition-transform duration-300">
                <!-- Header with Image -->
                <div class="relative">
                    <img src="{{ Storage::url($principle->thumbnail) }}" alt="{{ $principle->name }}" class="w-full h-32 object-cover rounded-t-lg">
                    <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center rounded-t-lg">
                        <h5 class="text-xl font-bold text-white z-10" id="productModalLabel{{ $principle->id }}">{{ $principle->name }}</h5>
                        <button type="button" class="close-modal text-white hover:text-gray-200 absolute top-3 right-3" aria-label="Close" onclick="closeModal({{ $principle->id }})">
                            &times;
                        </button>
                    </div>
                </div>
                <div class="modal-body p-6 flex-1 overflow-y-auto">
                    <div class="text-center mb-6">
                        <p class="text-lg font-semibold text-gray-800">{{ $principle->subtitle }}</p>
                        <div class="mt-2 mx-auto w-24 h-1 bg-red-600 rounded-full"></div>
                    </div>

                    <!-- Added Product List Heading -->
                    <h6 class="text-lg font-bold text-gray-800 mb-4 text-center">Product List</h6>

                    @if($principle->keypoints->isEmpty())
                    <p class="text-gray-500 text-center mb-4">No key points available.</p>
                    @else
                    <div class="space-y-4">
                        @foreach ($principle->keypoints as $keypoint)
                        <div class="flex items-center py-3 px-4 bg-gray-100 rounded-lg shadow hover:shadow-md transition-shadow duration-300" onclick="event.stopPropagation();">
                            <div class="bg-blue-600 text-white rounded-full p-2 mr-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <p class="text-gray-800 text-lg font-medium">{{ $keypoint->keypoint }}</p>
                        </div>
                        @endforeach
                    </div>
                    @endif
                </div>
                <div class="modal-footer p-4 border-t bg-gray-50">
                    <button class="bg-red-600 text-white font-semibold py-2 px-4 rounded-lg shadow hover:bg-red-700 transition duration-300" onclick="closeModal({{ $principle->id }})">Close</button>
                </div>
            </div>
        </div>
        @empty
        <p class="text-center col-span-full">Belum ada data terbaru</p>
        @endforelse
    </div>
</div>

<x-footer />




@endsection

@push ('after-scripts')

<script>
    function openModal(id) {
        const modal = document.getElementById(`productModal${id}`);
        modal.classList.remove('hidden'); // Show modal
        // Trigger a reflow to restart the CSS transition
        modal.querySelector('.modal-content').style.opacity = 0; // Set opacity to 0 initially
        modal.querySelector('.modal-content').style.transform = 'scale(0.75)'; // Start smaller

        // Use a timeout to allow the initial styles to take effect before changing them
        setTimeout(() => {
            modal.querySelector('.modal-content').style.opacity = 1; // Fade in
            modal.querySelector('.modal-content').style.transform = 'scale(1)'; // Scale to normal size
        }, 50); // Small delay to trigger the transition
    }

    function closeModal(id) {
        const modal = document.getElementById(`productModal${id}`);
        const modalContent = modal.querySelector('.modal-content');

        modalContent.style.opacity = 0; // Start fade-out
        modalContent.style.transform = 'scale(0.75)'; // Scale down

        // Delay hiding the modal until the fade-out transition is complete
        setTimeout(() => {
            modal.classList.add('hidden'); // Hide modal
            modalContent.style.transform = 'scale(1)'; // Reset scale for next open
        }, 300); // Match this duration with your CSS transition
    }
</script>
@endpush