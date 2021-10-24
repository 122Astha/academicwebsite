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
                           <h1>Contact</h1>
                           <ul>
                               <li><a href="{{asset('index')}}">Home</a> -</li>
                               <li>Contact</li>
                           </ul>
                       </div>
                   </div>
           </div>
        <!-- Inner Page Banner Area End Here -->
        <!-- Contact Us Page 1 Area Start Here -->
        <div class="contact-us-page1-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="contact-us-info1">
                            <ul>
                                <li>
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <h3>Phone</h3>
                                    @foreach ($sites as $site)
                                    @if ($site->site_key=='contact')
                                    <p><a href="tel:{{ $site->site_value }}"></a>{{ $site->site_value }}</p>
                                    @endif
                                    @endforeach
                                <li>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <h3>Address</h3>
                                    @foreach ($sites as $site)
                                    @if ($site->site_key=='location')
                                    <p>{{ $site->site_value }}</p>
                                    @endif
                                    @endforeach
                                </li>
                                <li>
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                    <h3>E-mail</h3>
                                    @foreach ($sites as $site)
                                    @if ($site->site_key=='email')
                                    <p><a href="mailto:{{ $site->site_value }}"></a>{{ $site->site_value }}</p>
                                    @endif
                                    @endforeach
                                </li>
                                <li>
                                    <h3>Follow Us</h3>
                                    <ul class="contact-social">
                                        @foreach ($sites as $site)
                                        @if ($site->site_key=='facebook')
                                        <li><a href="{{ $site->site_value }}" data-bg-color="#3B5998"><i class="fa fa-facebook"></i></a></li>
                                        @endif
                             
                                        @endforeach
                             
                                             @foreach ($sites as $site)
                                        @if ($site->site_key=='twitter')
                                        <li><a href="{{ $site->site_value }}" data-bg-color="#02B0E8"><i class="fa fa-twitter"></i></a></li>
                                        @endif
                             
                                        @endforeach
                             
                                            @foreach ($sites as $site)
                                        @if ($site->site_key=='google')
                                        <li><a href="{{ $site->site_value }}" data-bg-color="#D71619"><i class="fa fa-google-plus"></i></a></li>
                                        @endif
                                        @endforeach
                             
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h2 class="title-default-left title-bar-high">Contact With Us</h2>
                            </div>
                        </div>
                        <div class="row">
                            <form id="contact_form" name="contact_form" class="" action="{{ route('message.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                  <div class="row">
                                    <div class="col-sm-6">
                                      <div class="form-group">
                                        <label>Name <small>*</small></label>
                                        <input name="name" class="form-control" type="text" placeholder="Enter Name" >
                                      </div>
                                    </div>
                                    <div class="col-sm-6">
                                      <div class="form-group">
                                        <label>Email <small>*</small></label>
                                        <input name="email" class="form-control required email" type="email" placeholder="Enter Email">
                                      </div>
                                    </div>
                                  </div>
                  
                                  <div class="row">
                                    <div class="col-sm-6">
                                      <div class="form-group">
                                        <label>Subject <small>*</small></label>
                                        <input name="subject" class="form-control required" type="text" placeholder="Enter Subject">
                                      </div>
                                    </div>
                                    <div class="col-sm-6">
                                      <div class="form-group">
                                        <label>Phone</label>
                                        <input name="contact" class="form-control" type="number" placeholder="Enter Phone">
                                      </div>
                                    </div>
                                  </div>
                  
                                  <div class="form-group">
                                    <label>Message</label>
                                    <textarea name="details" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
                                  </div>
                                  <div class="form-group">
                  
                                <button class="py-4 btn btn-primary " type="submit" name="submit" >Send Your Message</button>
                                  </div>
                          </form>
                        </div>
                    </div>
                </div>
            </div>
               <div class="container-fluid">
                <div class="row">
                <div class="footer-box " style="margin-top:30px;">
                            
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d112488.24760131458!2d83.88657799411769!3d28.229855807896243!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3995937bbf0376ff%3A0xf6cf823b25802164!2sPokhara!5e0!3m2!1sen!2snp!4v1631172772593!5m2!1sen!2snp" width="1500" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                 
                        </div>
                </div>
            </div>
        </div>
        <br><br>
        <!-- Contact Us Page 1 Area End Here -->
        <!-- Footer Area Start Here -->

