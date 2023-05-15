@extends('main')

@section('content')

<div style="width: 600px; margin: 20px auto; min-height: 320px;">
    <hr />
    <a href="{{url('admin')}}">Назад</a>
    <h2 align="center">Статистика на сайте</h2>
    <p><b>Общее количество посещений {{$stats->count()}}</b></p>
    <p><b><a href="/stat_clear">Очистить статистику</a></b></p>
    <table width="100%" align="center" cellpadding="0" cellspacing="0" border="1">
        <tr>
            <td>Страна</td>
            <td>Регион</td>
            <td>Город</td>
            <td>Дата</td>
        </tr>
        @foreach($stats as $stat)
        <tr>
            <td>{{$stat->country}}</td>
            <td>{{$stat->regionName}}</td>
            <td>{{$stat->city}}</td>
            <td>{{$stat->date}}</td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
