<div class=" bg-white rounded-sm p-4 pb-10">
    <div class="mb-10">
        <div class="flex bg-green-100 rounded-lg p-4 mb-1 text-sm text-green-700" role="alert">
            <svg class="w-5 h-5 inline mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
            <div>
                <span class="font-medium"><b>Note:</b> Just click on the map to pinpoint the port's location.</span>
            </div>
            
        </div>
        <h2>Ports Information</h2>
        <div>
                <div class="m-2 w-full">
                        <label class="my-2 block text-sm font-bold" for="username">Port Name</label>
                        <input id="username" type="text" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300" placeholder="Port Name..." wire:model.defer="port_name">
                    @error('port_name')
                        <span class="text-red-500 text-sm">* {{ $message }}</span>
                    @enderror
                </div>
                <div class="m-2 flex w-full justify-between gap-5">
                    <div class="w-full">
                        <label class="my-2 block text-sm font-bold" for="username">Latitude</label>
                        <input id="latitude" type="text" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300" placeholder="Latitude..." wire:model.defer="latitude">
                        @error('latitude')
                            <span class="text-red-500 text-sm">* {{ $message }}</span>
                        @enderror
                    </div>
                    <div class="w-full">
                        <label class="my-2 block text-sm font-bold" for="username">Longitude</label>
                        <input id="longitude" type="text" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300" placeholder="Longitude..." wire:model.defer="longitude">
                        @error('longitude')
                            <span class="text-red-500 text-sm">* {{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="w-full h-96 shadow-lg border-2 rounded-2xl mt-4" wire:ignore.self>
                    <div id="map" class="-full h-full rounded-2xl"></div>
                </div>
                <div class="m-2 float-right">
                    <button class="inline-flex items-center px-8 py-3 text-white bg-red-600 border border-red-600 rounded hover:bg-transparent hover:text-red-600 active:text-red-500 focus:outline-none focus:ring" onClick="deleteMarker()" wire:click="deleteMarker"  ><span class="text-sm font-medium">
                        Delete Marker &nbsp;</span>
                    
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash hover:text-red-600" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <line x1="4" y1="7" x2="20" y2="7" />
                            <line x1="10" y1="11" x2="10" y2="17" />
                            <line x1="14" y1="11" x2="14" y2="17" />
                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                        </svg></button>
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
</div>

<script>
    ///Setting the center of the map
    var center = [8.4730522, 124.383235];
    // Create the map
    var map = L.map('map').setView(center, 10);
    
    const port_name = document.getElementById("port_name");
    const latHolder = document.getElementById("latitude");
    const lngHolder = document.getElementById("longitude");
    const portSave = document.getElementById("portSave");

    L.tileLayer(
        'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: 'Data © <a href="http://osm.org/copyright">OpenStreetMap</a>',
            maxZoom: 18,
        }).addTo(map);

    var coord;
    var wew;

        // Add marker to the Map
    map.on('click', function(ev) {
        ev.preventDefault;
        if (latHolder.value == "") {
            coord = ev.latlng;
            latHolder.value = coord.lat;
            lngHolder.value = coord.lng;
            L.marker([coord.lat, coord.lng]).addTo(map);
            latHolder.dispatchEvent(new Event('input'))
            lngHolder.dispatchEvent(new Event('input'))
        }
    });
    
    window.addEventListener('swal:modal', event => {
        Swal.fire({
            title: event.detail.title,
            text: event.detail.text,
            icon: event.detail.type
        })
    })
</script>