@extends('main')

@section('content')

<div style="width: 700px; margin: 20px auto; min-height: 320px;">
    <hr />
    <p><a href="{{url('admin')}}">Назад</a></p>
    <ul>
        @foreach($sliders as $slider)
            <li><a href="editslider/{{$slider->id}}">{{$slider->description}}</a> <span ><a href="editslider/delete/{{$slider->id}}" style="color:red">Удалить</a></span></li>
        @endforeach
    </ul>
    <hr />
    <p><a href="/editslider/add">ДОБАВИТЬ СЛАЙДЕР</a></p>
</div>
@endsection
