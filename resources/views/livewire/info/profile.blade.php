<div>   
 <aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
       <ul class="space-y-2 font-medium">
        <li>
            <div class="grid grid-flow-col gap-2 text-white">
                <div class="row-span-2">
                    <img class="max-w-14 rounded-full" src="{{Auth::user()->profile ? asset('storage/storage/'.Auth::user()->profile) : asset('storage/icondef.jpg')}}">
                </div>
                <div class="row-span-3">
                    <span class="text-sm">{{Auth::user()->name}} </span>
                    <p class="text-sm">{{Auth::user()->email}} </p>
                </div>
            </div>
        </li>
          <li>
             <a href="{{route("dashboard")}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                   <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                   <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
                </svg>
                <span class="ms-3">Dashboard</span>
             </a>
          </li>
          <li>
             <a href="{{route("profile")}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                   <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
                </svg>
                <span class="flex-1 ms-3 whitespace-nowrap">Users</span>
             </a>
          </li>
          <li>
            <a href="{{route("data")}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                  <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                  <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
               </svg>
               <span class="ms-3">Post</span>
            </a>
         </li>
          <li>
             <a href="{{route("logout")}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                   <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3"/>
                </svg>
                <span class="flex-1 ms-3 whitespace-nowrap">Logout</span>
             </a>
          </li>
       </ul>
    </div>
 </aside>
 
 <div class="p-4 sm:ml-64">
    <div class="p-4 rounded-lg">
       <div class="grid grid-cols-2 gap-4 mb-4">
          <div class="flex flex-col">
             <p class="text-xl font-mono">
                  Profile Photo
             </p>
             <p><img class="w-1/4" src="{{Auth::user()->profile ? asset('storage/storage/'.Auth::user()->profile) : asset('storage/icondef.jpg') }}" alt=""> </p>
          </div>
          <div class="flex mt-9 items-center justify-end ">
            <button onclick="document.getElementById('fileInput').click();" class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white ">
               <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white text-black hover:text-white rounded-md group-hover:bg-opacity-0">
                     <input type="file" id="fileInput" class="hidden" wire:model.live="profile">
                     @error('image')
                     <span>{{ $message }}</span> 
                      @enderror 
                      Change Photo

                      <button type="button" wire:click="poto({{Auth::user()->id}})" class="text-white bg-blue-700 hover:bg-blue-800  font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Save</button>
               </span>
            </button>
            <button wire:click="disaper({{Auth::user()->id}})" class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-pink-500 to-orange-400 group-hover:from-pink-500 group-hover:to-orange-400 hover:text-white">
               <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white text-black hover:text-white  rounded-md group-hover:bg-opacity-0">
               Delete Photo
               </span>
               </button>
          </div>
          <div class="flex flex-col mt-3">
            <p class="text-xl font-mono">
               Name
            </p>
            @if($editname==false)
           <p> {{Auth::user()->name}} </p>
           @else
           <div class="">
              <input type="text" autofocus id="name" wire:model.live="name" value="{{Auth::user()->name}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
           </div> 
           @error('name')
           <div class="text-red-500">
             {{$message}}
           </div>
           @enderror
           @endif
        </div>
         <div class="flex items-center justify-center mt-3 ">
           @if($editname==false)
           <button wire:click="change()" class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white">
              <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white text-black hover:text-white rounded-md group-hover:bg-opacity-0">
              Edit
              </span>
           </button>
           @else
           <div class="mt-7">
              <button type="button" wire:click="save({{Auth::user()->id}})" class="text-white bg-blue-700 hover:bg-blue-800  font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Save</button>
              <button type="button" wire:click="cancelname()" class="text-white bg-gray-600 hover:bg-gray-500  font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Cancel</button>
           </div>
           @endif
         </div>
          <div class="flex flex-col mt-3">
             <p class="text-xl font-mono">
                Email
               </p>
               @if($toggleEdit==false)
            <p> {{Auth::user()->email}} </p>
            @else
            <div class="">
               <input type="email" autofocus id="email" wire:model.live="email" value="{{Auth::user()->email}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
            </div> 
            @error('email')
            <div class="text-red-500">
              {{$message}}
            </div>
            @enderror
            @endif
         </div>
          <div class="flex items-center justify-center mt-3 ">
            @if($toggleEdit==false)
            <button wire:click="edit()" class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white">
               <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white text-black hover:text-white rounded-md group-hover:bg-opacity-0">
               Edit
               </span>
            </button>
            @else
            <div class="mt-7">
               <button type="button" wire:click="submit({{Auth::user()->id}})" class="text-white bg-blue-700 hover:bg-blue-800  font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Save</button>
               <button type="button" wire:click="cancel()" class="text-white bg-gray-600 hover:bg-gray-500  font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Cancel</button>
            </div>
            @endif
          </div>
       </div>
    </div>
 </div>
</div>
