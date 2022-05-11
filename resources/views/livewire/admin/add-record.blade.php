<div class="bg-white shadow-md rounded my-6">
    <div class="p-4">
        <h3>Add Fish Record</h3>
    </div>
    <div class="flex flex-col w-full p-4">
        <div class="flex w-full">
            <div class="m-2 w-full">
                <label class="my-2 block text-sm font-bold" for="username">Fish Name</label>
                <select name="" id="" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300" wire:model.defer="fishId">
                    <option value="">-- SELECT FISH --</option>
                    @foreach ($fishs as $fish)
                        <option value="{{ $fish->fish_id }}">{{ $fish->fish_name }} ({{ $fish->local_name }})</option>
                    @endforeach
                </select>
                @error('port_name')
                    <span class="text-red-500">* {{ $message }}</span>
                @enderror
            </div>
            <div class="m-2 w-full">
                <label class="my-2 block text-sm font-bold" for="username">Port Name</label>
                <select name="" id="" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300" wire:model.defer="portId">
                    <option value="">-- SELECT PORT --</option>
                    @foreach ($portt as $ports)
                        <option value="{{ $ports->port_id }}">{{ $ports->port_name }}</option>
                    @endforeach}
                </select>
                @error('port_name')
                    <span class="text-red-500">* {{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="flex w-full">
            <div class="m-2 w-full">
                <label class="my-2 block text-sm font-bold" for="username">Catch</label>
                <input id="username" type="number" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300" placeholder="Catch in tons..." wire:model.defer="catch">
                @error('port_name')
                    <span class="text-red-500">* {{ $message }}</span>
                @enderror
            </div>
            <div class="m-2 w-full">
                <label class="my-2 block text-sm font-bold" for="username">Date</label>
                <input id="username" type="date" class=" block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300" placeholder="Select a date..." wire:model.defer="date">
                @error('port_name')
                    <span class="text-red-500">* {{ $message }}</span>
                @enderror
            </div>
            <div class="m-2 w-full">
                <label class="my-2 block text-sm font-bold" for="username">Status</label>
                <select name="" id="" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300" wire:model.defer="status">
                    <option value="">-- SELECT STATUS --</option>
                    <option value="high">HIGH</option>
                    <option value="medium">MEDIUM</option>
                    <option value="low">LOW</option>
                </select>
                @error('port_name')
                    <span class="text-red-500">* {{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="flex w-full items-center">
            <div class="m-2 w-full">
                <label class="my-2 block text-sm font-bold" for="username">Price Range From</label>
                <input id="username" type="number" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300" placeholder="Price From..." wire:model.defer="price_from">
                @error('port_name')
                    <span class="text-red-500">* {{ $message }}</span>
                @enderror
            </div>
            <div class="mt-8">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-narrow-right" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <line x1="5" y1="12" x2="19" y2="12" />
                    <line x1="15" y1="16" x2="19" y2="12" />
                    <line x1="15" y1="8" x2="19" y2="12" />
                </svg>
            </div>
            <div class="m-2 w-full">
                <label class="my-2 block text-sm font-bold" for="username">Price Range To</label>
                <input id="username" type="number" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300" placeholder="Price To..." wire:model.defer="price_to">
                @error('port_name')
                    <span class="text-red-500">* {{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="p-4 flex justify-end">
            <button class="inline-flex items-center px-8 py-3 text-white bg-blue-600 border border-blue-600 rounded hover:bg-transparent hover:text-blue-600 active:text-blue-500 focus:outline-none focus:ring" wire:click="create"><span class="text-sm font-medium">
                Save &nbsp;</span>
            
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-device-floppy" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2" />
                    <circle cx="12" cy="14" r="2" />
                    <polyline points="14 4 14 8 8 8 8 4" />
                </svg></button>
        </div>
    </div>
</div>

<script>
    window.addEventListener('swal:modal', event => {
        Swal.fire({
            title: event.detail.title,
            text: event.detail.text,
            icon: event.detail.type
        })
    })
</script>