@extends('layouts.app')

@section('content')
<!-- FORMULIR LOGIN -->
<div class="w3-modal-content w3-card-4 w3-animate-zoom w3-white" style="max-width:600px">
    <div class="w3-center"><br>
        <img src="https://images.pexels.com/photos/2041540/pexels-photo-2041540.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" style="width:30%;" class="w3-circle w3-margin-top">
        <h4><b>Login Menu</b></h4>
    </div>
    <div class="w3-section">
      <form method="POST" action="{{ route('login') }}" class="w3-container">
      @csrf              
        <label><b>{{ __('E-Mail Address') }}</b></label>
        <input class="w3-input w3-margin-bottom" placeholder="Enter your email adress" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        <label><b>{{ __('Password') }}</b></label>
        <input class="w3-input w3-margin-bottom" placeholder="Enter your password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        
        <input class="w3-check" type="checkbox" checked="checked" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        <label class="form-check-label" for="remember">
            {{ __('Remember Me') }}
        </label>
        <br><br>
        <button class="w3-button w3-block w3-round w3-green w3-section w3-padding" name type="submit"> {{ __('Login') }}</button>
            @if (Route::has('password.request'))
                <a class='w3-text-blue' href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                </a>
            @endif
        <br><br><br>    
      </form> 
    </div>
</div>
@endsection
<!-- AKHIR FORMULIR LOGIN -->
