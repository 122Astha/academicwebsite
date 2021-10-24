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
     <div class="inner-page-banner-area" style="background-image: url({{'/uploads/files/'.$site->imglink}});">
         @endif
         @endforeach  
             <div class="container">
                 <div class="pagination-area">
                     <h1>Teacher Detail</h1>
                     <ul>
                         <li><a href="{{asset('index')}}">Home</a> -</li>
                         <li>Teacher Detail</li>
                     </ul>
                 </div>
             </div>
     </div>
        <!-- Inner Page Banner Area End Here -->
        <!-- Courses Page 3 Area Start Here -->
        <div class="lecturers-page-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="lecturers-contact-info">
                            <img src="{{asset('uploads/files/'.$teacher_detail->img_link)  }}" class="img-responsive" alt="team">
                            <h2>{{ $teacher_detail->name }}</h2>
                            <h3>{{ $teacher_detail->post }}</h3>
                            <ul class="lecturers-contact">
                                <li><i class="fa fa-phone" aria-hidden="true"></i>{{ $teacher_detail->contact }}</li>
                                <li><i class="fa fa-envelope-o" aria-hidden="true"></i>{{ $teacher_detail->address }}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                        <h3 class="title-default-left title-bar-big-left-close">About Me</h3>
                        <p>{{ $teacher_detail->details}}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Courses Page 3 Area End Here -->
        <!-- Footer Area Start Here -->
