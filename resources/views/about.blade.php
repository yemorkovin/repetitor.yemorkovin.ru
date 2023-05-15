@extends('main')

@section('content')
<style type="text/css">
    input{
        color: black !important;
    }
</style>
<div style="width: 70%; margin: 20px auto; min-height: 320px;">
    <hr />
    <a href="{{url('admin')}}">Назад</a>
    <h2>Об авторе</h2>
    <form action="about" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{$about->id}}">
        <div>
            Заголовок
        </div>
        <div>
           <input type="text" name="header" value="{{$about->header}}" />
        </div>
        <div>
            Текст
        </div>
        <div>
           <textarea cols="50" rows="20" name="txt">{{$about->txt}}</textarea>
        </div>
        <div>
            Фото
        </div>
        <div>
            <img src="public/images/{{$about->img}}" id="img" width="300px" alt="пока нет фото">
            <input type="file" id="file-upload" name="img">
        </div>
        
        <div>
            <input type="submit" value="Обновить">
        </div>
    </form>
    <hr />
</div>

@endsection
