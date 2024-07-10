@extends('layouts/app')

@section('title-block')
    {{ $data->subject }}
@endsection

@section('content')
    <div class="alert alert-primary">
        <h1>{{$data->subject}}</h1>
        <p>{{$data->category_id}}</p>
        <p><small>Автор: {{$data->name}} | Email: {{$data->email}}</small></p>
        <p><small>{{ $data->created_at }}</small></p>
    </div>

    <div class="alert alert-info">
        <p>{{ $data->message }}</p>
    </div>
    <a href="{{route('edit_post', $data->id)}}"><button class="btn btn-primary">Редактировать</button></a>
    <a href="{{route('delete_post', $data->id)}}"><button class="btn btn-danger">Удалить</button></a>
    <h2><br>Написать комментарий</h2>
    <br>
    <form action="{{route('add_comment', $data->id)}}" method="post">
        @csrf
        <input type="text" name="comment" placeholder="Тема сообщения" id="comment" class="form-control">
        <br>
        <button type="submit" class="btn btn-success">Отправить</button>
    </form>
    <h2><br> Комментарии:</h2>
    @foreach($comments as $cm)
    <div class="alert alert-info">
        {{$cm->content}}
    </div>
    @endforeach


@endsection

