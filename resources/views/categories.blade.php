@extends('layouts/app')

@section('title-block')
Категории
@endsection

@section('content')
    <h1>Категории</h1>
    @foreach($data as $el)
        <div class="alert alert-info">
            <h2>{{ $el->name  }}</h2>
            <a href="{{ route('single_category', $el->id)}}">
                <button class="btn btn-warning">Редактировать</button>
            </a>
            <a href="{{ route('delete_category', $el->id) }}">
                <button class="btn btn-warning">Удалить</button>
            </a>
        </div>
    @endforeach
    <form action="{{route('add_category')}}" method="post">
        @csrf
        <input type="text" name="new_category" placeholder="Категория" id="new_category" class="form-control">
        <button type="submit" class="btn btn-primary">Добавить категорию</button>
    </form>
@endsection

