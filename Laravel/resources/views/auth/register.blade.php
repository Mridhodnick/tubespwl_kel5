@extends('layouts.app')

@section('content')
<!-- FORMULIR DAFTAR -->
<div class="w3-modal-content w3-card-4 w3-animate-zoom w3-white" style="max-width:600px">
    <div class="w3-center"><br>
        <img src="https://images.pexels.com/photos/2041540/pexels-photo-2041540.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" style="width:30%;" class="w3-circle w3-margin-top">
        <h4><b>Registration Menu</b></h4>
    </div>
    <div class="w3-section">
      <form class="w3-container" method="POST" action="{{ route('register') }}">
      @csrf              
        <label><b>{{ __('Name') }}</b></label>
        <input class="w3-input w3-margin-bottom" placeholder="Enter your name" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        <label><b>{{ __('E-Mail Address') }}</b></label>
        <input class="w3-input w3-margin-bottom" placeholder="Enter your email adress" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        <label><b>{{ __('Password') }}</b></label>
        <input class="w3-input w3-margin-bottom" placeholder="Enter your password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        
        <label><b>{{ __('Confirm Password') }}</b></label>
        <input class="w3-input w3-margin-bottom" id="password-confirm" placeholder="Confirm your password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
         
        <button class="w3-button w3-block w3-round w3-blue w3-section w3-padding" name type="submit"> {{ __('Sign Up') }}</button>
      </form> 
    </div>
</div>
@endsection
<!-- AKHIR FORMULIR DAFTAR AKUN -->
