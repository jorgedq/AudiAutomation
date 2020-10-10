@extends('layouts.app')

@section('content')

    <div class="body">
    
        <h1 class="body-tittle">Tareas Pendientes</h1>
        <div class="cards-section">
        @foreach($tareas as $tarea)
          @if($tarea->type_id == 1 && $tarea->user_id == Auth::user()->id)
            <article class="card card--none">
                <h2 class="card__tittle">{{$tarea->tittle}}</h2>
                <p class="card__description">{{$tarea->description}}</p>
                <div class="card__actions">
                        {!! Form::open(['url'=>'task/'.$tarea->id, 'method'=>'DELETE','onsubmit'=>'return confirm("¿ Estas seguro de realizar esta acccion ?")']) !!}
                            <button class="card__actions--delete"type="submit"><i class="fas fa-trash-alt"></i></button>
                        {!! Form::close() !!}
                    <a class="card__actions--edit"href="#"><i class="fas fa-edit"></i></a>
                </div>
            </article>
           @endif
        @endforeach

        @foreach($tareas as $tarea )
          @if($tarea->type_id == 2 && $tarea->user_id == Auth::user()->id)
            <article class="card card--normal">
                <h2 class="card__tittle">{{$tarea->tittle}}</h2>
                <p class="card__description">{{$tarea->description}}</p>
                <div class="card__actions">
                    <form class="form" method="POST" action="">
                        @csrf
                        @method('DELETE')
 
                        <button class="card__actions--delete"type="submit"><i class="fas fa-trash-alt"></i></button>
                    </form>
                    <a class="card__actions--edit"href="#"><i class="fas fa-edit"></i></a>
                </div>
            </article>
            @endif
        @endforeach

        @foreach($tareas as $tarea)
          @if($tarea->type_id == 3 && $tarea->user_id == Auth::user()->id)
            <article class="card card--warning">
                <h2 class="card__tittle">{{$tarea->tittle}}</h2>
                <p class="card__description">{{$tarea->description}}</p>
                <div class="card__actions">
                    <form class="form" method="POST" action="">
                        @csrf
                        @method('DELETE')
 
                        <button class="card__actions--delete"type="submit"><i class="fas fa-trash-alt"></i></button>
                    </form>
                    <a class="card__actions--edit"href="#"><i class="fas fa-edit"></i></a>
                </div>
            </article>
            @endif
        @endforeach

        @foreach($tareas as $tarea)
          @if($tarea->type_id == 4 && $tarea->user_id == Auth::user()->id)
            <article class="card card--danger">
                <h2 class="card__tittle">{{$tarea->tittle}}</h2>
                <p class="card__description">{{$tarea->description}}</p>
                <div class="card__actions">
                    <form class="form" method="POST" action="">
                        @csrf
                        @method('DELETE')
 
                        <button class="card__actions--delete"type="submit"><i class="fas fa-trash-alt"></i></button>
                    </form>
                    <a class="card__actions--edit"href="#"><i class="fas fa-edit"></i></a>
                </div>
            </article>
            @endif
        @endforeach

        @foreach($tareas as $tarea)
          @if($tarea->type_id == 5 && $tarea->user_id == Auth::user()->id)
            <article class="card card--normal">
                <h2 class="card__tittle">{{$tarea->tittle}}</h2>
                <p class="card__description">{{$tarea->description}}</p>
                <div class="card__actions">
                    <form class="form" method="POST" action="">
                        @csrf
                        @method('DELETE')
 
                        <button class="card__actions--delete"type="submit"><i class="fas fa-trash-alt"></i></button>
                    </form>
                    <a class="card__actions--edit"href="#"><i class="fas fa-edit"></i></a>
                </div>
            </article>
        </div> 
        @endif
        @endforeach

        <button id="prueba" type="button" >
            {!! Form::open(['url'=>'task', 'method'=>'GET']) !!}
              {!! Form::submit('ADD TASK', ['class'=>'btn-add']) !!}
            {!! Form::close() !!}
        </button>
    </div>

@endsection
