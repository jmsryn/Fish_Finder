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
<section class="w-full flex justify-center">
  <div class="w-4/5 p-4 mt-10 h-full">
    <h1 class="text-2xl mb-4">Fish Profiles</h1>
    @if ($search)
    <h1 class="mb-6"><i>You search: <span class="font-bold">{{ $search }}</span></i></h1>
    @endif
    <hr>
    <div class="my-6">
      <h1><i>Top Fishes</i></h1>
      <div class="flex p-4 h-full flex-wrap justify-start gap-10">
        @if ($topFish->count())
        @foreach ($topFish as $fish)
        <div div class="flex justify-center w-44 h-52">
          <div class="rounded-lg shadow-lg bg-white w-full">
            <a href="{{ route('user.fish_map', $fish->fish_id) }}" data-mdb-ripple="true" data-mdb-ripple-color="light">
              <img class="rounded-t-lg h-24 w-full" src="{{ url('/storage/'. $fish->image) }}" alt=""/>
            </a>
            <div class="p-4 h-56">
              <h5 class="text-gray-900 text-md mb-2">{{ $fish->fish_name }}</h5>
              <a href="{{ route('user.fish_map', $fish->fish_id) }}" class=" inline-block px-4 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">View Details</a>
            </div>
          </div>
        </div>
        @endforeach
        @else
          <p class="font-bold">No records</p>
        @endif
      </div>
    </div>
    <div class="my-6">
      <h1><i>Fishes</i></h1>
      <div class="flex p-4 h-full flex-wrap justify-start gap-10">
        @if ($fishes->count())
          @foreach ($fishes as $fish)
          <div div class="flex justify-center w-44 h-52">
            <div class="rounded-lg shadow-lg bg-white w-full">
              <a href="{{ route('user.fish_map', $fish->fish_id) }}" data-mdb-ripple="true" data-mdb-ripple-color="light">
                <img class="rounded-t-lg h-24 w-full" src="{{ url('/storage/'. $fish->image) }}" alt=""/>
              </a>
              <div class="p-4 h-56">
                <h5 class="text-gray-900 text-md mb-2">{{ $fish->fish_name }}</h5>
                <a href="{{ route('user.fish_map', $fish->fish_id) }}" class=" inline-block px-4 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">View Details</a>
              </div>
            </div>
          </div>
          @endforeach
          @else
            <p class="font-bold">No records</p>
          @endif
      </div>
    </div>
    
</div>
</section>