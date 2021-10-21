@extends('layout.layout')
@section('content')


 <!-- Inner Page Banner Area Start Here -->
 @foreach ($sites as $site)
 @if ($site->site_key=='bgimage')
    <div class="inner-page-banner-area" style="background-image: url({{'uploads/files/'.$site->imglink}});">
        @endif
        @endforeach  
            <div class="container">
                <div class="pagination-area">
                    <h1>Event Details</h1>
                    <ul>
                        <li><a href="{{asset('index')}}">Home</a> -</li>
                        <li> Event Details</li>
                    </ul>
                </div>
            </div>
    </div>
        <!-- Inner Page Banner Area End Here -->
        <!-- Event Details Page Area Start Here -->
        <div class="event-details-page-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                        <div class="event-details-inner">
                            <div class="event-details-img">
                                <div class="countdown-content">
                                </div>
                                <a href="#"><img src="{{ asset('uploads/files/'.$event_details->img_link ) }}" alt="event" class="img-responsive"></a>
                            </div>
                            <h2 class="title-default-left-bold-lowhight"><a href="#">{{ $event_details->tittle }}</a></h2>
                            <ul class="event-info-inline title-bar-sm-high">
                                <li><i class="fa fa-calendar" aria-hidden="true"></i>{{ $event_details->date }}</li>
                                <li><i class="fa fa-map-marker" aria-hidden="true"></i>{{ $event_details->address }}</li>
                            </ul>
                            <p>{{ $event_details->details }}</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <div class="sidebar">
                            <div class="sidebar-box">
                                <div class="sidebar-box-inner">
                                    <h3 class="sidebar-title">Categories</h3>
                                    <ul class="sidebar-categories">
                                        @foreach ($event as $events)
                                        <li class=""><a href="{{ url('event_details/'.$events->id) }}">{{ $events->tittle }}</a></li>
                                        @endforeach
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Event Details Page Area End Here -->
