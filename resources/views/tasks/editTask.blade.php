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
        {!! Form::model($task,['url'=>'task/'.$task->id,'class'=>'edit-form','method'=>'PUT', 'files'=>true]) !!} 
          <h1 class="edit-form__title">Edición de la tarea</h1>
          <div class="edit-form__item">
            <label class="label-input" for="type_input">Cambiar Rol:</label>
            {!! Form::select('type_id',$types,$task->type_id, ['class'=>'select_input','id' => 'type_input']) !!}
          </div>
          <div class="edit-form__item">
            <label class="label-input" for="name_input">Nombre:</label>
            {!! Form::text('tittle', null, ['id'=> 'name_input','class'=>'text_input']) !!}
          </div>
          <div class="edit-form__item">
            <label class="label-input" for="description_input">Descripción</label>
            <textarea name="description" class="description_input" id="description_input" cols="30" rows="10">{{$task->description}}</textarea>
          </div>
          <div class="buttons">
            <a class="button-edit-back" href="/home">CANCELAR</a>
            {!! Form::submit('GUARDAR CAMBIOS',['class'=>'button-edit-submit']) !!}  
          </div>
        {!! Form::close() !!}
    </div>

@endsection
