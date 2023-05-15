@extends('main')

@section('content')
<div style="width: 400px; margin: 20px auto; min-height: 320px;">
   <h1>Админ панель</h1>
   <hr />
   <p><a href="/editslider">Блок "слайдер"</a></p> 
   <p><a href="/about">Блок "о репетиторе"</a></p>
   <p><a href="/courses">Блок "Курсы"</a></p>
   <p><a href="/editprice">Блок "Стоимость занятий"</a></p>
   <p><a href="/editreviews">Блок "Отзывы"</a></p>
   <p><a href="/statics">Статистика пользователей</a></p>
   <p><a href="/addcalendar">Добавить урок в расписание</a></p>
   <hr />
</div>
@endsection
