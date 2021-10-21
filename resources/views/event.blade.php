@extends('layout.layout')
@section('content')



   <!-- Inner Page Banner Area Start Here -->
   @foreach ($sites as $site)
   @if ($site->site_key=='bgimage')
      <div class="inner-page-banner-area" style="background-image: url({{'uploads/files/'.$site->imglink}});">
          @endif
          @endforeach  
              <div class="container">
                  <div class="pagination-area">
                      <h1>Event</h1>
                      <ul>
                          <li><a href="{{asset('index')}}">Home</a> -</li>
                          <li>Event</li>
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
                            @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                            @endif
                            @foreach ($Events as $event)
                            
                            <div class="col-lg-12 col-md-6 col-sm-12 col-xs-6">
                                <div class="single-item">
                                    <div class="item-img">
                                        <a href="#"><img src="{{asset('uploads/files/'.$event->img_link)  }}" alt="event" class="img-responsive"></a>
                                    </div>
                                    <div class="item-content">
                                        <h3 class="sidebar-title"><a href="{{ url('event_details/'.$event->id) }}">{{ $event->tittle }}</a></h3>
                                        <p>{{Illuminate\Support\Str::words($event->details,20,'.....') }}</p>
                                        <ul class="event-info-block">
                                            <li><i class="fa fa-calendar" aria-hidden="true"></i>{{ $event->date }}</li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="text-center">
                                        {{$Events->links()}}
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
                                        <form id="checkout-form" action="{{ route('eventSearch') }}" method="GET">
                                            <div class="form-group course-name">
                                                <input id="first-name" placeholder="Type Here . . .." class="form-control" type="text" name="search" required />
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
                                    @foreach ($Events as $event)
                                    <ul class="sidebar-categories">
                                        <li><a href="{{ url('event_details/'.$event->id) }}">{{ $event->tittle }}</a></li>
                                    </ul>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Event Page Area End Here -->
