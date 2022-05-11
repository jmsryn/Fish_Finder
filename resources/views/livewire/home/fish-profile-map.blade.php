<div class="bg-blue-500 p-4 w-full">
    <div class="flex justify-center items-center ml-4">
      <div class="xl:w-2/5">
        <div class="input-group relative flex flex-wrap items-stretch w-full rounded">
          <form action="{{ url('/fish/profiles') }}" method="GET" class="w-full flex ">
            <input type="search" class="form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded-lg transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Search Fish..." aria-label="Search" aria-describedby="button-addon2" name="search">
            <span class="input-group-text flex items-center px-3 py-1.5 text-base font-normal text-gray-700 text-center whitespace-nowrap rounded" id="basic-addon2">
              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" class="w-4 text-white" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
              </svg>
            </span>
          </form>
        </div>
      </div>
    </div>
  </div>
<div class="w-full h-full">
    <div class="w-full h-96 relative">
        <div id="map" class="w-full h-full"></div>
        <div class="h-2/4 absolute z-50 w-1/5 top-0 opacity-80 p-4 flex flex-col">
            <div class="absolute top-0 left-0 p-5 bg-white m-5  rounded-md">
                <div class="w-full flex-col justify-start  gap-5">
                    <p class="text-center font-bold text-black">Legends</p>
                    <div class="flex flex-col gap-2 justify-center items-start">
                        <div>
                            <div class="w-2 h-2 bg-green-400 rounded-full inline-block"></div><p class="inline text-gray-800">&nbsp; High</p>
                            <p class="inline text-gray-900 italic"> - Abundant in Population</p>
                        </div>
                        <div>
                            <div class="w-2 h-2 bg-yellow-400 rounded-full inline-block"></div><p class="inline text-gray-800">&nbsp; Medium</p>
                            <p class="inline text-gray-900 italic"> - Slightly Below Average </p>
                        </div>
                        <div>
                            <div class="w-2 h-2 bg-red-400 rounded-full inline-block"></div><p class="inline text-gray-800">&nbsp; Low</p>
                            <p class="inline text-gray-900 italic"> - Dangerously Low in Population</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="h-full absolute z-50 w-1/4 bg-black top-0 right-1 opacity-80 p-4 flex flex-col">
            <div class="flex justify-evenly">
                <div class="">
                    <h1 class="text-white font-semibold inline">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-fish inline " width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M16.69 7.44a6.973 6.973 0 0 0 -1.69 4.56c0 1.747 .64 3.345 1.699 4.571" />
                                <path d="M2 9.504c7.715 8.647 14.75 10.265 20 2.498c-5.25 -7.761 -12.285 -6.142 -20 2.504" />
                                <path d="M18 11v.01" />
                                <path d="M11.5 10.5c-.667 1 -.667 2 0 3" />
                            </svg>
                        </span> Fish Name</h1>
                    <p class="text-white mt-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -{{ $fishes->fish_name }}</p>
                </div>
                <div class="">
                    <h1 class="text-white font-semibold inline">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-fish inline " width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M16.69 7.44a6.973 6.973 0 0 0 -1.69 4.56c0 1.747 .64 3.345 1.699 4.571" />
                                <path d="M2 9.504c7.715 8.647 14.75 10.265 20 2.498c-5.25 -7.761 -12.285 -6.142 -20 2.504" />
                                <path d="M18 11v.01" />
                                <path d="M11.5 10.5c-.667 1 -.667 2 0 3" />
                            </svg>
                        </span> Local Name</h1>
                    <p class="text-white mt-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -{{ $fishes->local_name }}</p>
                </div>
                <div class="">
                    <h1 class="text-white font-semibold inline">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-fish inline " width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M16.69 7.44a6.973 6.973 0 0 0 -1.69 4.56c0 1.747 .64 3.345 1.699 4.571" />
                                <path d="M2 9.504c7.715 8.647 14.75 10.265 20 2.498c-5.25 -7.761 -12.285 -6.142 -20 2.504" />
                                <path d="M18 11v.01" />
                                <path d="M11.5 10.5c-.667 1 -.667 2 0 3" />
                            </svg>
                        </span> Scientific Name</h1>
                    <p class="text-white mt-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -{{ $fishes->scientific_name }}</p>
                </div>
            </div>
            <div class="p-4 opacity-100">
                <img src="{{ url('/storage/' . $fishes->image) }}" alt="" class="rounded-lg ">
            </div>
        </div>
    </div>
    <div class="w-full ">
        <div class="w-4/5 p-4 mt-4 h-full mx-auto">
            <div class="accordion accordion-flush w-full" id="accordionFlushExample">
                <div class="accordion-item border-t-0 border-l-0 border-r-0 rounded-none bg-white border border-gray-200 p-4">
                    <h2 class="accordion-header mb-0" id="flush-headingOne">
                        <button class="accordion-button relative flex items-center w-full py-4 px-5 text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none text-2xl font-bold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                        aria-expanded="false" aria-controls="flush-collapseOne">
                        Feature
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse border-0 collapse show"
                        aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body py-4 px-5">{!! $fishes->feature !!}</div>
                    </div>
                </div>
                <div class="accordion-item border-t-0 border-l-0 border-r-0 rounded-none bg-white border border-gray-200 p-4">
                    <h2 class="accordion-header mb-0" id="flush-headingTwo">
                        <button class="accordion-button relative flex items-center w-full py-4 px-5 text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none text-2xl font-bold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                        aria-expanded="false" aria-controls="flush-collapseTwo">
                        Development
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse border-0 collapse show"
                        aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body py-4 px-5">{!! $fishes->development !!}</div>
                    </div>
                </div>
                <div class="accordion-item border-t-0 border-l-0 border-r-0 rounded-none bg-white border border-gray-200 p-4">
                    <h2 class="accordion-header mb-0" id="flush-headingThree">
                        <button class="accordion-button relative flex items-center w-full py-4 px-5 text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none text-2xl font-bold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                        aria-expanded="false" aria-controls="flush-collapseThree">
                        Diet
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse border-0 collapse show"
                        aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body py-4 px-5">{!! $fishes->diet !!}</div>
                    </div>
                </div>
                <div class="accordion-item border-t-0 border-l-0 border-r-0 rounded-none bg-white border border-gray-200 p-4">
                    <h2 class="accordion-header mb-0" id="flush-headingFourth">
                        <button class="accordion-button relative flex items-center w-full py-4 px-5 text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none text-2xl font-bold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFourth"
                        aria-expanded="false" aria-controls="flush-collapseFourth">
                        Catch Chart
                        </button>
                    </h2>
                    <div id="flush-collapseFourth" class="accordion-collapse border-0 collapse show"
                        aria-labelledby="flush-headingFourth" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body py-4 px-5">
                            <div id="chartdiv" class="w-full h-96" wire:ignore></div>
                            <div>
                                <p class="text-center">This chart represents weekly catch(<b>tons</b>) of all registered ports on this specific fish</p>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="accordion-item border-t-0 border-l-0 border-r-0 rounded-none bg-white border border-gray-200 p-4">
                    <h2 class="accordion-header mb-0" id="flush-headingFourth">
                        <button class="accordion-button relative flex items-center w-full py-4 px-5 text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none text-2xl font-bold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFourth"
                        aria-expanded="false" aria-controls="flush-collapseFourth">
                        Price Table
                        </button>
                    </h2>
                    <div id="flush-collapseFourth" class="accordion-collapse border-0 collapse show"
                        aria-labelledby="flush-headingFourth" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body py-4 px-5">
                            <table>
                                <thead>
                                    <th></th>
                                </thead>
                                <tbody>
                                    <tr>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</div>

