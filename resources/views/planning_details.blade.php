@extends('layout.layout')
@section('content')

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Add your site or application content here -->
    <div id="wrapper">
        <!-- Header Area Start Here -->
      <?php require('include/navbar.php'); ?>
        <!-- Header Area End Here -->
        <!-- Inner Page Banner Area Start Here -->
        @foreach ($sites as $site)
        @if ($site->site_key=='bgimage')
           <div class="inner-page-banner-area" style="background-image: url({{'uploads/files/'.$site->imglink}});">
               @endif
               @endforeach  
                   <div class="container">
                       <div class="pagination-area">
                           <h1>Planning Details</h1>
                           <ul>
                               <li><a href="{{asset('index')}}">Home</a> -</li>
                               <li>Planning Details</li>
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
                                    <div id="countdown"></div>
                                </div>
                                <a href="#"><img src="img/event/5.jpg" alt="event" class="img-responsive"></a>
                            </div>
                            <h2 class="title-default-left-bold-lowhight"><a href="#">Bimply dummy text of the printing and typesetting industry</a></h2>
                            <ul class="event-info-inline title-bar-sm-high">
                                <li><i class="fa fa-calendar" aria-hidden="true"></i>22 December, 2016</li>
                                <li><i class="fa fa-map-marker" aria-hidden="true"></i>NewYork Tower, Melbourne</li>
                            </ul>
                            <p>Bimply dummy text of the printing and typesetting istryrem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuriesp into electronic.simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Bimply dummy text of the printing and typesetting istryrem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuriesp into electronic.simply dummy text of the printing and typesetting industry.</p>
                            <div class="leave-comments">
                                <h3 class="sidebar-title">Join Program</h3>
                                <div class="row">
                                    <div class="contact-form">
                                        <form>
                                            <fieldset>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <input type="text" placeholder="Name" class="form-control">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <input type="email" placeholder="Email" class="form-control">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <input type="text" placeholder="Website" class="form-control">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <textarea placeholder="Comment" class="textarea form-control" id="form-message" rows="8" cols="20"></textarea>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group margin-bottom-none">
                                                        <button type="submit" class="view-all-accent-btn">Post Comment</button>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
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
                                        <li><a href="#">GMAT</a></li>
                                        <li><a href="#">IELTS</a></li>
                                        <li><a href="#">Regular MBA</a></li>
                                        <li><a href="#">BBA</a></li>
                                        <li><a href="#">CSE</a></li>
                                        <li><a href="#">Diploma</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-box">
                                <div class="sidebar-box-inner">
                                    <h3 class="sidebar-title">Popular Tags</h3>
                                    <ul class="product-tags">
                                        <li><a href="#">Education</a></li>
                                        <li><a href="#">Study</a></li>
                                        <li><a href="#">Class</a></li>
                                        <li><a href="#">Lecturers</a></li>
                                        <li><a href="#">Events</a></li>
                                        <li><a href="#">University</a></li>
                                        <li><a href="#">Date</a></li>
                                        <li><a href="#">Campus</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Event Details Page Area End Here -->
      