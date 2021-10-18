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
                    <h1>News Details</h1>
                    <ul>
                        <li><a href="{{asset('index')}}">Home</a> -</li>
                        <li> News Details</li>
                    </ul>
                </div>
            </div>
    </div>
        <!-- Inner Page Banner Area End Here -->
        <!-- News Details Page Area Start Here -->
        <div class="news-details-page-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                        <div class="row news-details-page-inner">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="news-img-holder">
                                    <img src="{{ asset('uploads/files/'.$news_details->imglink) }}" class="img-responsive" alt="research">
                                    <ul class="news-date1">
                                        <li>{{ $news_details->date}}</li>
                                        <li>{{ $news_details->time }}</li>
                                    </ul>
                                </div>
                                <h2 class="title-default-left-bold-lowhight"><a href="#">{{ $news_details->title }}</a></h2>
                                
                                <p> {{ $news_details->text }} </p>
                                <p>{{ $news_details->details }} </p>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <div class="sidebar">
                            <div class="sidebar-box">
                                <div class="sidebar-box-inner">
                                    <h3 class="sidebar-title">Search</h3>
                                    <div class="sidebar-find-course">
                                        <form id="checkout-form">
                                            <div class="form-group course-name">
                                                <input id="first-name" placeholder="Type Here . . .." class="form-control" type="text" />
                                            </div>
                                            <div class="form-group">
                                                <button class="sidebar-search-btn-full disabled" type="submit" value="Login">Search</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-box">
                                <div class="sidebar-box-inner">
                                    <h3 class="sidebar-title">Categories</h3>
                                    <ul class="sidebar-categories">
                                        @foreach ($news as $newses )
                                        <li class=""><a href="{{ url('news_details/'.$newses->id) }}">{{ $newses->title }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                         
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- News Page Area End Here -->

