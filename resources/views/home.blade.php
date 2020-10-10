@extends('layouts.app')

@section('content')

    <div class="body">
        <h1 class="body-tittle">Tareas Pendientes</h1>
        <div class="cards-section">
            <article class="card card--none">
                <h2 class="card__tittle">Titulo de la tarea</h2>
                <p class="card__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit magni corporis quia deleniti vitae atque dolor quod doloribus sit omnis? Ullam eligendi aliquid at consequuntur! Ratione nostrum doloribus perspiciatis atque.dasfassdfdgjjjdkkhola mundoadsfasdfasjdhgfjkhagsdfhj</p>
                <div class="card__actions">
                    <form class="form" method="POST" action="">
                        @csrf
                        @method('DELETE')
 
                        <button class="card__actions--delete"type="submit"><i class="fas fa-trash-alt"></i></button>
                    </form>
                    <a class="card__actions--edit"href="#"><i class="fas fa-edit"></i></a>
                </div>
            </article>
            <article class="card card--normal">
                <h2 class="card__tittle">Titulo de la tarea</h2>
                <p class="card__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit magni corporis quia deleniti vitae atque dolor quod doloribus sit omnis? Ullam eligendi aliquid at consequuntur! Ratione nostrum doloribus perspiciatis atque.dasfassdfdgjjjdkkhola mundoadsfasdfasjdhgfjkhagsdfhj</p>
                <div class="card__actions">
                    <form class="form" method="POST" action="">
                        @csrf
                        @method('DELETE')
 
                        <button class="card__actions--delete"type="submit"><i class="fas fa-trash-alt"></i></button>
                    </form>
                    <a class="card__actions--edit"href="#"><i class="fas fa-edit"></i></a>
                </div>
            </article>
            <article class="card card--warning">
                <h2 class="card__tittle">Titulo de la tarea</h2>
                <p class="card__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit magni corporis quia deleniti vitae atque dolor quod doloribus sit omnis? Ullam eligendi aliquid at consequuntur! Ratione nostrum doloribus perspiciatis atque.dasfassdfdgjjjdkkhola mundoadsfasdfasjdhgfjkhagsdfhj</p>
                <div class="card__actions">
                    <form class="form" method="POST" action="">
                        @csrf
                        @method('DELETE')
 
                        <button class="card__actions--delete"type="submit"><i class="fas fa-trash-alt"></i></button>
                    </form>
                    <a class="card__actions--edit"href="#"><i class="fas fa-edit"></i></a>
                </div>
            </article>
            <article class="card card--danger">
                <h2 class="card__tittle">Titulo de la tarea</h2>
                <p class="card__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit magni corporis quia deleniti vitae atque dolor quod doloribus sit omnis? Ullam eligendi aliquid at consequuntur! Ratione nostrum doloribus perspiciatis atque.dasfassdfdgjjjdkkhola mundoadsfasdfasjdhgfjkhagsdfhj</p>
                <div class="card__actions">
                    <form class="form" method="POST" action="">
                        @csrf
                        @method('DELETE')
 
                        <button class="card__actions--delete"type="submit"><i class="fas fa-trash-alt"></i></button>
                    </form>
                    <a class="card__actions--edit"href="#"><i class="fas fa-edit"></i></a>
                </div>
            </article>
            <article class="card card--normal">
                <h2 class="card__tittle">Titulo de la tarea</h2>
                <p class="card__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit magni corporis quia deleniti vitae atque dolor quod doloribus sit omnis? Ullam eligendi aliquid at consequuntur! Ratione nostrum doloribus perspiciatis atque.dasfassdfdgjjjdkkhola mundoadsfasdfasjdhgfjkhagsdfhj</p>
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
        <button id="prueba" type="button" class="btn-add">ADD TASK</button>
    </div>

@endsection
