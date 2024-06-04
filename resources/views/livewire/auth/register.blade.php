<div>
    <div>
        @vite('resources/css/app.css')
        <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
              <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
              <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Register For More Benefits</h2>
            </div>
          
            <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
              <form class="space-y-6" wire:submit="register" method="POST">
                <div>
                    <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
                    <div class="mt-2">
                      <input id="name" name="name" wire:model="name" type="text" required class="block outline-none w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                    @error('name')
                    <div class="text-red-500">
                      {{$message}}
                    </div>
                    @enderror
                  </div>
                <div>
                  <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                  <div class="mt-2">
                    <input id="email" name="email" wire:model="email" type="email" autocomplete="email" required class="block outline-none w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                  </div>
                  @error('email')
                  <div class="text-red-500">
                    {{$message}}
                  </div>
                  @enderror
                  @if(session()->has('error'))
                  <div class="text-red-500">
                      {{session()->get('error')}}
                  </div>
                  @endif
                </div>
          
                <div>
                  <div class="flex items-center justify-between">
                    <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                  </div>
                  <div class="mt-2">
                    <input id="password" name="password" wire:model="password" type="password" autocomplete="current-password" required class="block outline-none w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                  </div>
                  @error('password')
                  <div class="text-red-500">
                    {{$message}}
                  </div>
                  @enderror
                </div>
          
                <div>
                    <button type="submit" class="flex w-full justify-center rounded-md bg-blue-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign up</button>
                    <a href="{{route('redirect')}}" class="flex  justify-center rounded-md ring-1 ring-blue-300 px-3 py-1.5 text-sm font-semibold leading-6 shadow-sm hover:shadow-gray-950 mt-3">Sing Up With Google</a>
                    <p class="mt-2">Already Have Account?<a href="{{route("login")}}" class="text-blue-600 hover:text-blue-800"> Sing In</a></p>
                </div>
              </form>
            </div>
          </div>
    </div>
    
</div>
