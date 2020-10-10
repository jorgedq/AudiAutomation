@extends('layouts.app')

@section('content')

    <div class="body">
        @if (session('status'))
            <div>
                {{ session('status') }}
            </div>
        @endif       
    </div>

    <button  type="button" class="btn-add">
        {!! Form::open(['url'=>'task/'.Auth::user()->id, 'method'=>'GET']) !!}
          {!! Form::submit('Tarea') !!}
        {!! Form::close() !!}
    </button>
    	
@endsection
