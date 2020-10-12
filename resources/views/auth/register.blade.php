@extends('layouts.app')

@section('content')
    
<div class="container">
	<section id="content">
	    <form method="POST" action="{{ route('register') }}">
            @csrf
			<h1>Nuevo Ususario</h1>
			<div>
                <input id="name" type="text" placeholder="Nombre de Usuario" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div>
                <input id="email" type="email" placeholder="Correo Electronico" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
			<div>
                <input id="password" type="password" placeholder="Contraseña" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div>
                <input id="password-confirm" type="password" placeholder="Confirmar Contraseña" name="password_confirmation" required autocomplete="new-password">
            </div>
			<div>
				<input type="submit" value="Registrar" />
			</div>      
        </form>
	</section>
</div>

@endsection