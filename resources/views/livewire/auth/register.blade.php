<section class="w-full">
    <div class="flex flex-col justify-center min-h-screen py-12 sm:px-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <h2 class="mt-6 text-3xl font-extrabold text-center text-neutral-600">Create fish finder account.</h2>
        </div>
        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="px-4 py-8 sm:px-10">
            @if (session('error'))
                <div class="bg-red-100 rounded-lg py-5 px-6 mb-3 text-base text-red-700 inline-flex items-center w-full" role="alert">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times-circle" class="w-4 h-4 mr-2 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z"></path>
                    </svg>
                    {{ session('error') }}
                </div>
            @endif
            <form wire:submit.prevent="register">
            <div>
                <div class="flex -mx-3">
                    <div class="w-full px-3 mb-5">
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-2"> Name </label>
                        <div class="flex">
                            <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-account text-gray-400 text-lg"></i></div>
                            <input type="text" class="w-full -ml-10 pl-10 pr-3 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-blue-300" placeholder="John Doe" wire:model.defer="name">
                        </div>
                        @error('name')
                            <span class="block text-red-500 text-sm mt-2">* {{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div>
                <div class="flex -mx-3">
                    <div class="w-full px-3 mb-5">
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-2"> Email </label>
                        <div class="flex">
                            <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-email-outline text-gray-400 text-lg"></i></div>
                            <input type="email" class="w-full -ml-10 pl-10 pr-3 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-blue-300" placeholder="johndoe@example.com" wire:model.defer="email">
                        </div>
                        @error('email')
                            <span class="block text-red-500 text-sm mt-2">* {{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
    
            <div>
                <div class="flex -mx-3">
                    <div class="w-full px-3 mb-5">
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-2"> Password </label>
                        <div class="flex">
                            <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-lock-outline text-gray-400 text-lg"></i></div>
                            <input type="password" class="w-full -ml-10 pl-10 pr-3 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-blue-300" placeholder="**********" wire:model.defer="password">
                        </div>
                        @error('password')
                            <span class="block text-red-500 text-sm mt-2">* {{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
    
            <div>
                <button type="submit" class="flex items-center justify-center w-full px-10 py-4 text-base font-medium text-center text-white transition duration-500 ease-in-out transform bg-blue-600 rounded-xl hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Sign Up</button>
            </div>
            </form>
            <div class="flex justify-center items-center mt-6">
                <a href="{{ route('admin.login') }}" class="inline-flex items-center font-bold text-blue-500 hover:text-blue-700 text-xs text-center">
                    <span>
                    <i class="mdi mdi-login text-blue-400 text-lg"></i>
                    </span>
                    <span class="ml-2">Already have an account?</span>
                </a>
            </div>
        </div>
        </div>
    </div>
    </section>