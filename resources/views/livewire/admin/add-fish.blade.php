<section class="w-full p-6 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800">
    <h2 class="text-2xl font-semibold text-gray-700 capitalize dark:text-white">Fish Information</h2>
    
    
        <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-3 my-4">
            <div>
                <label class="my-2 block text-md font-bold" for="username">Fish Name</label>
                <input id="username" type="text" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300" placeholder="Fish Name..." wire:model.defer="fish_name">
                @error('fish_name')
                    <span class="text-red-500 text-sm">* {{ $message }}</span>
                @enderror
            </div>

            <div>
                <label class="my-2 block text-md font-bold for="emailAddress">Local Name</label>
                <input id="username" type="text" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300" placeholder="Local Name..." wire:model.defer="local_name">
                @error('local_name')
                    <span class="text-red-500 text-sm">* {{ $message }}</span>
                @enderror
            </div>

            <div>
                <label class="my-2 block text-md font-bold" for="password">Scientific Name</label>
                <input id="username" type="text" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300" placeholder="Scientific Name..." wire:model.defer="scientific_name">
                @error('scientific_name')
                    <span class="text-red-500 text-sm">* {{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="form-check p-4 m-4 border-2 border-gray-200 rounded">
            <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" value="top" id="flexCheckDefault" wire:model.defer="top">
            <label class="form-check-label inline-block text-gray-800" for="flexCheckDefault">
            One of the top fishes
            </label>
        </div>

        <label for="" class="my-10 text-lg font-bold">Feature</label>
        <div class="m-5" wire:ignore>
            <textarea id="featureEditor"  id="editor" wire:model.defer="feature" x-data="{ article: @entangle('feature').defer }" x-init="
            new FroalaEditor('#featureEditor', {
                        events: { 
                            'contentChanged': function () { 
                                article = this.html.get(); 
                            }, 
                        } 
                    });"></textarea>
        </div>
        @error('feature')
            <span class="block text-red-500 text-sm">* {{ $message }}</span>
        @enderror
        <label for="" class="my-10 text-lg font-bold">Development</label>
        <div class="m-5" wire:ignore>
            <textarea id="developmentEditor" rows="5" class="w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" x-data="{ article: @entangle('development').defer }" 
                    x-init="
                    new FroalaEditor('#developmentEditor', {
                        events: { 
                            'contentChanged': function () { 
                                article = this.html.get(); 
                            }, 
                        } 
                    });" wire:model.defer="development"></textarea>
        </div>
        @error('development')
            <span class="block text-red-500 text-sm">* {{ $message }}</span>
        @enderror
        <label for="" class="my-10 text-lg font-bold">Diet</label>
        <div class="m-5" wire:ignore>
            <textarea id="dietEditor" rows="5" class="w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm my-5" x-data="{ article: @entangle('diet').defer }" 
                    x-init="
                    new FroalaEditor('#dietEditor', {
                        events: { 
                            'contentChanged': function () { 
                                article = this.html.get(); 
                            }, 
                        } 
                    });" wire:model.defer = "diet"></textarea>
                
        </div>
                @error('diet')
                    <span class="block text-red-500 text-sm">* {{ $message }}</span>
                @enderror
        <div>
            <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 ml-2 sm:col-span-4 md:mr-3">
                <!-- Photo File Input -->
                <input type="file" class="hidden" x-ref="photo" x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                " wire:model.defer="image" accept="image/png, image/jpeg">
            
                <label class="my-2 block text-lg font-bold text-center" for="photo">
                    Profile Photo <span class="text-red-600"> </span>
                </label>
                
                <div class="text-center">
                    <!-- Current Profile Photo -->
                    <div class="mt-2" x-show="! photoPreview">
                    </div>
                    <!-- New Profile Photo Preview -->
                    <div class="mt-2" x-show="photoPreview" style="display: none;">
                        <span class="block w-40 h-40 rounded-full m-auto shadow" x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'" style="background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url('null');">
                        </span>
                    </div>
                    <button type="button" class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-400 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50 transition ease-in-out duration-150 mt-2 ml-3" x-on:click.prevent="$refs.photo.click()">
                        Select New Photo
                    </button>
                    @error('image')
                        <span class="block text-red-500 text-sm">* {{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="flex justify-end mt-6 w-full">
            <button class="relative round-lg w-full h-14 overflow-hidden border border-blue-600 group focus:outline-none focus:ring" wire:click="create">
                <span class="absolute inset-y-0 left-0 w-[2px] transition-all bg-blue-600 group-hover:w-full group-active:bg-blue-500"></span>
                <span class="relative text-sm font-medium text-blue-600 transition-colors group-hover:text-white">Save
                </span>
            </button>
        </div>
</section>

<script>
@if (Session::has('message'))
    Swal.fire({
    icon: 'success',
    title: 'Success',
    text: 'Fish added successfully!',
    showConfirmButton: true,
    })
@endif
</script>