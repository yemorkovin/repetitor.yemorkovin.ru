@extends('main')

@section('content')

<div style="width: 700px; margin: 20px auto; min-height: 320px;">
    <hr />
    <p><a href="{{url('admin')}}">Назад</a></p>
    <ul>
        @foreach($courses as $course)
            <li><a href="courses/{{$course->id}}">{{$course->title}}</a> <span ><a href="courses/delete/{{$course->id}}" style="color:red">Удалить</a></span></li>
        @endforeach
    </ul>
    <hr />
    <p><a href="/course/add">ДОБАВИТЬ СЛАЙДЕР</a></p> 
</div>
@endsection
