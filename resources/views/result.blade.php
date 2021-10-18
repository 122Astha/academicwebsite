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
                           <h1>Result</h1>
                           <ul>
                               <li><a href="{{asset('index')}}">Home</a> -</li>
                               <li>Result</li>
                           </ul>
                       </div>
                   </div>
           </div>
        <!-- Inner Page Banner Area End Here -->
        <!-- Event Page Area Start Here -->
        <div class="event-page-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                        <div class="row event-inner-wrapper">
                            <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-6">
                                <div class="single-item">
                                    
                                    <div class="item-content">
                                        <h3 class="sidebar-title"><a href="#">WordPress  MeetUp Conference 2017</a></h3>
                                        
                                        <ul class="event-info-block">
                                            <li><i class="fa fa-calendar" aria-hidden="true"></i>22 December, 2016</li>
                                            <li><i class="fa fa-map-marker" aria-hidden="true"></i>NewYork Tower, Melbourne</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-6">
                                <div class="single-item">
                                    
                                    <div class="item-content">
                                        <h3 class="sidebar-title"><a href="#">WordPress  MeetUp Conference 2017</a></h3>
                                        
                                        <ul class="event-info-block">
                                            <li><i class="fa fa-calendar" aria-hidden="true"></i>22 December, 2016</li>
                                            <li><i class="fa fa-map-marker" aria-hidden="true"></i>NewYork Tower, Melbourne</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-6">
                                <div class="single-item">
                                   
                                    <div class="item-content">
                                        <h3 class="sidebar-title"><a href="#">WordPress  MeetUp Conference 2017</a></h3>
                                        
                                        <ul class="event-info-block">
                                            <li><i class="fa fa-calendar" aria-hidden="true"></i>22 December, 2016</li>
                                            <li><i class="fa fa-map-marker" aria-hidden="true"></i>NewYork Tower, Melbourne</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="single-item">
                                   
                                    <div class="item-content">
                                        <h3 class="sidebar-title"><a href="#">WordPress  MeetUp Conference 2017</a></h3>
                                        
                                        <ul class="event-info-block">
                                            <li><i class="fa fa-calendar" aria-hidden="true"></i>22 December, 2016</li>
                                            <li><i class="fa fa-map-marker" aria-hidden="true"></i>NewYork Tower, Melbourne</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <ul class="pagination-center">
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                </ul>
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
                          
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Event Page Area End Here -->
        <!-- Footer Area Start Here -->

