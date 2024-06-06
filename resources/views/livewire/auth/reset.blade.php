<div>
    @extends('components.template')
    @section('title','Change Password')
    
    @section('content')
<form method="POST" action="{{route('password.update')}}" class="max-w-sm mx-auto">
  @csrf
 <input type="hidden" name="token" value="{{$request->route('token')}}"/>
 @if($request->route('token')==null)
          @php(redirect('forget'))
  @endif()
  <div class="mb-5">
    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your email</label>
    <input type="email" name="email" id="email" value="{{old('email',$request->email)}} " class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="name@flowbite.com" required />
  </div>
  @error('email')
          <span class="text-danger">
              {{$message}}
          </span>
  @enderror
  <div class="mb-5">
    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 ">Your password</label>
    <input type="password" name="password" id="password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />
  </div>
  @error('password')
          <span class="text-danger">
              {{$message}}
          </span>
  @enderror
  <div class="mb-5">
    <label for="repeat-password" class="block mb-2 text-sm font-medium text-gray-900 ">Repeat password</label>
    <input type="password" name="password_confirmation" id="repeat-password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />
  </div>
  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Confirm</button>
</form>

    {{-- <form method="POST" action="{{ route('password.update') }}"> --}}
        {{-- @csrf
        <input type="hidden" name="token" value="{{$request->route('token')}} ">
        @if($request->route('token')==null)
          @php(redirect('forget'))
        @endif()
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('email',$request->email)}} ">
          @error('email')
          <span class="text-danger">
              {{$message}}
          </span>
          @enderror
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" name="password" id="exampleInputPassword1" required>
          @error('password')
          <span class="text-danger">
              {{$message}}
          </span>
          @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Konfirmasi Password</label>
            <input type="password" class="form-control" name="password_confirmation" id="exampleInputPassword1" required>
          </div>
        <button type="submit" class="btn btn-primary">Reset Password</button>
      </form> --}}
    @endsection
</div>
