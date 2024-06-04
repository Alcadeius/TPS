<div>
    @extends('components.template')
    @section('title','Change Password')
    
    @section('content')
    <h2>Change Password</h2>
    
    <form method="POST" action="{{ route('password.update') }}">
        @csrf
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
      </form>
    @endsection
</div>
