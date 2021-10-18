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
                     <h1>Teacher</h1>
                     <ul>
                         <li><a href="{{asset('index')}}">Home</a> -</li>
                         <li>Teacher</li>
                     </ul>
                 </div>
             </div>
     </div>
        <!-- Inner Page Banner Area End Here -->
        <!-- Lecturers Page 1 Area Start Here -->
        <div class="lecturers-page1-area">
            <div class="container">
                <div class="row">
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif
                    @foreach ($teachers as $teacher)
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                          <a href="{{ url('teacher_details/'.$teacher->id) }}">
                                <div class="single-item">
                                    <div class="lecturers1-item-wrapper">
                                        <div class="lecturers-img-wrapper">
                                            <img class="img-responsive" src="{{asset('uploads/files/'.$teacher->img_link)  }}" alt="team">
                                        </div>
                                        <div class="lecturers-content-wrapper">
                                            <h3 class="item-title">{{ $teacher->name }}</h3>
                                            <h5 class="mt-0 sub-title mb-15">{{ $teacher->post }}</h5>
                                        
                                        </div>
                                    </div>
                                </div>
                          </a>
                        </div>
                      @endforeach
                </div>
            </div>
        </div>
        <!-- Lecturers Page 1 Area End Here -->
        <!-- Footer Area Start Here -->
