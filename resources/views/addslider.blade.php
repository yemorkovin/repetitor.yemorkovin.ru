@extends('main')

@section('content')
<style type="text/css">
    input{
        color: black !important;
    }
</style>
<div style="width: 400px; margin: 20px auto; min-height: 320px;">
    <hr />
    <a href="{{url('editslider')}}">Назад</a>
    <h2>Добавить слайдер</h2>
    <form action="add" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id">
        <div>
            Описание
        </div>
        <div>
            <input type="text" name="description">
        </div>

        <div>
            Текст светащий
        </div>
        <div>
            <input type="text" name="text_free">
        </div>
        <div>
            Фон
        </div>
        <div>
            <span>6912x3456</span>
            <img src="#" id="img" width="300px" alt="пока нет фото">
            <input type="file" id="file-upload" name="img">
        </div>
        <div>
            Кнопка
        </div>
        <div>
            <input type="text" name="button">
        </div>
        <div>
            Текст кнопки
        </div>
        <div>
            <input type="text" name="text_button">
        </div>
        <div>
            <input type="submit" value="Обновить">
        </div>
    </form>
    <hr />
</div>

@endsection
