<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c01d554147.js" crossorigin="anonymous"></script>
    <link href='https://cdn.jsdelivr.net/npm/froala-editor@4.0.10/css/froala_editor.pkgd.min.css' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>

    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/froala-editor@4.0.10/js/froala_editor.pkgd.min.js'></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://d19vzq90twjlae.cloudfront.net/leaflet-0.7/leaflet.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://unpkg.com/flowbite@1.4.2/dist/datepicker.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Trocchi&display=swap" rel="stylesheet">

    <title>{{ request()->is('admin/dashboard') ? 'Dashboard | Fish Finder' : (request()->is('admin/fish/add') ? 'Add Fish | Fish Finder' : (request()->is('admin/port/add') ? 'Add Port | Fish Finder' : (request()->is('admin/record/add') ? 'Add Record | Fish Finder' : (request()->is('admin/fish/manage') ? 'Manage Fish | Fish Finder' : (request()->is('admin/port/manage') ? 'Manage Port | Fish Finder' : (request()->is('admin/record/manage') ? 'Manage Record | Fish Finder' : (request()->is('admin/settings') ? 'Settings | Fish Finder' : (request()->is('admin/fish/manage/edit/*') ? 'Edit Fish | Fish Finder' : '')))))))) }}</title>
    @livewireStyles
