<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New Principle') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden p-10 shadow-sm sm:rounded-lg"> 
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="py-3 w-full rounded-3xl bg-red-500 text-white">
                            {{ $error }}
                        </div>
                    @endforeach
                @endif
                
                <form method="POST" action="{{ route('admin.principles.store') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
                    @csrf

                    <div>
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="thumbnail" :value="__('Thumbnail')" />
                        <x-text-input id="thumbnail" class="block mt-1 w-full" type="file" name="thumbnail" required />
                        <x-input-error :messages="$errors->get('thumbnail')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="icon" :value="__('Icon')" />
                        <x-text-input id="icon" class="block mt-1 w-full" type="file" name="icon" required />
                        <x-input-error :messages="$errors->get('icon')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="subtitle" :value="__('Subtitle')" />
                        <textarea name="subtitle" id="subtitle" cols="30" rows="5" class="border border-slate-300 rounded-xl w-full" placeholder="Enter a brief subtitle..."></textarea>
                        <x-input-error :messages="$errors->get('subtitle')" class="mt-2" />
                    </div>

                    <h3 class="text-indigo-950 text-lg font-bold mt-4">Keypoints</h3>

                    <div id="keypoints-container" class="mt-4">
                        <div class="flex flex-col gap-y-5">
                            <!-- Display only one default keypoint input -->
                            <div class="flex flex-col gap-y-2 keypoint-item">
                                <input type="text" class="py-3 rounded-lg border-slate-300 border" placeholder="Write your keypoint" name="keypoints[0][keypoint]">
                                <input type="text" class="py-3 rounded-lg border-slate-300 border" placeholder="Enter manufacture" name="keypoints[0][manufacture]">
                            </div>
                        </div>
                        <x-input-error :messages="$errors->get('keypoints')" class="mt-2" />
                    </div>

                    <button type="button" id="add-keypoint" class="mt-4 py-2 px-4 bg-blue-500 text-white rounded-full">
                        Add Keypoint
                    </button>

                    <div class="flex items-center justify-end mt-4">
                        <button type="submit" class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full">
                            Add New Principle
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const keypointsContainer = document.getElementById('keypoints-container');
            const addKeypointButton = document.getElementById('add-keypoint');
            let keypointIndex = 1; // Start index after the initial default

            addKeypointButton.addEventListener('click', () => {
                const keypointItem = document.createElement('div');
                keypointItem.classList.add('flex', 'flex-col', 'gap-y-2', 'keypoint-item');

                keypointItem.innerHTML = `
                    <input type="text" class="py-3 rounded-lg border-slate-300 border mt-4" placeholder="Write your keypoint" name="keypoints[${keypointIndex}][keypoint]">
                    <input type="text" class="py-3 rounded-lg border-slate-300 border" placeholder="Enter manufacture" name="keypoints[${keypointIndex}][manufacture]">
                `;

                keypointsContainer.appendChild(keypointItem);
                keypointIndex++;
            });
        });
    </script>
</x-app-layout>

