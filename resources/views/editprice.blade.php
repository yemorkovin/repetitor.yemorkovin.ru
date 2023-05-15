@extends('main')

@section('content')
<style type="text/css">
    input{
        color: black !important;
    }
</style>
<div style="width: 400px; margin: 20px auto; min-height: 320px;">
    <hr />
    <a href="/admin">Назад</a>
        
        @foreach($prices as $price)
            <form action="" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$price->id}}">
        <div>
            <input type="text"  name="title" value="{{$price->title}}">
        </div>
        <div>
            <input type="number"  name="price" value="{{$price->price}}">
        </div>
        <div>
            <input type="submit" value="Обновить">
        </div>
        </form>
        @endforeach
    
    <hr />
</div>

@endsection
