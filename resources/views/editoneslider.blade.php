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
    <form action="{{ route('editslider') }}" method="post" enctype="multipart/form-data">
        @foreach($slider as $sl)
        @csrf
        <input type="hidden" name="id" value="{{$sl->id}}">
        <div>
            Описание
        </div>
        <div>
            <input type="text" value="{{$sl->description}}" name="description">
        </div>

        <div>
            Текст светащий
        </div>
        <div>
            <input type="text" value="{{$sl->text_free}}" name="text_free">
        </div>
        <div>
            Фон
        </div>
        <div>
            <span>6912x3456</span>
            <img src="/images/{{$sl->img}}" id="img" width="300px">
            <input type="file" id="file-upload" name="img">
        </div>
        <div>
            Кнопка
        </div>
        <div>
            <input type="text" value="{{$sl->button}}" name="button">
        </div>
        <div>
            Текст кнопки
        </div>
        <div>
            <input type="text" value="{{$sl->text_button}}" name="text_button">
        </div>
        <div>
            <input type="submit" value="Обновить">
        </div>
        @endforeach
    </form>
    <hr />
</div>

@endsection