<script>
    var center = [8.7126737, 124.6418211];
    // Create the map
    var map = L.map('map').setView(center, 10);

    L.tileLayer(
        'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: 'Data © <a href="http://osm.org/copyright">OpenStreetMap</a>',
            maxZoom: 18
        }).addTo(map);

        L.control.zoom({
        position:'topright'
        }).addTo(map);

    var lowIcon = new L.Icon({
        iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-red.png',
        shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
        iconSize: [25, 41],
        iconAnchor: [12, 41],
        popupAnchor: [1, -34],
        shadowSize: [41, 41]
    });
    var medIcon = new L.Icon({
        iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-gold.png',
        shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
        iconSize: [25, 41],
        iconAnchor: [12, 41],
        popupAnchor: [1, -34],
        shadowSize: [41, 41]
    });
    var highIcon = new L.Icon({
        iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-green.png',
        shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
        iconSize: [25, 41],
        iconAnchor: [12, 41],
        popupAnchor: [1, -34],
        shadowSize: [41, 41]
    });


    const fishData = {!! json_encode($fishLocation) !!}

    for (let i = 0; i < fishData.length; i++) {
        if ( fishData[i].status === 'low') {
            L.marker([fishData[i].ports_model.latitude, fishData[i].ports_model.longitude ], {draggable: false, icon: lowIcon}).bindPopup(`
            <h1 class="font-bold">Port Name: </h1>
            <span>${fishData[i].ports_model.port_name}</span>
            <h1 class="font-bold">Catch(Tons): </h1> 
            <span>${fishData[i].catch} Tons</span>
            <h1 class="font-bold">Status: </h1> 
            <span>${fishData[i].status}</span>
            <h1 class="font-bold">Price Range: </h1> 
            <div class="flex items-center">
            <span>${fishData[i].price_from}</span>
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-narrow-right" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <line x1="5" y1="12" x2="19" y2="12" />
                <line x1="15" y1="16" x2="19" y2="12" />
                <line x1="15" y1="8" x2="19" y2="12" />
                </svg>
            </span>
            <span>${fishData[i].price_to}</span>
            </div>
            `).addTo(map);
        } else if (fishData[i].status === "medium") {
            L.marker([fishData[i].ports_model.latitude, fishData[i].ports_model.longitude ], {draggable: false, icon: medIcon}).bindPopup(`
            <h1 class="font-bold">Port Name: </h1>
            <span>${fishData[i].ports_model.port_name}</span>
            <h1 class="font-bold">Catch(Tons): </h1> 
            <span>${fishData[i].catch} Tons</span>
            <h1 class="font-bold">Status: </h1> 
            <span>${fishData[i].status}</span>
            <h1 class="font-bold">Price Range: </h1> 
            <div class="flex items-center">
            <span>${fishData[i].price_from}</span>
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-narrow-right" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <line x1="5" y1="12" x2="19" y2="12" />
                <line x1="15" y1="16" x2="19" y2="12" />
                <line x1="15" y1="8" x2="19" y2="12" />
                </svg>
            </span>
            <span>${fishData[i].price_to}</span>
            </div>
            `).addTo(map);
        } else {
            L.marker([fishData[i].ports_model.latitude, fishData[i].ports_model.longitude ], {draggable: false, icon: highIcon}).bindPopup(`
            <h1 class="font-bold">Port Name: </h1>
            <span>${fishData[i].ports_model.port_name}</span>
            <h1 class="font-bold">Catch(Tons): </h1> 
            <span>${fishData[i].catch} Tons</span>
            <h1 class="font-bold">Status: </h1> 
            <span>${fishData[i].status}</span>
            <h1 class="font-bold">Price Range: </h1> 
            <div class="flex items-center">
            <span>${fishData[i].price_from}</span>
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-narrow-right" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <line x1="5" y1="12" x2="19" y2="12" />
                <line x1="15" y1="16" x2="19" y2="12" />
                <line x1="15" y1="8" x2="19" y2="12" />
                </svg>
            </span>
            <span>${fishData[i].price_to}</span>
            </div>
            `).addTo(map);
        }
    }

    console.log(@js($chartss))

var options = {
    series: @js($chartss),
    chart: {
    height: 350,
    type: 'line',
    zoom: {
    enabled: false
    }
},
dataLabels: {
    enabled: false
},
stroke: {
    curve: 'straight'
},
title: {
    text: 'Weekly Catch Chart',
    align: 'center'
},
tooltip: {
    x: {
        format: "MM/dd/yyyy",
    }
},
grid: {
    row: {
    colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
    opacity: 0.5
    },
},
markers: {
    size: 10
},
xaxis: {
    type: "datetime",
    labels: {
        datetimeUTC: false,
    },
    tickPlacement: 'between'
}
};

var chart = new ApexCharts(document.querySelector("#chartdiv"), options);
chart.render();

</script>
