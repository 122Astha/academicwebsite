@extends('layout.layout')
@section('content')



<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Add your site or application content here -->
    <div id="wrapper">
        <!-- Header Area Start Here -->
       
        <!-- Header Area End Here -->
        <!-- Inner Page Banner Area Start Here -->
        @foreach ($sites as $site)
  @if ($site->site_key=='bgimage')
     <div class="inner-page-banner-area" style="background-image: url({{'uploads/files/'.$site->imglink}});">
         @endif
         @endforeach  
             <div class="container">
                 <div class="pagination-area">
                     <h1>About Us</h1>
                     <ul>
                         <li><a href="{{asset('index')}}">Home</a> -</li>
                         <li>About Us</li>
                     </ul>
                 </div>
             </div>
     </div>
        <!-- Inner Page Banner Area End Here -->
        <!-- Introduction Area Start Here -->
        <div class="about-page2-area">
            <div class="container">
                <div class="row about-page2-inner">
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif
                    @foreach ($sites as $site)
                    @if ($site->site_key=='welcome')
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <h2 class="title-default-left">{{$site->site_name}}</h2>
                        <p>{{$site->site_value}}</p>
                    </div>
                    @endif
                    @endforeach
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                       <div class="video-area2 overlay-video bg-common-style video-margin-top" style="background-image: url('frontend/img/banner/6.jpg');">
                            <div class="video-content">
                                <a href=" {{ asset('uploads/files/'.$site->imglink)}}" data-lightbox-gallery="youtube-video"
                                    title="Video">
                                    <img alt="" src="{{ asset('frontendassets/images/about/5.jpg') }}"
                                        class="img-responsive img-fullwidth mt-10 ml-30 ml-xs-0 ml-sm-0">
                                </a>
                            </div>
                            
                        </div> 
                    </div>
                </div>
            </div>
        </div>
        <!-- Introduction Area End Here -->
<!-- Object Area Start Here -->
<div class="about-page2-area">
            <div class="container">
                <div class="row about-page2-inner">
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif
                    @foreach ($sites as $site)
                    @if ($site->site_key=='objective')
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                         <div class="about-page-img-holder">
                            <img src=" {{ asset('uploads/files/'.$site->imglink)}}" class="img-responsive" alt="about">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <h2 class="title-default-left">{{$site->site_name}}</h2>
                        <p>{{$site->site_value}}</p>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
        <div class="about-page1-area">
            <div class="container">
                <div class="row about-page1-inner">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="about-page-content-holder">
                            @foreach ($sites as $site)
                                        @if ($site->site_key=='missionaboutus')
                            <div class="content-box">
                                <h2>{{$site->site_name}}</h2>
                                <p>{{$site->site_value}}</p>
                            </div>
                            @endif
                            @endforeach
                            @foreach ($sites as $site)
                                 @if ($site->site_key=='visionaboutus')
                            <div class="content-box">
                                <h2>{{$site->site_name}}</h2>
                                <p>{{$site->site_value}}</p>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        @foreach ($sites as $site)
                                 @if ($site->site_key=='visionaboutus')
                        <div class="about-page-img-holder">
                            <img src="{{ asset('uploads/files/'.$site->imglink)}}" class="img-responsive" alt="about">
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- About Page 1 Area End Here -->
    

        <!-- Footer Area Start Here -->
