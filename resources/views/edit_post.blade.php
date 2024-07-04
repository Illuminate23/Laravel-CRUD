@extends('layouts.app')

@section('title-block')
Редактировать публикацию
@endsection

@section('content')
    <h1>Создать публикацию</h1>
    <form action="{{route('edit_post_submit', $data->id)}}" method="post">
        @csrf
       <div class="form-group">
            <label for="name">Введите имя</label>
            <input type="text" name="name" placeholder="Введите имя" id="name" class="form-control" value="{{$data->name}}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" placeholder="Введите email" id="email" class="form-control" value="{{$data->email}}">
        </div>
        <div class="form-group">
            <label for="category">Категория публикации</label>
            <select class="custom-select" id="category" name="category">
                @foreach($bd as $el)
                    <option>{{$el->name}}</option>
                @endforeach
            </select>
        </div>
       <div class="form-group">
            <label for="subject">Тема публикации</label>
            <input type="text" name="subject" placeholder="Тема сообщения" id="subject" class="form-control" value="{{$data->subject}}">
        </div>
        <div class="form-group">
            <label for="message">Текст публикации</label>
            <textarea id="message" name="message" class="form-control" placeholder="Введите сообщение" value="">{{$data->message}}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Отправить</button>
    </form>
@endsection
