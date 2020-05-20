@extends('layouts.main', ['title' => "Создать автора"])



@section('content')
    <form action="{{route('store_author')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}

        <label class="switch">
            Имя
        </label>
        <input type="text" id="first_name" name="first_name">
        <br>
        <label class="switch">
            Фамилия
        </label>
        <input type="text" id="last_name" name="last_name">
        <br>
        <button class="btn btn-primary">Создать анкету</button>
        <a class="btn btn-success" href="{{route('main')}}">Назад</a> </b>
    </form>
@endsection