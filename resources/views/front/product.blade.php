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
        <div class="product-card cursor-pointer" id="openModal{{ $principle->id }}" onclick="openModal({{ $principle->id }})">
            <div class="w-full h-[250px] flex shrink-0 overflow-hidden relative rounded-lg">
                <img src="{{ Storage::url($principle->thumbnail) }}"
                    class="product-image w-full h-full object-cover transition-transform duration-200 transform hover:scale-105 rounded-lg"
                    alt="{{ $principle->name }}" />
                <div class="overlay absolute inset-0 bg-black bg-opacity-30 flex items-center justify-center opacity-0 transition-opacity duration-300 hover:opacity-100">
                    <h5 class="text-white text-lg font-semibold">{{ $principle->name }}</h5>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <!-- Modal -->
        <div id="productModal{{ $principle->id }}" class="fixed inset-0 flex items-center justify-center hidden transition-opacity duration-300 z-50">
            <div class="modal-overlay absolute inset-0 bg-black bg-opacity-70 transition-opacity duration-300" onclick="closeModal({{ $principle->id }})"></div>
            <div class="modal-content bg-white rounded-lg shadow-lg w-11/12 md:w-1/3 transform scale-75 md:scale-100 max-h-[90vh] flex flex-col">
                <div class="modal-header flex justify-between items-center p-4 border-b">
                    <h5 class="text-lg font-semibold" id="productModalLabel{{ $principle->id }}">{{ $principle->name }}</h5>
                    <button type="button" class="close-modal text-gray-400 hover:text-gray-600" aria-label="Close" onclick="closeModal({{ $principle->id }})">
                        &times;
                    </button>
                </div>
                <div class="modal-body p-4 overflow-y-auto flex-1">
                    <p class="text-gray-700 italic mb-4">{{ $principle->subtitle }}</p>

                    @if($principle->keypoints->isEmpty())
                    <p class="text-gray-500 mb-3">No key points available.</p>
                    @else
                    <table class="w-full text-left mt-5 border-collapse border border-gray-300">
                        <thead>
                            <tr class="bg-red-600">
                                <th class="py-2 px-4 text-white border-b border-gray-300">Item List</th>
                                <th class="py-2 px-4 text-white text-right border-b border-gray-300">Manufacture</th>
                            </tr>
                        </thead>
                        <!-- Table Body -->
                        <tbody>
                            @foreach ($principle->keypoints as $keypoint)
                            <tr class="odd:bg-gray-100 even:bg-white hover:bg-gray-50">
                                <td class="py-2 px-4 border-b border-gray-300">{{ $keypoint->keypoint }}</td>
                                <td class="py-2 px-4 text-right border-b border-gray-300 max-w-[150px] break-words">
                                    {{ $keypoint->manufacture }}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                    @endif
                </div>

            </div>
        </div>


        @empty
        <p class="text-center col-span-full">Belum ada data terbaru</p>
        @endforelse
    </div>
</div>




@endsection

@push ('after-scripts')
<!-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Select all modal triggers
        const modalTriggers = document.querySelectorAll('[id^="openModal"]');

        modalTriggers.forEach(trigger => {
            trigger.addEventListener('click', function() {
                const modalId = trigger.id.replace('openModal', 'productModal');
                const modal = document.getElementById(modalId);
                modal.classList.remove('hidden'); // Show the modal
                modal.classList.add('flex'); // Make it a flex container to center content
            });
        });

        // Select all close buttons
        const closeModalButtons = document.querySelectorAll('.close-modal');

        closeModalButtons.forEach(button => {
            button.addEventListener('click', function() {
                const modal = button.closest('.modal-content').parentElement; // Get the parent modal
                closeModal(modal); // Close the modal
            });
        });

        // Close modal when clicking outside the modal content
        window.addEventListener('click', function(event) {
            modalTriggers.forEach(trigger => {
                const modalId = trigger.id.replace('openModal', 'productModal');
                const modal = document.getElementById(modalId);
                // Check if the click was outside the modal content
                if (event.target === modal) {
                    closeModal(modal); // Close the modal
                }
            });
        });

        // Function to close the modal
        function closeModal(modal) {
            modal.classList.add('hidden'); // Hide the modal
            modal.classList.remove('flex'); // Remove flex display
        }
    });
</script> -->
<script>
    function openModal(id) {
        document.getElementById(`productModal${id}`).classList.remove('hidden');
    }

    function closeModal(id) {
        document.getElementById(`productModal${id}`).classList.add('hidden');
    }
</script>
@endpush