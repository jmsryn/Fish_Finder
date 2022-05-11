<div class="bg-white shadow-md rounded p-4"> 
    <div>
        <h2 class=" text-xl pb-4 text-black">Profile</h2>
    </div>
    <hr>
    <div class="flex flex-col p-4">
        <div class="flex gap-2 my-10">
            <div class="w-2/5">
                <h2 class="text-md">Profile Information</h2>
                <p class="text-sm">Update your account's profile information and email address.</p>
            </div>
            <div class="bg-white shadow-lg w-3/5 p-4 flex flex-col rounded-md">
                <div class="flex flex-col p-2">
                    <label for="" class="text-sm">Name</label>
                    <input type="text" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-100 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300" wire:model.defer="name">
                </div>
                <div class="flex flex-col p-2">
                    <label for="" class="text-sm">Email</label>
                    <input type="text" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-100 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300" wire:model.defer="email">
                </div>
                <div class="flex justify-end mr-2">
                    <button class="inline-flex items-center px-8 py-3 text-white bg-blue-600 border border-blue-600 rounded hover:bg-transparent hover:text-blue-600 active:text-blue-500 focus:outline-none focus:ring" wire:click="saveProfile"><span class="text-sm font-medium">
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
        <hr>
        <div class="flex gap-2 my-10">
            <div class="w-2/5">
                <h2 class="text-md">Update Password</h2>
                <p class="text-sm">Ensure your account is using a long, random password to stay secure.</p>
            </div>
            <div class="bg-white shadow-md border-1 w-3/5 p-4 flex flex-col rounded-md">
                <div class="flex flex-col p-2">
                    <label for="" class="text-sm">Current Password</label>
                    <input type="password" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-100 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300" wire:model.defer="currentPassword">
                    @error('currentPassword')
                        <span class="text-red-500 text-sm">* {{ $message }}</span>
                    @enderror
                    @if ($currentPass)
                        <span class="text-red-500 text-sm">* Current password does not match.</span>
                    @else
                        <span></span>
                    @endif
                </div>
                <div class="flex flex-col p-2">
                    <label for="" class="text-sm">New Password</label>
                    <input type="password" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-100 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300" wire:model.defer="newPassword">
                    @error('newPassword')
                        <span class="text-red-500 text-sm">* {{ $message }}</span>
                    @enderror
                </div>
                <div class="flex flex-col p-2">
                    <label for="" class="text-sm">Confirm Password</label>
                    <input type="password" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-100 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300" wire:model.defer="confirmPassword">
                    @error('confirmPassword')
                        <span class="text-red-500 text-sm">* {{ $message }}</span>
                    @enderror
                </div>
                <div class="flex justify-end mr-2">
                    <button class="inline-flex items-center px-8 py-3 text-white bg-blue-600 border border-blue-600 rounded hover:bg-transparent hover:text-blue-600 active:text-blue-500 focus:outline-none focus:ring" wire:click="savePassword"><span class="text-sm font-medium">
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
        <hr>
        <div class="flex gap-2 my-10">
            <div class="w-2/5">
                <h2 class="text-md">Delete Account</h2>
                <p class="text-sm">Permanently delete your account.</p>
            </div>
            <div class="bg-white shadow-md border-1 w-3/5 p-4 flex flex-col rounded-md">
                <p class="text-sm py-4">Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.</p>
                <div class="flex justify-start mr-2">
                    <button class="inline-flex items-center px-8 py-3 text-white bg-red-600 border border-red-600 rounded hover:bg-transparent hover:text-red-600 active:text-red-500 focus:outline-none focus:ring" onClick="deleteMarker()" wire:click="deleteAccount"  ><span class="text-sm font-medium">
                        Delete Account &nbsp;</span>
                    
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash hover:text-red-600" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <line x1="4" y1="7" x2="20" y2="7" />
                            <line x1="10" y1="11" x2="10" y2="17" />
                            <line x1="14" y1="11" x2="14" y2="17" />
                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                        </svg></button>
                </div>
            </div>
        </div>
    </div>
</div>
