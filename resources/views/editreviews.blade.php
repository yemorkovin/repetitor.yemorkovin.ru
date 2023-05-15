@extends('main')

@section('content')
<style type="text/css">
    input{
        color: black !important;
    }
</style>
<div style="width: 400px; margin: 20px auto; min-height: 320px;">
    <hr />
    <a href="{{url('admin')}}">Назад</a>
    <h2>Добавить отзыв</h2>
    <form action="" method="post">
        @csrf
        <div>
            Имя
        </div>
        <div>
            <input type="text" name="name">
        </div>

        <div>
            Отзыв
        </div>
        <div>
            <input type="text" name="title">
        </div>
        <div>
            Дата
        </div>
        <div>
            <input type="date" name="date">
        </div>
        <div>
            Ссылка
        </div>
        <div>
            <input type="text" name="link">
        </div>
        <div>
            <input type="submit" value="Добавить">
        </div>
    </form>
    <hr />
</div>

@endsection
