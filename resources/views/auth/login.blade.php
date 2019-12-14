@extends('layouts.app')

@section('content')
<div class="limiter" style="margin-top: -122px">
		<div class="container-login100" style="background-image: url('images/login.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Login Untuk Lebih!
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" method="POST" action="{{ route('login') }}">
                    @csrf
					<div class="wrap-input100 validate-input" data-validate = "Enter username">
                        <input class="input100" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input Placeholder="Password" class="input100" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
                        <button type="submit" class="btn btn-success px-4" style="font-size: 20px">
                            {{ __('Login') }}
                        </button>
                    </div>
                    <div style="margin-left: 115px">
                        @if (Route::has('password.request'))
                        <br>
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                        @endif
                    </div>
				</form>
			</div>
		</div>
</div>
@endsection
