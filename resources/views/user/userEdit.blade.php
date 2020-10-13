@extends('layouts.app')

@section('content')
  <div class="body edit">
        @if ($errors->any())
          <div class="validation-rigth">
            <div class="validation">
                <ul class="validation__list">
                    @foreach ($errors->all() as $error)
                        <li class="validation__list-item">{{ $error }}</li>
                    @endforeach 
                </ul>
            </div>
          </div>
        @endif
        {!! Form::model($user,['url'=>'profileUpdate/','class'=>'edit-form','method'=>'PUT']) !!} 
          <h1 class="edit-form__title">Edición del usuario</h1>
          <div class="edit-form__item">
            <label class="label-input" for="name_input">Nombre:</label>
            {!! Form::text('name', null, ['id'=> 'name_input','class'=>'text_input']) !!}
          </div>
          <div class="edit-form__item">
            <label class="label-input" for="email_input">Email</label>
            {!! Form::email('email', null, ['class'=>'email-input','id'=>'email_input']) !!}
          </div>
          <div class="edit-form__item">
            <label class="label-input" for="password_input">Contraseña</label>
            {!! Form::password('password',['class'=>'password-input','id'=>'password_input']) !!}
          </div>
          <div class="edit-form__item">
            <label class="label-input" for="password2_input">Confirmar Contraseña</label>
            <input id="password2_input" type="password" class="password-input" name="password_confirmation">
          </div>
          <div class="buttons">
            <a class="button-edit-back" href="/profile">CANCELAR</a>
            {!! Form::submit('GUARDAR CAMBIOS',['class'=>'button-edit-submit']) !!}  
          </div>
        {!! Form::close() !!}
    </div>

@endsection
