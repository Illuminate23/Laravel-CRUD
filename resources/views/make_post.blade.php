@extends('layouts.app')

@section('title-block')
Создать публикацию
@endsection

@section('content')
    <h1>Создать публикацию</h1>
    <form action="{{route('submit_post')}}" method="post">
        @csrf
       <div class="form-group">
            <label for="name">Введите имя</label>
            <input type="text" name="name" placeholder="Введите имя" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" placeholder="Введите email" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="category">Категория публикации</label>
            <select class="custom-select" id="category" name="category">
                @foreach($data as $el)
                    <option>{{$el->name}}</option>
                @endforeach
            </select>
        </div>
       <div class="form-group">
            <label for="subject">Тема публикации</label>
            <input type="text" name="subject" placeholder="Тема сообщения" id="subject" class="form-control">
        </div>
        <div class="form-group">
            <label for="message">Текст публикации</label>
            <textarea id="message" name="message" class="form-control" placeholder="Введите сообщение"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Отправить</button>
    </form>
@endsection
