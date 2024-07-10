@extends('layouts/app')

@section('title-block')
    {{ $data->subject }}
@endsection

@section('content')
    <form action="{{route('edit_category', $data->id)}}" method="post">
        @csrf

        <div class="form-group">
            <label for="new_category">Название:</label>
            <input type="text" name="new_category" value="{{$data->name}}" placeholder="Введите имя" id="new_category" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Изменить название</button>
    </form>

@endsection

