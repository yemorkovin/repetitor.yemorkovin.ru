@extends('main')

@section('content')

        <div style="width: 90%; margin: 10px auto">
                <img src="/public/images/{{$course->img}}" width="100%" alt="" style="text-align: center">
                    <h4>{{$course->title}}</h4>
                    <div>
                        {!!$course->full_text!!}
                    </div>
        </div>

@endsection
