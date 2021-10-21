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
                    <h1>News</h1>
                    <ul>
                        <li><a href="{{asset('index')}}">Home</a> -</li>
                        <li>News</li>
                    </ul>
                </div>
            </div>
    </div>
        <!-- Inner Page Banner Area End Here -->
        <!-- News Page Area Start Here -->
        <div class="news-page-area">
            <div class="container">
                <div class="row">
                    
                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                        <div class="row">
                            @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                            @endif
                            @foreach ($newses as $news)
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="news-box">
                                    <a href="{{ url('news_details/'.$news->id) }}">
                                        <div class="news-img-holder">
                                            <img src="{{asset('uploads/files/'. $news->imglink) }}" class="img-responsive" alt="research">
                                            <ul class="news-date2 m-5" >
                                                <li  style="width:100px;">{{ $news->date }}</li>
                                                <li style="width:100px;">{{ $news->time }}</li>
                                            </ul>
                                        </div>
                                    </a>
                                    <h3 class="title-news-left-bold"><a href="{{ url('news_details/'.$news->id) }}">{{ $news->title }}</a></h3>
                                    <p>{{Illuminate\Support\Str::words($news->text,20,'.....') }}</p>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="text-center">
                                            {{$newses->links()}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <div class="sidebar">
                            <div class="sidebar-box">
                                <div class="sidebar-box-inner">
                                    <h3 class="sidebar-title">Search</h3>
                                    <div class="sidebar-find-course">
                                        <form id="checkout-form" action="{{ route('newsSearch') }}" method="GET">
                                            <div class="form-group course-name">
                                                <input id="first-name" placeholder="Type Here . . .." class="form-control" type="text" name="search" required />
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
                                    <h3 class="sidebar-title">Latest News</h3>
                                    <div class="sidebar-latest-research-area">
                                        @foreach ($newses as $news)
                                        <ul>
                                                <li><a href="{{ url('news_details/'.$news->id) }}"><i class="mr-10 fa fa-check-square-o text-black-light"></i> {{ $news->title }}</a></li>
                                            
                                        </ul>
                                        @endforeach
                                        
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- News Page Area End Here -->
