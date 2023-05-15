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
        <input type="hidden" name="id" value="{{$course->id}}">
        <div>
            Заголовок
        </div>
        <div>
            <input type="text" value="{{$course->title}}" name="title">
        </div>

        <div>
            Описание
        </div>
        <div>
            <textarea cols="45" rows="10" name="description">{{$course->description}}</textarea>
        </div>
         <div>
            Полный текст
        </div>
        <div>
            <textarea cols="45" rows="10" name="full_text">{{$course->full_text}}</textarea>        
        </div>
        <div>
            Картинка
        </div>
        <div>
            <img src="/public/images/{{$course->img}}" id="img" width="300px">
            <input type="file" id="file-upload" name="img">
        </div>
        <div>
            <input type="submit" value="Обновить">
        </div>
    </form>
    <hr />
</div>

@endsection
