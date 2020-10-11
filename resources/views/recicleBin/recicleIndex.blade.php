@extends('layouts.app')

@section('content')

  <div class="body">
    <h1 class="body-tittle">Papelera de Reciclaje</h1>
        @if(sizeof($tareas) == 0)
          <h2 class="empty-recicle-message">La papelera esta vacía</h2>
        @else
        <div class="alert alert--info">
          <p class="alert__text">Tenga cuidado con eliminar elementos en esta sección ya que serán borrados permanentemente</p>
        </div>
        <div class="cards-section">
          @foreach($tareas as $tarea)
            <article class="card {{$tarea->type->color}}">
                <h2 class="card__tittle">{{$tarea->tittle}}</h2>
                <p class="card__description">{{$tarea->description}}</p>
                <div class="card__actions">
                        {!! Form::open(['url'=>'recicle/'.$tarea->id, 'method'=>'DELETE','onsubmit'=>'return confirm(" Se eliminara permanente mente. ¿Está seguro de realizar esta acción?")']) !!}
                            <button class="card__actions--delete"type="submit"><i class="fas fa-trash-alt icon icon--trash"></i></button>
                        {!! Form::close() !!}
                        {!! Form::open(['url'=>'recicle/'.$tarea->id, 'method'=>'POST','onsubmit'=>'return confirm("¿Desea restaurar esta Tarea?")']) !!}
                            <button class="card__actions--edit" type="submit"><i class="fas fa-trash-restore icon icon--restore"></i></button>
                        {!! Form::close() !!}
                </div>
            </article>
          @endforeach
        @endif          
    </div>

@endsection
