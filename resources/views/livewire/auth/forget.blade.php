<div>
    @extends('components.template')
    @section('title','Reset Password')
    @section('content')
    @if (session('status'))
        <div class="text-green-500" role="alert">
            {{ session('status') }}
        </div>
        @endif
    <form method="POST" action="{{route('password.email')}}" class="max-w-sm mx-auto mt-10">
        @csrf
        <div class="mb-5">
          <label for="email" class="block mb-2 font-medium text-gray-900 ">Email Address</label>
          <input type="email" name="email" value="{{old('email')}}" id="email" class="shadow-sm @error('email') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"  required />
        </div>
        @error('email')
        <div class="alert alert-danger mt-2">
            <strong>{{ $message }}</strong>
        </div>
        @enderror
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Send Reset Password</button>
      </form>
    {{-- <div class="card-body">
        
  
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div>
                <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                    placeholder="Masukkan Alamat Email">

                @error('email')
                <div class="alert alert-danger mt-2">
                    <strong>{{ $message }}</strong>
                </div>
                @enderror
              </div>

              <button type="submit" class="flex w-full justify-center rounded-md bg-blue-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Send Reset Password</button>
        </form>
    </div> --}}
</div>
@endsection