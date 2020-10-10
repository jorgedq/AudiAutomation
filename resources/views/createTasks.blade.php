@extends('layouts.app')

@section('content')

    <div class="body">
        @if (session('status'))
            <div>
                {{ session('status') }}
            </div>
        @endif

        <div>
            {!! Form::open(['url'=>'task/'.Auth::user()->id, 'method'=>'POST']) !!}
                {{ csrf_field() }}
                  <div class="">
                    <label class="">Titulo</label>
                    <input type="text" class="" name="title" placeholder="titulo de la tarea" required>
                  </div><br>
                  <div class="">
                    <label class="">Descripcion</label>
                    <input type="text" class="" name="description" placeholder="descripcion de la tarea" required>
                  </div><br>
                  <div class="">
                    <label class="">Color</label>
                    <input type="number" class="" name="type_id" required>
                  </div><br>
                  <a href="{{ route('home') }}" class="">Cancelar</a>
                    {!! Form::submit('CREATE TASK', ['class'=>'btn-add']) !!}
              </div>
              {!! Form::close() !!}
        </div>
                    
    </div>

@endsection
