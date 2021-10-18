@extends('layout.layout')
@section('content')
{{-- starting slider --}}
<div class="slider1-area overlay-default index1">
    <div class="bend niceties preview-1">
        <div id="ensign-nivoslider-3" class="slides">
            @foreach($sliders as $slider)
            <img src="{{ asset('uploads/files/'.$slider->img_link)}}" alt="slider" title="#slider-direction-1" />
             @endforeach
        </div>
        @foreach($sliders as $slider)
        <div id="slider-direction-1" class="t-cn slider-direction">
            <div class="slider-content s-tb slide-1">
                <div class="title-container s-tb-c">
                    <div class="title1">{{$slider->header}}</div>
                    <p>{{$slider->sub_heading}} </p>

                    <div class="slider-btn-area">
                        <a href="{{'aboutus'}}" class="default-big-btn">Start a Course</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>
  <!-- Slider 1 Area End Here -->
  
  <!-- About 1 Area Start Here -->
  <div class="about1-area">
      <div class="container">
        @foreach ($sites as $site)
        @if ($site->site_key=='welcome tittle')
          <h1 class="about-title wow fadeIn" data-wow-duration="1s" data-wow-delay=".2s">{{ $site->site_name }} </h1>
          <p class="about-sub-title wow fadeIn" data-wow-duration="1s" data-wow-delay=".2s">{{ $site->site_value }}</p>
          <div class="about-img-holder wow fadeIn" data-wow-duration="2s" data-wow-delay=".2s">
              <img src="{{ asset('uploads/files/'.$site->imglink) }}" alt="about" class="img-responsive" />
          </div>
          @endif
            @endforeach
      </div>
  </div>
  <!-- About 1 Area End Here -->
  
  <!-- Video Area Start Here -->
  <div class="video-area overlay-video bg-common-style" style="background-image: url('frontend/img/banner/1.jpg');">
      <div class="container">
        @foreach ($sites as $site)
        @if ($site->site_name=='campustour')
          <div class="video-content">
              <h2 class="video-title">{{ $site->site_key }}</h2>
              <p class="video-sub-title">{{ $site->site_value}}</p>
              <a class="play-btn popup-youtube wow bounceInUp" data-wow-duration="2s" data-wow-delay=".1s" href="http://www.youtube.com/watch?v=1iIZeIy7TqM"><i class="fa fa-play" aria-hidden="true"></i></a>
          </div>
          @endif
          @endforeach
      </div>
  </div>
  <!-- Video Area End Here -->
 
 <!--Why Choose-us Area Start Here -->
 <div class="about-page2-area">
      <div class="container">
          <div class="row about-page2-inner">
            @foreach ($whychooseus as $whychooseuses)
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <h2 class="title-default-left">{{ $whychooseuses->heading }}</h2>
                  <p>{{ $whychooseuses->text }}</p>
                  {{-- <ul>
                      <li><a href="#">Materiality & Interpretation</a></li>
                      <li><a href="#">Design Management and Cultural Enterprise</a></li>
                      <li><a href="#">Experience Design (XD)</a></li>
                      <li><a href="#">Sound Design; Social Media and SEO</a></li>
                  </ul> --}}
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <div class="video-area2 overlay-video bg-common-style video-margin-top" style="background-image: url('frontend/img/banner/6.jpg');">
                      <div class="video-content">
                          <a class="play-btn popup-youtube" href="http://www.youtube.com/watch?v=1iIZeIy7TqM"><i class="fa fa-play" aria-hidden="true"></i></a>
                      </div>
                  </div>
              </div>
              @endforeach
          </div>
      </div>
  </div>
  <!-- Why choose-us Area End Here -->
  
  <!-- Counter Area Start Here -->
  <div class="counter-area bg-primary-deep" style="background-image: url('frontend/img/banner/4.jpg');" >
     <div class="container">
         <div class="row">
           @foreach ($sites as $site)
           @if ($site->site_key=='progressbar')
             <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 counter1-box wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".20s">
                 <h2 class="about-counter title-bar-counter" data-num="80">{{ $site->site_value }}</h2>
                 <p>{{ $site->site_name }}</p>
             </div>
                         @endif
               @endforeach
         </div>
     </div>
 </div>
 <!-- Counter Area End Here -->
  

  <!-- News and Event Area Start Here -->
  {{-- <div class="news-event-area">
      <div class="container">
          <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 news-inner-area">
                  <h2 class="title-default-left">Latest News</h2>
                  @foreach ($newses as $news)
                  <ul class="news-wrapper">
                      <li>
                       
                          <div class="news-img-holder ">
                              <a href="#"><img src="{{ asset('uploads/files/'.$news->imglink) }}"  class="img-responsive" alt="news"></a>
                          </div>
                          <div class="news-content-holder ml-5">
                              <h3><a href="single-news.html">{{ $news->title }}</a></h3>
                              <div class="post-date">{{ $news->date }}</div>
                              <p>{{ $news->text }}</p>
                          </div>
                      </li>
                  </ul>
                  @endforeach
                  <div class="news-btn-holder">
                      <a href="{{ url('news_details/'.$news->id) }}" class="view-all-accent-btn">View All</a>
                  </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 event-inner-area">
                  <h2 class="title-default-left">Upcoming Events</h2>
                  @foreach ($events as $event)
                  <ul class="event-wrapper">
                      <li class="wow bounceInUp" data-wow-duration="2s" data-wow-delay=".1s">
                          <div class="event-calender-wrapper">
                              <div class="event-calender-holder">
                                  <h3>{{$event->date}}</h3>
                                  <span>{{$event->time}}</span>
                              </div>
                          </div>
                          <div class="event-content-holder">
                              <h3><a href="single-event.html">{{ $event->tittle }}</a></h3>
                              <p>{{$event->details}}</p>
                              <ul>
                                  <li>{{$event->date}}</li>
                                  <li>{{$event->address}}</li>
                              </ul>
                          </div>
                      </li>
                  </ul>
                  <br>
                  @endforeach
                  <div class="event-btn-holder">
                      <a href="{{ url('event_details/'.$event->id) }}" class="view-all-primary-btn">View All</a>
                  </div>
              </div>
          </div>
      </div>
  </div> --}}
  <!-- News and Event Area End Here -->
  <div class="news-event-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 news-inner-area">
                <h2 class="title-default-left">Latest News</h2>
                <ul class="news-wrapper">
                    @foreach ($newses as $news)
                    <li>
                        <div class="news-img-holder">
                            <a href="#"><img src="{{ asset('uploads/files/'.$news->imglink) }} " width="150px;" class="img-responsive" alt="news"></a>
                        </div>
                        <div class="news-content-holder">
                            <h3><a href="single-news.html">{{ $news->title }}</a></h3>
                            <div class="post-date">{{ $news->date }}</div>
                            <p>{{ $news->text }}</p>
                        </div>
                    </li>
                    @endforeach
                </ul>
                <div class="news-btn-holder">
                    <a href="#" class="view-all-accent-btn">View All</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 event-inner-area">
                <h2 class="title-default-left">Upcoming Events</h2>
                @foreach ($events as $event)
                <ul class="event-wrapper">
                    <li class="wow bounceInUp" data-wow-duration="2s" data-wow-delay=".1s">
                        <div class="event-calender-wrapper">
                            <div class="event-calender-holder">
                                <h3>{{$event->date}}</h3>
                                <span>{{$event->time}}</span>
                            </div>
                        </div>
                        <div class="event-content-holder">
                            <h3><a href="single-event.html">{{ $event->tittle }}</a></h3>
                            <p>{{$event->details}}</p>
                            <ul>
                                <li>{{$event->date}}</li>
                                <li>{{$event->address}}</li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <br>
                @endforeach
                <div class="event-btn-holder">
                    <a href="{{ url('event_details/'.$event->id) }}" class="view-all-primary-btn">View All</a>
                </div>
            </div>
        </div>
    </div>
</div>
 

