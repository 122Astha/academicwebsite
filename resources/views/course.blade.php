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
                           <h1>Course</h1>
                           <ul>
                               <li><a href="{{asset('index')}}">Home</a> -</li>
                               <li>Course</li>
                           </ul>
                       </div>
                   </div>
           </div>
        <!-- Inner Page Banner Area End Here -->
        <!-- Courses Page 1 Area Start Here -->
        <div class="courses-page-area1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 col-md-push-3">
                        {{-- <div class="row">
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <!-- Listed product show -->
                                @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                                @endif
                                <div role="tabpanel" class="tab-pane active" id="list-view">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <a href="{{ url('course_details/'.$course->id) }}">
                                        <div class="courses-box3">
                                            <div class="single-item-wrapper">
                                                <div class="  hvr-bounce-to-right">
                                                    <img  src="{{asset('uploads/files/'.$course->imglink)  }}" alt="courses">
                                                </div>
                                                <div class="courses-content-wrapper">
                                                    <h3 class="item-title"><a href="{{ url('course_details/'.$course->id) }}">{{ $course->name }}</a></h3>
                                                    <ul class="courses-info">
                                                        <li>1 Year
                                                            <br><span> Course</span></li>
                                                        <li>15
                                                            <br><span> Classes</span></li>
                                                        <li>05 pm - 07 pm
                                                            <br><span> Time</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                         </div> --}}
                         <div class="row">
                            <!-- Tab panes -->
                            @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                            @endif
                            
                                <!-- Listed product show -->
                                <div role="tabpanel" class="tab-pane active" id="list-view">
                                    @foreach($course as $courses)
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="courses-box3">
                                            <div class="single-item-wrapper">
                                                <div class="courses-img-wrapper ">
                                                    <img class="img-responsive" src="{{asset('uploads/files/'.$courses->imglink)  }}" alt="courses">
                                                    
                                                </div>
                                                <div class="courses-content-wrapper">
                                                    <h3 class="item-title"><a href="#">{{ $courses->name }}</a></h3>
                                                    <p class="item-content">Rmply dummy text printing setting industry iLorem ipsum dolor sit consectetuer adipiscing elit et diam nonummy.t’s free demo.</p>
                                                    <ul class="courses-info">
                                                        <li>{{ $courses->duration }}
                                                            <br><span> Duration</span></li>
                                                        <li>{{ $courses->time }}
                                                            <br><span> Time</span></li>
                                                    </ul>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 col-md-pull-9">
                        <div class="sidebar">
                            <div class="sidebar-box">
                                <div class="sidebar-box-inner">
                                    <h3 class="sidebar-title">Find your Course</h3>
                                    <div class="sidebar-find-course">
                                        <form id="checkout-form">
                                            <div class="form-group course-name">
                                                <input id="first-name" placeholder="Course Name" class="form-control" type="text" />
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-select">
                                                    <select id="district" class='select2'>
                                                        @foreach ($categories as $category)
                                                        <option value="0"><a href="{{ url('course_details/'.$course->id) }} ">{{ $category->c_name }}</a></option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <button class="sidebar-search-btn disabled" type="submit" value="Login">Search Course</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-box">
                                <div class="sidebar-box-inner">
                                    <h3 class="sidebar-title">Class Categories</h3>
                                    <ul class="sidebar-categories">
                                        @foreach ($categories as $category)
                                        <li><a href="{{ url('course_details/'.$course->id) }} ">{{ $category->c_name }}</a></li>
                                     @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Courses Page 1 Area End Here -->