</head>
<body>
    <div>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
        
        <div x-data="{ sidebarOpen: false, darkMode: false }" :class="{ 'dark': darkMode }">
            <div class="flex h-screen bg-gray-100 dark:bg-gray-800 font-roboto">
                <div :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false"
                    class="fixed z-20 inset-0 bg-black opacity-50 transition-opacity lg:hidden "></div>
        
                <div :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'"
                    class="fixed z-30 inset-y-0 left-0 w-64 transition duration-300 transform bg-white dark:bg-gray-900 overflow-y-auto lg:translate-x-0 lg:static lg:inset-0 shadow-md">
                    <div class="flex items-center justify-center mt-8">
                        <div class="flex items-center gap-4">
                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 256.000000 256.000000"
                                preserveAspectRatio="xMidYMid meet" class="w-10 h-10">
                            <g transform="translate(0.000000,256.000000) scale(0.100000,-0.100000)"
                            fill="#2196F3" stroke="none">
                            <path d="M1100 2479 c-193 -40 -328 -90 -450 -168 -95 -60 -115 -76 -211 -171
                            -339 -334 -446 -835 -276 -1283 218 -571 827 -890 1407 -737 301 79 565 280
                            724 550 198 334 225 707 79 1075 -20 50 -43 101 -53 115 -9 14 -20 33 -23 43
                            -4 10 -38 60 -76 111 -102 134 -201 223 -344 309 -183 111 -392 168 -611 166
                            -66 -1 -141 -5 -166 -10z m276 -104 c8 -20 -4 -65 -16 -65 -6 0 -10 14 -10 30
                            0 26 -3 30 -29 30 -47 0 -61 -10 -61 -41 0 -24 7 -32 43 -50 63 -32 87 -58 87
                            -94 0 -50 -30 -70 -105 -70 -35 0 -66 3 -70 7 -9 9 4 68 15 68 4 0 11 -11 14
                            -25 5 -21 12 -25 45 -25 45 0 68 21 55 50 -5 11 -34 34 -64 52 -49 30 -55 37
                            -58 70 -5 55 23 78 93 78 40 0 57 -4 61 -15z m-220 -8 c-17 -12 -17 -20 -7
                            -88 7 -41 15 -89 17 -106 3 -18 12 -37 22 -42 23 -13 16 -17 -40 -25 -32 -5
                            -48 -4 -48 3 0 6 7 11 15 11 12 0 15 7 10 33 -8 47 -25 170 -25 185 0 6 -7 12
                            -15 12 -18 0 -20 16 -2 23 6 3 30 6 51 6 36 1 38 0 22 -12z m355 1 c41 -12 50
                            -24 23 -30 -10 -2 -22 -21 -29 -45 l-13 -42 55 -16 c29 -9 58 -13 63 -10 15 9
                            23 74 11 89 -17 20 -3 25 37 14 51 -14 59 -20 36 -29 -26 -9 -83 -217 -62
                            -230 22 -14 -1 -23 -27 -11 -14 7 -35 12 -45 12 -11 0 -20 5 -20 10 0 6 8 10
                            19 10 14 0 22 12 30 46 6 25 9 49 6 54 -6 10 -70 30 -96 30 -23 0 -45 -86 -28
                            -106 9 -11 7 -14 -12 -14 -13 1 -37 7 -54 15 -29 13 -29 14 -8 20 15 5 26 20
                            33 44 39 146 42 165 31 183 -14 22 -5 23 50 6z m-477 -30 c3 -13 6 -29 6 -35
                            0 -20 -18 -15 -25 7 -3 11 -15 20 -25 20 -28 0 -70 -21 -70 -35 0 -21 22 -75
                            30 -75 22 0 40 14 40 31 0 19 15 26 24 11 2 -4 7 -25 11 -47 6 -36 5 -38 -8
                            -22 -12 14 -20 15 -40 8 -24 -9 -25 -13 -16 -43 6 -18 13 -41 16 -50 3 -10 15
                            -18 26 -18 29 0 11 -15 -36 -30 -38 -12 -63 -6 -39 9 9 5 4 34 -20 114 -25 86
                            -35 107 -50 107 -40 0 -14 18 60 43 97 32 108 32 116 5z m1081 -573 c151 -73
                            245 -248 214 -396 -35 -165 -150 -281 -293 -296 -62 -6 -74 4 -55 46 9 20 24
                            31 55 39 63 17 141 86 178 157 27 53 31 70 30 145 0 72 -4 93 -26 136 -36 68
                            -114 137 -175 155 -26 8 -86 14 -133 13 -75 0 -97 -5 -180 -38 -52 -21 -109
                            -47 -128 -58 -45 -25 -53 -16 -10 10 196 120 390 152 523 87z m-920 -135 c174
                            -55 264 -96 365 -169 85 -62 91 -65 85 -49 -5 13 -41 45 -133 122 -37 30 -41
                            37 -25 42 10 3 28 10 41 15 34 14 40 12 56 -18 8 -16 33 -47 55 -70 38 -39 40
                            -45 35 -85 -6 -41 -3 -47 31 -81 20 -20 44 -37 54 -37 9 0 25 -7 35 -15 11 -8
                            34 -15 50 -16 17 0 52 -6 78 -12 l47 -12 -25 -60 c-14 -33 -29 -85 -35 -115
                            -16 -86 -29 -130 -38 -130 -5 0 -16 17 -24 38 -24 59 -57 83 -154 108 -147 40
                            -257 30 -296 -27 -15 -20 -15 -20 -43 7 -16 15 -47 39 -69 53 -22 14 -66 45
                            -97 69 -31 23 -61 42 -66 42 -5 0 -19 -12 -33 -26 -31 -33 -132 -105 -186
                            -133 -105 -52 -221 -73 -330 -59 -161 22 -294 135 -328 279 -13 56 -13 71 1
                            130 13 57 23 75 67 122 32 33 69 61 95 71 47 18 147 22 157 6 4 -6 -12 -10
                            -42 -10 -113 0 -189 -54 -219 -155 -39 -134 38 -276 185 -343 48 -22 71 -25
                            166 -26 89 -1 123 3 178 22 67 22 175 82 232 127 l29 24 -46 21 c-52 23 -72
                            25 -144 15 -88 -13 -157 37 -258 182 -32 46 -65 87 -74 92 -9 5 -14 12 -10 16
                            3 3 15 1 27 -6 17 -11 28 -10 73 10 127 55 230 72 378 65 52 -3 122 -14 155
                            -24z m-407 -1008 c31 -22 82 -50 112 -63 30 -12 57 -26 60 -30 3 -3 19 -9 35
                            -13 31 -7 33 -10 103 -168 15 -32 29 -58 33 -58 3 0 9 17 12 38 4 20 11 56 15
                            79 7 31 6 45 -4 55 -21 21 241 11 274 -10 33 -22 52 -64 52 -117 0 -99 -59
                            -145 -185 -144 -38 1 -62 3 -52 6 14 4 17 16 16 71 -1 37 -4 92 -7 122 -6 50
                            -9 55 -33 58 -24 3 -27 -1 -33 -35 -16 -92 -48 -223 -55 -223 -4 0 -34 56 -66
                            125 -32 68 -60 123 -63 121 -2 -2 -11 -43 -21 -91 -14 -71 -15 -88 -4 -92 29
                            -11 11 -24 -24 -17 -47 8 -51 11 -30 27 10 7 24 42 32 82 8 39 19 86 24 106 7
                            30 5 40 -10 53 -28 24 -38 20 -55 -19 -8 -20 -28 -65 -44 -101 -32 -68 -37
                            -94 -19 -94 5 0 7 -4 4 -10 -3 -5 -24 0 -50 12 -45 22 -60 42 -28 36 13 -2 28
                            23 64 104 49 111 50 140 2 97 l-26 -24 6 32 c6 29 3 35 -30 58 -40 27 -40 27
                            -72 -27 -22 -37 -22 -37 -2 -48 11 -6 32 -8 47 -4 l26 7 -27 -41 c-26 -39 -51
                            -50 -38 -16 5 13 -21 43 -38 44 -4 0 -19 -19 -34 -42 -22 -33 -25 -45 -17 -59
                            18 -28 1 -30 -30 -4 -16 14 -34 25 -39 25 -5 0 -9 5 -9 10 0 6 6 10 14 10 22
                            0 139 179 132 203 -6 24 8 19 82 -31z m1078 0 c26 -21 36 -56 24 -88 -9 -22
                            -5 -27 43 -54 31 -18 59 -27 71 -24 29 10 14 -19 -17 -30 -22 -8 -35 -4 -80
                            27 -47 30 -57 34 -72 23 -16 -12 -16 -15 6 -54 13 -23 33 -43 44 -44 16 -3 12
                            -9 -23 -32 -41 -28 -66 -30 -44 -3 15 18 -103 211 -124 203 -32 -12 -20 14 19
                            40 90 59 117 66 153 36z m-194 -107 c10 -38 1 -45 -20 -17 -16 20 -21 21 -52
                            11 -50 -17 -53 -22 -39 -68 8 -28 18 -41 30 -41 31 0 49 12 49 31 0 32 16 21
                            33 -23 18 -44 14 -64 -7 -36 -11 15 -18 16 -45 7 -17 -6 -31 -14 -31 -19 0 -8
                            30 -82 35 -89 2 -1 26 4 53 13 46 16 48 18 44 49 -4 29 -3 31 12 17 8 -8 17
                            -26 18 -39 3 -21 -6 -26 -92 -57 -91 -32 -116 -36 -93 -13 8 8 0 42 -25 120
                            -28 84 -40 109 -54 109 -10 0 -18 4 -18 9 0 9 169 70 184 67 6 -1 13 -15 18
                            -31z"/>
                            <path d="M829 1581 c-20 -16 -22 -23 -14 -47 20 -55 116 -36 99 20 -15 50 -45
                            59 -85 27z m41 -37 c0 -8 -4 -12 -10 -9 -5 3 -10 13 -10 21 0 8 5 12 10 9 6
                            -3 10 -13 10 -21z"/>
                            <path d="M1294 398 c3 -29 8 -84 12 -121 l7 -69 34 7 c20 3 44 12 54 18 48 30
                            49 150 2 193 -19 18 -37 24 -71 24 l-44 0 6 -52z"/>
                            <path d="M1775 598 c-11 -6 -22 -12 -24 -14 -6 -5 21 -64 29 -64 4 0 10 -10
                            13 -21 l6 -21 30 22 c37 26 40 60 9 90 -25 23 -35 24 -63 8z"/>
                            </g>
                            </svg>
                            <span class="text-gray-600 dark:text-white text-2xl font-trocchi">
                                <span class="font-semibold text-blue-400">Fish</span> Locator</span>
                        </div>
                    </div>
                    <hr class=" mt-4">
        
                    <nav class="flex flex-col mt-10 text-center">
                        <div class="flex flex-row items-center h-8 ml-4">
                            <div class="text-sm font-light tracking-wide text-gray-600">Menu</div>
                        </div>
                        <a href="{{ route('admin.dashboard') }}" class="relative flex flex-row items-center h-14 text-gray-600 pr-6 hover:text-gray-800 border-l-4 border-transparent hover:border-blue-500 hover:bg-gray-50 @yield('nav')">
                            <span class="inline-flex justify-center items-center ml-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-dashboard w-6 h-6" viewBox="0 0 24 24" stroke-width="1" stroke="#9e9e9e" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <circle cx="12" cy="13" r="2" />
                                    <line x1="13.45" y1="11.55" x2="15.5" y2="9.5" />
                                    <path d="M6.4 20a9 9 0 1 1 11.2 0z" />
                                </svg>
                            </span>
                            <span class="ml-2 text-sm tracking-wide truncate font-mono">Dashboard</span>
                        </a>
                        <div x-data="{ isActive: false, open: false}">
                            <!-- active & hover classes 'bg-blue-100 dark:bg-blue-600' -->
                            <a
                            href="#"
                            @click="$event.preventDefault(); open = !open"
                            class="relative flex flex-row items-center h-14 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-blue-500 pr-6 pl-4 @yield('navFish')"
                            :class="{'bg-blue-100 dark:bg-blue-600 border-blue-500': isActive || open}"
                            role="button"
                            aria-haspopup="true"
                            :aria-expanded="(open || isActive) ? 'true' : 'false'">
                            <span aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-fish w-6 h-6" viewBox="0 0 24 24" stroke-width="1" stroke="#9e9e9e" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M16.69 7.44a6.973 6.973 0 0 0 -1.69 4.56c0 1.747 .64 3.345 1.699 4.571" />
                                    <path d="M2 9.504c7.715 8.647 14.75 10.265 20 2.498c-5.25 -7.761 -12.285 -6.142 -20 2.504" />
                                    <path d="M18 11v.01" />
                                    <path d="M11.5 10.5c-.667 1 -.667 2 0 3" />
                                </svg>
                            </span>
                            <span class="ml-2 text-sm"> Fish </span>
                            <span class="ml-auto" aria-hidden="true">
                                <!-- active class 'rotate-180' -->
                                <svg
                                class="w-4 h-4 transition-transform transform"
                                :class="{ 'rotate-180': open }"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                >
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </span>
                            </a>
                            <div role="menu" x-show="open" class="my-2 space-y-2 px-7" aria-label="Dashboards">
                            <a
                                href="{{ route('admin.add_fish') }}"
                                role="menuitem"
                                class="block p-2 text-sm text-left text-gray-400 transition-colors duration-200 dark:text-gray-400 dark:hover:text-light hover:text-gray-700 border-l-4 border-transparent hover:border-blue-500">
                                Add Fish
                            </a>
                            <a
                                href="{{ route('admin.manage_fish') }}"
                                role="menuitem"
                                class="block p-2 text-sm text-left text-gray-400 transition-colors duration-200 dark:text-gray-400 dark:hover:text-light hover:text-gray-700 border-l-4 border-transparent hover:border-blue-500">
                                Manage Fish
                            </a>
                            </div>
                        </div>
                        <div x-data="{ isActive: false, open: false}">
                            <!-- active & hover classes 'bg-blue-100 dark:bg-blue-600' -->
                            <a
                            href="#"
                            @click="$event.preventDefault(); open = !open"
                            class="relative flex flex-row items-center h-14 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-blue-500 pr-6 pl-4"
                            :class="{'bg-blue-100 dark:bg-blue-600 border-blue-500': isActive || open}"
                            role="button"
                            aria-haspopup="true"
                            :aria-expanded="(open || isActive) ? 'true' : 'false'">
                            <span aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-ripple w-6 h-6" viewBox="0 0 24 24" stroke-width="1" stroke="#9e9e9e" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M3 7c3 -2 6 -2 9 0s6 2 9 0" />
                                    <path d="M3 17c3 -2 6 -2 9 0s6 2 9 0" />
                                    <path d="M3 12c3 -2 6 -2 9 0s6 2 9 0" />
                                </svg>
                            </span>
                            <span class="ml-2 text-sm"> Ports </span>
                            <span class="ml-auto" aria-hidden="true">
                                <!-- active class 'rotate-180' -->
                                <svg
                                class="w-4 h-4 transition-transform transform"
                                :class="{ 'rotate-180': open }"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                >
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </span>
                            </a>
                            <div role="menu" x-show="open" class="my-2 space-y-2 px-7" aria-label="Dashboards">
                            <!-- active & hover classes 'text-gray-700 dark:text-light' -->
                            <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
                            <a
                                href="{{ route('admin.add_port') }}"
                                role="menuitem"
                                class="block p-2 text-sm text-left text-gray-400 transition-colors duration-200 dark:text-gray-400 dark:hover:text-light hover:text-gray-700 border-l-4 border-transparent hover:border-blue-500">
                                Add Port
                            </a>
                            <a
                                href="{{ route('admin.manage_port') }}"
                                role="menuitem"
                                class="block p-2 text-sm text-left text-gray-400 transition-colors duration-200 dark:text-gray-400 dark:hover:text-light hover:text-gray-700 border-l-4 border-transparent hover:border-blue-500">
                                Manage Port
                            </a>
                            </div>
                        </div>
                        <div x-data="{ isActive: false, open: false}">
                            <!-- active & hover classes 'bg-blue-100 dark:bg-blue-600' -->
                            <a
                            href="#"
                            @click="$event.preventDefault(); open = !open"
                            class="relative flex flex-row items-center h-14 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-blue-500 pr-6 pl-4"
                            :class="{'bg-blue-100 dark:bg-blue-600 border-blue-500': isActive || open}"
                            role="button"
                            aria-haspopup="true"
                            :aria-expanded="(open || isActive) ? 'true' : 'false'">
                            <span aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-archive w-6 h-6" viewBox="0 0 24 24" stroke-width="1" stroke="#9e9e9e" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <rect x="3" y="4" width="18" height="4" rx="2" />
                                    <path d="M5 8v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-10" />
                                    <line x1="10" y1="12" x2="14" y2="12" />
                                </svg>
                            </span>
                            <span class="ml-2 text-sm"> Records </span>
                            <span class="ml-auto" aria-hidden="true">
                                <!-- active class 'rotate-180' -->
                                <svg
                                class="w-4 h-4 transition-transform transform"
                                :class="{ 'rotate-180': open }"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                >
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </span>
                            </a>
                            <div role="menu" x-show="open" class="my-2 space-y-2 px-7" aria-label="Dashboards">
                            <!-- active & hover classes 'text-gray-700 dark:text-light' -->
                            <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
                            <a
                                href="{{ route('admin.add_record') }}"
                                role="menuitem"
                                class="block p-2 text-sm text-left text-gray-400 transition-colors duration-200 dark:text-gray-400 dark:hover:text-light hover:text-gray-700 border-l-4 border-transparent hover:border-blue-500">
                                Add Record
                            </a>
                            <a
                                href="{{ route('admin.manage_record') }}"
                                role="menuitem"
                                class="block p-2 text-sm text-left text-gray-400 transition-colors duration-200 dark:text-gray-400 dark:hover:text-light hover:text-gray-700 border-l-4 border-transparent hover:border-blue-500">
                                Manage Records
                            </a>
                            </div>
                        </div>
                        <div class="flex flex-row items-center h-8 ml-4">
                            <div class="text-sm font-light tracking-wide text-gray-600">Settings</div>
                        </div>
                        <a href="{{ route('admin.settings') }}" class="relative flex flex-row items-center h-14 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-blue-500 pr-6">
                            <span class="inline-flex justify-center items-center ml-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-settings w-6 h-6" viewBox="0 0 24 24" stroke-width="1" stroke="#9e9e9e" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" />
                                    <circle cx="12" cy="12" r="3" />
                                </svg>
                            </span>
                            <span class="ml-2 text-sm tracking-wide truncate font-mono">Settings</span>
                        </a>
                    </nav>
                </div>
        
                <div class="flex-1 flex flex-col overflow-hidden">
                    <header class="flex justify-between items-center p-6 border-b-2 border-gray-300">
                        <div class="flex items-center space-x-4 lg:space-x-0">
                            <button @click="sidebarOpen = true"
                                class="text-gray-500 dark:text-gray-300 focus:outline-none lg:hidden">
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
        
                            <div>
                                <h1 class="text-2xl font-medium text-gray-800 dark:text-white font-nunito">
                                    {{ request()->is('admin/dashboard') ? 'Dashboard' : (request()->is('admin/fish/add') ? 'Add Fish' : (request()->is('admin/port/add') ? 'Add Port' : (request()->is('admin/record/add') ? 'Add Record' : (request()->is('admin/fish/manage') ? 'Manage Fish' : (request()->is('admin/port/manage') ? 'Manage Port' : (request()->is('admin/record/manage') ? 'Manage Record' : (request()->is('admin/settings') ? 'Settings' : (request()->is('admin/fish/manage/edit/*') ? 'Edit Fish' : '')))))))) }}</h1>
                            </div>
                        </div>
        
                        <div class="flex items-center space-x-4">
        
                            <div x-data="{ dropdownOpen: false }" class="relative">
                                <button @click="dropdownOpen = ! dropdownOpen"
                                    class="flex items-center space-x-2 relative focus:outline-none">
                                    <h2 class="text-gray-700 dark:text-gray-300 text-sm hidden sm:block">Logged in as {{ auth()->user()->name }} <span class="inline">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down h-5 w-5 inline"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                    </span></h2>
                                </button>
        
                                <div class="absolute right-0 mt-2 w-48 bg-white rounded-md overflow-hidden shadow-xl z-10"
                                    x-show="dropdownOpen" x-transition:enter="transition ease-out duration-100 transform"
                                    x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                                    x-transition:leave="transition ease-in duration-75 transform"
                                    x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                                    @click.away="dropdownOpen = false">
                                    <livewire:auth.logout/>
                                </div>
                            </div>
                        </div>
                    </header>
        
                    <main class="flex-1 overflow-x-hidden overflow-y-auto font-nunito">
                        <div class="container mx-auto px-6 py-8">
                            <nav aria-label="breadcrumb" class="w-full p-4 bg-white my-4 rounded-md">
                                <ol class="flex h-8 space-x-2">
                                    {!! request()->is('admin/dashboard') ? '
                                    <li class="flex items-center">
                                        <a rel="noopener noreferrer" href="/admin/dashboard" title="Back to homepage" class="hover:underline">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 pr-1 dark:text-coolGray-400">
                                                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="flex items-center space-x-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" aria-hidden="true" fill="currentColor" class="w-2 h-2 mt-1 transform rotate-90 fill-current dark:text-coolGray-600">
                                            <path d="M32 30.031h-32l16-28.061z"></path>
                                        </svg>
                                        <a rel="noopener noreferrer" href="#" class="flex items-center px-1 capitalize hover:underline hover:no-underline cursor-default">Dashboard</a>
                                    </li>
                                    ' : (request()->is('admin/fish/add') ? '
                                    <li class="flex items-center">
                                        <a rel="noopener noreferrer" href="/admin/dashboard" title="Back to homepage" class="hover:underline">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 pr-1 dark:text-coolGray-400">
                                                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="flex items-center space-x-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" aria-hidden="true" fill="currentColor" class="w-2 h-2 mt-1 transform rotate-90 fill-current dark:text-coolGray-600">
                                            <path d="M32 30.031h-32l16-28.061z"></path>
                                        </svg>
                                        <a rel="noopener noreferrer" href="#" class="flex items-center px-1 capitalize hover:underline hover:no-underline cursor-default">Fish</a>
                                    </li>
                                    <li class="flex items-center space-x-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" aria-hidden="true" fill="currentColor" class="w-2 h-2 mt-1 transform rotate-90 fill-current dark:text-coolGray-600">
                                            <path d="M32 30.031h-32l16-28.061z"></path>
                                        </svg>
                                        <a rel="noopener noreferrer" href="#" class="flex items-center px-1 capitalize hover:underline hover:no-underline cursor-default">Add Fish</a>
                                    </li>' : (request()->is('admin/port/add') ? '
                                    <li class="flex items-center">
                                        <a rel="noopener noreferrer" href="/admin/dashboard" title="Back to homepage" class="hover:underline">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 pr-1 dark:text-coolGray-400">
                                                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="flex items-center space-x-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" aria-hidden="true" fill="currentColor" class="w-2 h-2 mt-1 transform rotate-90 fill-current dark:text-coolGray-600">
                                            <path d="M32 30.031h-32l16-28.061z"></path>
                                        </svg>
                                        <a rel="noopener noreferrer" href="#" class="flex items-center px-1 capitalize hover:underline hover:no-underline cursor-default">Port</a>
                                    </li>
                                    <li class="flex items-center space-x-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" aria-hidden="true" fill="currentColor" class="w-2 h-2 mt-1 transform rotate-90 fill-current dark:text-coolGray-600">
                                            <path d="M32 30.031h-32l16-28.061z"></path>
                                        </svg>
                                        <a rel="noopener noreferrer" href="#" class="flex items-center px-1 capitalize hover:underline hover:no-underline cursor-default">Add Port</a>
                                    </li>' : (request()->is('admin/record/add') ? '
                                    <li class="flex items-center">
                                        <a rel="noopener noreferrer" href="/admin/dashboard" title="Back to homepage" class="hover:underline">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 pr-1 dark:text-coolGray-400">
                                                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="flex items-center space-x-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" aria-hidden="true" fill="currentColor" class="w-2 h-2 mt-1 transform rotate-90 fill-current dark:text-coolGray-600">
                                            <path d="M32 30.031h-32l16-28.061z"></path>
                                        </svg>
                                        <a rel="noopener noreferrer" href="#" class="flex items-center px-1 capitalize hover:underline hover:no-underline cursor-default">Records</a>
                                    </li>
                                    <li class="flex items-center space-x-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" aria-hidden="true" fill="currentColor" class="w-2 h-2 mt-1 transform rotate-90 fill-current dark:text-coolGray-600">
                                            <path d="M32 30.031h-32l16-28.061z"></path>
                                        </svg>
                                        <a rel="noopener noreferrer" href="#" class="flex items-center px-1 capitalize hover:underline hover:no-underline cursor-default">Add Record</a>
                                    </li>' : (request()->is('admin/fish/manage') ? '
                                    <li class="flex items-center">
                                        <a rel="noopener noreferrer" href="/admin/dashboard" title="Back to homepage" class="hover:underline">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 pr-1 dark:text-coolGray-400">
                                                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="flex items-center space-x-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" aria-hidden="true" fill="currentColor" class="w-2 h-2 mt-1 transform rotate-90 fill-current dark:text-coolGray-600">
                                            <path d="M32 30.031h-32l16-28.061z"></path>
                                        </svg>
                                        <a rel="noopener noreferrer" href="#" class="flex items-center px-1 capitalize hover:underline hover:no-underline cursor-default">Fish</a>
                                    </li>
                                    <li class="flex items-center space-x-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" aria-hidden="true" fill="currentColor" class="w-2 h-2 mt-1 transform rotate-90 fill-current dark:text-coolGray-600">
                                            <path d="M32 30.031h-32l16-28.061z"></path>
                                        </svg>
                                        <a rel="noopener noreferrer" href="#" class="flex items-center px-1 capitalize hover:underline hover:no-underline cursor-default">Manage Fish</a>
                                    </li>' : (request()->is('admin/port/manage') ? '
                                    <li class="flex items-center">
                                        <a rel="noopener noreferrer" href="/admin/dashboard" title="Back to homepage" class="hover:underline">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 pr-1 dark:text-coolGray-400">
                                                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="flex items-center space-x-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" aria-hidden="true" fill="currentColor" class="w-2 h-2 mt-1 transform rotate-90 fill-current dark:text-coolGray-600">
                                            <path d="M32 30.031h-32l16-28.061z"></path>
                                        </svg>
                                        <a rel="noopener noreferrer" href="#" class="flex items-center px-1 capitalize hover:underline hover:no-underline cursor-default">Port</a>
                                    </li>
                                    <li class="flex items-center space-x-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" aria-hidden="true" fill="currentColor" class="w-2 h-2 mt-1 transform rotate-90 fill-current dark:text-coolGray-600">
                                            <path d="M32 30.031h-32l16-28.061z"></path>
                                        </svg>
                                        <a rel="noopener noreferrer" href="#" class="flex items-center px-1 capitalize hover:underline hover:no-underline cursor-default">Manage Port</a>
                                    </li>' : (request()->is('admin/record/manage') ? '
                                    <li class="flex items-center">
                                        <a rel="noopener noreferrer" href="/admin/dashboard" title="Back to homepage" class="hover:underline">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 pr-1 dark:text-coolGray-400">
                                                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="flex items-center space-x-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" aria-hidden="true" fill="currentColor" class="w-2 h-2 mt-1 transform rotate-90 fill-current dark:text-coolGray-600">
                                            <path d="M32 30.031h-32l16-28.061z"></path>
                                        </svg>
                                        <a rel="noopener noreferrer" href="#" class="flex items-center px-1 capitalize hover:underline hover:no-underline cursor-default">Records</a>
                                    </li>
                                    <li class="flex items-center space-x-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" aria-hidden="true" fill="currentColor" class="w-2 h-2 mt-1 transform rotate-90 fill-current dark:text-coolGray-600">
                                            <path d="M32 30.031h-32l16-28.061z"></path>
                                        </svg>
                                        <a rel="noopener noreferrer" href="#" class="flex items-center px-1 capitalize hover:underline hover:no-underline cursor-default">Manage Record</a>
                                    </li>' : (request()->is('admin/settings') ? '
                                    <li class="flex items-center">
                                        <a rel="noopener noreferrer" href="/admin/dashboard" title="Back to homepage" class="hover:underline">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 pr-1 dark:text-coolGray-400">
                                                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="flex items-center space-x-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" aria-hidden="true" fill="currentColor" class="w-2 h-2 mt-1 transform rotate-90 fill-current dark:text-coolGray-600">
                                            <path d="M32 30.031h-32l16-28.061z"></path>
                                        </svg>
                                        <a rel="noopener noreferrer" href="#" class="flex items-center px-1 capitalize hover:underline hover:no-underline cursor-default">Settings</a>
                                    </li>' : (request()->is('admin/fish/manage/edit/*') ? '
                                    <li class="flex items-center">
                                        <a rel="noopener noreferrer" href="/admin/dashboard" title="Back to homepage" class="hover:underline">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 pr-1 dark:text-coolGray-400">
                                                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="flex items-center space-x-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" aria-hidden="true" fill="currentColor" class="w-2 h-2 mt-1 transform rotate-90 fill-current dark:text-coolGray-600">
                                            <path d="M32 30.031h-32l16-28.061z"></path>
                                        </svg>
                                        <a rel="noopener noreferrer" href="#" class="flex items-center px-1 capitalize hover:underline hover:no-underline cursor-default">Fish</a>
                                    </li>
                                    <li class="flex items-center space-x-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" aria-hidden="true" fill="currentColor" class="w-2 h-2 mt-1 transform rotate-90 fill-current dark:text-coolGray-600">
                                            <path d="M32 30.031h-32l16-28.061z"></path>
                                        </svg>
                                        <a rel="noopener noreferrer" href="/admin/fish/manage" class="flex items-center px-1 capitalize hover:underline hover:no-underline cursor-pointer">Manage Fish</a>
                                    </li>
                                    <li class="flex items-center space-x-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" aria-hidden="true" fill="currentColor" class="w-2 h-2 mt-1 transform rotate-90 fill-current dark:text-coolGray-600">
                                            <path d="M32 30.031h-32l16-28.061z"></path>
                                        </svg>
                                        <a rel="noopener noreferrer" href="#" class="flex items-center px-1 capitalize hover:underline hover:no-underline cursor-default">Edit Fish</a>
                                    </li>' : '')))))))) !!}
                                </ol>
                            </nav>
                            <div
                                class="text-gray-500 dark:text-gray-300 text-xl border-t-2 border-blue-500 h-96">
                                {{ $slot }}
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </div>
    @livewireScripts
    
    @yield('scripts')
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
</body>
</html>