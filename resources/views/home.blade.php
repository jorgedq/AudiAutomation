@extends('layouts.app')

@section('content')

    <div class="body">
    
        <h1 class="body-tittle">Tareas Pendientes</h1>
        @if ($errors->any())
            <div class="validation">
                <ul class="validation__list">
                    @foreach ($errors->all() as $error)
                        <li class="validation__list-item">{{ $error }}</li>
                    @endforeach 
                </ul>
            </div>
        @endif
        <div class="cards-section">
        @foreach(Auth::user()->tasks as $tarea)
            <article class="card {{$tarea->type->color}}">
                <h2 class="card__tittle">{{$tarea->tittle}}</h2>
                <p class="card__description">{{$tarea->description}}</p>
                <div class="card__actions">
                        {!! Form::open(['url'=>'task/'.$tarea->id, 'method'=>'DELETE','onsubmit'=>'return confirm("¿ Estas seguro de realizar esta acccion ?")']) !!}
                            <button class="card__actions--delete"type="submit"><i class="fas fa-trash-alt"></i></button>
                        {!! Form::close() !!}
                    <a class="card__actions--edit"href="#"><i class="fas fa-edit"></i></a>
                </div>
            </article>
        @endforeach
        <!-- Add Form Task -->
        <div class="newtask" id="taskform">
            <div class="newtask__tittle">Nueva Tarea</div>
            {!! Form::open(['url'=>'/task','id'=>'form-task', 'class'=>'newtask__form','method'=>'post']) !!}
                {!! Form::select('type_id',$types, ['class'=>'']) !!}
                {!! Form::text('titulo', null, ['class'=>'newtask__form-title','placeholder'=>'Título']) !!}
                <textarea
                    class="newtask__form-description"
                    name="descripcion"
                    id="description"
                    cols="30"
                    rows="8"
                    placeholder="Descripción"
                ></textarea>
                {!! Form::submit('Aceptar', ['id'=>'addTask','class'=>'taskform-submit']) !!}
            {!! Form::close() !!}
        </div>
        <button id="addTask" class="btn-add" data-active="false"><i id='icn' class="fas fa-plus"></i></button>
    </div>

@endsection
