@extends('layouts.app')

@section('content')

<section class=" mb-10">

 
    <div class="text-center w-full">
        
      </div>
      <div class="max-w-screen-lg mt-24 mb-20 px-8 md:px-12 lg:px-16 xl:px-32 py-16 mx-auto bg-gray-100 text-gray-900 rounded-lg shadow-lg">
        <div class="flex flex-col justify-between">
       
     
        </div>





        <div class="">

          <form method="POST" action="{{ route('register') }}">@csrf

            <div class="mt-8 {{ $errors->has('name') ? 'has-error' : '' }}">
                <span class="uppercase text-sm font-title text-gray-600 font-bold">Name</span>
                <input class="w-full ring-sec focus:ring-1 bg-gray-300 text-gray-900 mt-2 p-3 bg-our-bg rounded-lg focus:outline-none focus:shadow-outline"
                  type="text" name="name" placeholder="Name">
                  <span class="text-red-700 bg-red-600 bg-opacity-20 text-xs  rounded">{{ $errors->first('name') }}</span>
              </div>
        
          <div class=" {{ $errors->has('email') ? 'has-error' : '' }}">
            <span class="uppercase text-sm font-title text-gray-600 font-bold">Email</span>
            <input class="w-full ring-sec focus:ring-1 bg-gray-300 text-gray-900 mt-2 p-3 bg-our-bg rounded-lg focus:outline-none focus:shadow-outline"
              type="text" name="email" placeholder="Email">
              <span class="text-red-700 bg-red-600 bg-opacity-20 text-xs  rounded">{{ $errors->first('email') }}</span>
          </div>

          <div class="{{ $errors->has('password') ? 'has-error' : '' }}">
            <span class="uppercase text-sm font-title text-gray-600 font-bold">Password</span>
            <input class="w-full ring-sec focus:ring-1 bg-gray-300 text-gray-900 mt-2 p-3 bg-our-bg rounded-lg focus:outline-none focus:shadow-outline"
              type="password" name="password" placeholder="Password">
              <span class="text-red-700 bg-red-600 bg-opacity-20 text-xs  rounded">{{ $errors->first('password') }}</span>
          </div>

          <div class="{{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
            <span class="uppercase text-sm font-title text-gray-600 font-bold">Confirm Password</span>
            <input class="w-full ring-sec focus:ring-1 bg-gray-300 text-gray-900 mt-2 p-3 bg-our-bg rounded-lg focus:outline-none focus:shadow-outline"
              type="password" name="password_confirmation" placeholder="Confirm Password">
              <span class="text-red-700 bg-red-600 bg-opacity-20 text-xs  rounded">{{ $errors->first('password_confirmation') }}</span>
          </div>

       
          <div class="mt-8">
            <button
              class="uppercase font-title text-sm font-bold tracking-wide bg-sec text-white rounded-3xl  hover:bg-blue-800 text-gray-100 p-3 rounded-lg w-full focus:outline-none focus:shadow-outline">
              Register
            </button>
          </div>


        </form>
        </div>
      </div>



</section>










{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
