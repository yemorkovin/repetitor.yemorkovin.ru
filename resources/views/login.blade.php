@extends('main')

@section('content')

<div style="width: 400px; margin: 20px auto; min-height: 320px;">
    <form action="{{ route('login') }}" method="post">
        @csrf
        Email: <input type="email" name="email" style="color: #000"/>
        Password: <input type="password" name="password" style="color: #000">
        <input type="submit" name="sub" value="Авторизация">
    </form>
</div>
@endsection
