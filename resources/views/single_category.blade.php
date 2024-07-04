@extends('layouts/app')

@section('title-block')
    {{ $data->subject }}
@endsection

@section('content')
    <form action="{{route('edit_category', $data->id)}}" method="post">
        @csrf

        <div class="form-group">
            <label for="name">Название:</label>
            <input type="text" name="name" value="{{$data->name}}" placeholder="Введите имя" id="name" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Изменить название</button>
    </form>

@endsection

