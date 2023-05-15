@extends('main')

@section('content')

<div id='calendar'></div>
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.7/index.global.min.js'></script>

<script>
        var events = <?=$data?>;
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'timeGridWeek',
                selectable: true,

                editable: false,
                dayMaxEvents: true,
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth',
                },
                buttonText:{
                    today:'сегодня',
                    month:'месяц',
                    week:'неделя',
                    day:'день',
                    list:'список'},
                timeZone: 'UTC',
                slotMinTime: "10:00:00",
                slotMaxTime: "22:00:00",
                slotDuration: '01:00',
                firstDay: 1,
                stickyHeaderDates:true,
                handleWindowResize:false,
                expandRows: true,
                allDaySlot: false,
                theme: true,
                locale: 'ru',
                
                eventSources : [
                    {
                        events : events,
                        color : '#7060FB ',
                    }
                ],

            });
            calendar.render();
        });
    </script>
        

@endsection
