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
                           <h1>Course Details</h1>
                           <ul>
                               <li><a href="{{asset('index')}}">Home</a> -</li>
                               <li>Course Details</li>
                           </ul>
                       </div>
                   </div>
           </div>
        <!-- Inner Page Banner Area End Here -->
        <!-- Courses Page 5 Area Start Here -->
        <div class="courses-page-area5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                            <div class="course-details-inner">
                                <h2 class="title-default-left title-bar-high">{{ $course_detail->name }}</h2>
                                <img src="{{ asset('uploads/files/'.$course_detail->imglink) }}" class="img-responsive" alt="course">
                                <div class="course-details-tab-area">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="tab-content">
                                                <div class="tab-pane fade active in" id="description">
                                                    <h3 class="sidebar-title">Course Description</h3>
                                                    <p>{{ $course_detail->text }}</p>
                                                
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>    
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                <div class="sidebar-box">
                                    <div class="sidebar-box-inner">
                                        <h3 class="sidebar-title">Class Categories</h3>
                                        <ul class="sidebar-categories">
                                            @foreach ($course as $courses)
                                            <li class=""><a href="{{ url('course_details/'.$courses->id) }}">{{ $courses->name }}</a></li>
                                        @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
              </div>
           </div>
       </div>
        <!-- Courses Page 5 Area End Here -->
        <!-- Footer Area Start Here -->
        @endsection