@extends('layouts.app')

@section('content')
    
<div class="container">
	<section id="content">
	<form method="POST" action="{{ route('login') }}">
            @csrf
			<h1>Login</h1>
			<div>
				<input id="email" type="email" class="@error('email') is-invalid @enderror" placeholder="Correo Electronico" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus >
				@error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
			</div>
			<div>
				<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Contraseña" name="password" required autocomplete="current-password">
				@error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
			</div>
			<div>
				<input type="submit" value="Ingresar" />
				<a href="{{ route('password.request') }}">Olvidaste tu contraseña?</a>
			</div>      
        </form>
	</section>
</div>

@endsection
