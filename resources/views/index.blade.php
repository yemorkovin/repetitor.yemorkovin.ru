@extends('main')

@section('content')
<div class="slider_area" id="main">
        <div class="slider_active owl-carousel">
            
            @foreach($sliders as $d)
            <div class="single_slider  d-flex align-items-center slider_bg_1" style="background-image: url(/public/images/{{$d->img}});">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <h3>
                                    {!! $d->description !!}
                                    </h3>
                                    <div style="overflow:hidden;font-size: 24px;color:red;display:block;position: relative;">
                                        @if ($d->text_free)
                                        {{$d->text_free}}
                                        @endif
                                        
                                    <div style="box-shadow: 0px 0px 15px white;animation-iteration-count: infinite;animation-name: slidein;animation-duration: 3s;width: 5px;height: 50px;background: #fff;position:absolute;top:-10px;transform: rotate(20deg);"></div>
                                    </div><br />
                                    <style>
                                        @keyframes slidein {
                                          from {
                                            left: 0px;
                                          }
                                        
                                          to {
                                            left:300px;
                                          }
                                        }
                                    </style>
                                    @if ($d->button)
<a href="{{$d->button}}" class="boxed-btn3">{{$d->text_button}}</a>
                                    @endif
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

     <div class="event_details_area section__padding" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single_event d-flex align-items-center">
                        <div class="thumb" >
                            <img src="/public/images/{{$about->img}}" alt="">
                            
                        </div>
                        <div class="event_details_info">
                            <div class="event_info">
                                <a href="#">
                                    <h4>{{$about->header}}</h4>
                                 </a>
                            </div>
                            {!!$about->txt!!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="popular_program_area section__padding" id="courses">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center">
                        <h3>Популярные курсы</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <nav class="custom_tabs text-center">
                        <div class="nav" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">WEB                                </a>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="row">
                        @foreach ($courses as $course)
                        <div class="col-lg-4 col-md-6">
                            <div class="single__program">
                                <div class="program_thumb">
                                    <img src="/public/images/{{$course->img}}" alt="{{$course->title}}">
                                </div>
                                <div class="program__content">
                                    <h4>{{$course->title}}</h4>
                                    {!!$course->description!!}
                                    <a href="/courses/view/{{$course->id}}" class="boxed-btn5">Подробнее</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                                            </div>
                </div>
            </div>
            
        </div>
    </div>
    <div class="service_area gray_bg" id="prices">
        <div class="container">
            <div class="row justify-content-center ">
                @foreach($prices as $price)
                <div class="col-lg-4 col-md-6">
                    <div class="single_service d-flex align-items-center ">
                       
                        <div class="service_info">
                            <h4>{{$price->title}}</h4><br />
                            <p>{{$price->price}} руб./час</p>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
    </div>
    <div class="recent_event_area section__padding" id="otzivi">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="section_title text-center mb-70">
                        <h3 class="mb-45">Отзывы</h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">

                    @foreach($reviews as $review)
                    <div class="single_event d-flex align-items-center">
                        <div class="date text-center">
                            <span>{{$review->date_1}}</span>
                            <p>{{$review->date_2}}<br />{{$review->date_3}}</p>
                        </div>
                        <div class="event_info">
                            <a href="event_details.html">
                                <h4>{{$review->title}}</h4>
                             </a>
                            <p><span> {{$review->name}} </p>
                                <p><a href="{{$review->link}}"> {{$review->link}}</a> </p>
                        </div>
                    </div>
                    @endforeach
                    
                     
                </div>
            </div>
        </div>
    </div>
@endsection
