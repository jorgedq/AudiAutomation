@extends('layouts.app')

@section('content')

    <div class="body">
        <h1 class="body-tittle">Información Actual del Usuario</h1>
        <div class="profile">
          <p class="profile__name"><span>Nombre:</span> {{$user->name}}</p>
          <p class="profile__email"><span>Email:</span> {{$user->email}}</p>
          <div class="profile__actions">
            <a href="/profileEdit" class="profile__actions-edit">Editar Perfil</a>
          </div>
        </div>
    </div>

@endsection
