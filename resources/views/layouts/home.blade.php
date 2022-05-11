<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://d19vzq90twjlae.cloudfront.net/leaflet-0.7/leaflet.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.css" />
    <script src="https://d19vzq90twjlae.cloudfront.net/leaflet-0.7/leaflet.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Proza+Libre&display=swap" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>


    <title>Fish Finder | BFAR Region 10</title>
</head>
<body>
<div class="scrolly">
  <header>
    <div class="w-full text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800">
      <div x-data="{ open: false }" class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
        <div class="p-4 flex flex-row items-center justify-between">
          <a href="#" class="text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline"><span class="text-blue-500">Fish</span> Finder.</a>
          <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
            <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
              <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
              <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
          </button>
        </div>
        <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-end md:flex-row">
          <a class="{{ request()->is('/') ? 'px-4 py-2 mt-2 text-sm font-semibold text-white bg-blue-500 rounded-lg md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-blue-200 focus:outline-none focus:shadow-outline' : 'px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 md:ml-4 hover:text-white focus:text-gray-900 hover:bg-blue-500 focus:bg-gray-200 focus:outline-none focus:shadow-outline' }}" href="{{ route('user.home') }}">Home</a>
          <a class="{{ request()->is('fish/profiles') || request()->is('fish/profiles/*') || request()->is('fish/profiles?*') ? 'px-4 py-2 mt-2 text-sm font-semibold text-white bg-blue-500 rounded-lg md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-blue-200 focus:outline-none focus:shadow-outline' : 'px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 md:ml-4 hover:text-white focus:text-gray-900 hover:bg-blue-500 focus:bg-gray-200 focus:outline-none focus:shadow-outline' }}" href="{{ route('user.fish_profiles') }}">Fish Profile</a>
          <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 md:ml-4 hover:text-white focus:text-gray-900 hover:bg-blue-500 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#aboutUs">About Us</a>
          <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 md:ml-4 hover:text-white focus:text-gray-900 hover:bg-blue-500 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#contactUs">Contact Us</a>
        </nav>
      </div>
    </div>
  </header>
    
  <main class="{{ request()->is('fish/profiles') ? 'w-full' : '' }}">
      {{ $slot }}
  </main>

  <footer class="text-gray-600 body-font mt-auto">
    <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
      <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
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
        <span class="ml-3 text-xl">Fish Finder</span>
      </a>
      <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">© 2020 FishFinder —
        <a href="https://twitter.com/bfar" class="text-gray-600 ml-1" rel="noopener noreferrer" target="_blank">@bfar</a>
      </p>
      <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
        <a class="text-gray-500">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
            <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
            <circle cx="4" cy="4" r="2" stroke="none"></circle>
          </svg>
        </a>
      </span>
    </div>
  </footer>

</div>

<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
</body>
</html>