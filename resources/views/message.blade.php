@extends('layout.layout')
@section('content')


<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Add your site or application content here -->
    <div id="wrapper">
     
        <!-- Inner Page Banner Area Start Here -->
        @foreach ($sites as $site)
        @if ($site->site_key=='bgimage')
           <div class="inner-page-banner-area" style="background-image: url({{'uploads/files/'.$site->imglink}});">
               @endif
               @endforeach  
                   <div class="container">
                       <div class="pagination-area">
                           <h1>Message</h1>
                           <ul>
                               <li><a href="{{asset('index')}}">Home</a> -</li>
                               <li>Message</li>
                           </ul>
                       </div>
                   </div>
           </div>
        <!-- Inner Page Banner Area End Here -->
        <!-- About Page 1 Area Start Here -->
        <div class="about-page1-area">
            <div class="container">
                <div class="row about-page1-inner">
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif
                    @foreach ($sites as $site)
                    @if ($site->site_key=='message from principal')
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="about-page-content-holder">
                            <div class="content-box">
                                <h2>{{ $site->site_name }}</h2>
                                <p>{{ $site->site_value}}</p>
                               <br><br> <p><span style="color: red;">Prof.Raj Sharma <br>Principle</span></p>
                               
                            </div>
                           
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="about-page-img-holder">
                            <img src="{{ asset('uploads/files/'.$site->imglink)}}" class="img-responsive" alt="about">
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
        <!-- About Page 1 Area End Here -->
       
     <!-- About Page 1 Area Start Here -->
        <div class="about-page1-area">
            <div class="container">
                <div class="row about-page1-inner">
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif
                    @foreach ($sites as $site)
                    @if ($site->site_key=='message from dean')
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="about-page-img-holder">
                            <img src="{{ asset('uploads/files/'.$site->imglink)}}" class="img-responsive" alt="about">
                        </div>
                    </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="about-page-content-holder">
                            <div class="content-box">
                                <h2>{{$site->site_name}}</h2>
                                <p>{{$site->site_value}}</p>
                               <br><br> <p><span style="color: red;">Prof.Raj Sharma <br>Dean </span></p>
                               
                            </div>
                           
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
        <!-- About Page 1 Area End Here -->

