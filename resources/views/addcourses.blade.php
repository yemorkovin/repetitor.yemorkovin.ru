@extends('main')

@section('content')
<style type="text/css">
    input{
        color: black !important;
    }
</style>
<div style="width: 400px; margin: 20px auto; min-height: 320px;">
    <hr />
    <a href="/courses">Назад</a>
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            Заголовок
        </div>
        <div>
            <input type="text"  name="title">
        </div>

        <div>
            Описание
        </div>
        <div>
            <textarea cols="45" rows="10" name="description"></textarea>
        </div>
         <div>
            Полный текст
        </div>
        <div>
            <textarea cols="45" rows="10" name="full_text"></textarea>        
        </div>
        <div>
            Картинка
        </div>
        <div>
            <img src="" id="img" width="300px">
            <input type="file" id="file-upload" name="img">
        </div>
        <div>
            <input type="submit" value="Добавить">
        </div>
    </form>
    <hr />
</div>

@endsection
