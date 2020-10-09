@extends('layouts.app')

@section('content')

                <div class="body">
                    @if (session('status'))
                        <div>
                            {{ session('status') }}
                        </div>
                    @endif

                    <div id="colocar">
                        Home
                    </div>
                    
                </div>

    <button id="prueba" type="button" class="btn-add">ADD TASK</button>
    	


@endsection
