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
    <h2>Добавить рассписание</h2>
    <form action="" method="post">
        @csrf
        <div>
            Заголовок
        </div>
        <div>
            <input type="text" name="title">
        </div>

        <div>
            Дата и время
        </div>
        <div>
            <input type="datetime-local" name="start">
        </div>
        <div>
            <input type="submit" value="Добавить">
        </div>
    </form>
    <hr />
</div>

@endsection
