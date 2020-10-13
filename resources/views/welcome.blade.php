@extends('layouts.app')

@section('content')
  <section class="index">
        <div class="index__section">
            <div>
                <h2 class="title__section">Tareas.me permite desarrollar que tu día a día sea mas organizado</h2>
                <p class="title__body">Las tarjetas de la aplicacion permitiran separar por prioridades tus distas tareas del día</p>
            </div>
        </div>
        <img class="index__img" src="/image/notitas.jpg" alt="">
  </section>
  <section class="index index--reverse">
        <div class="index__section">
                <h2 class="title__section">Tareas.me nos permite recuperar tareas eliminadas por accidente</h2>
        </div>
        <div class="index__section">

                <i class="fas fa-trash-restore fa-10x"></i>
        </div>
  </section>
@endsection

