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
                     <h1>Blog </h1>
                     <ul>
                         <li><a href="{{asset('index')}}">Home</a> -</li>
                         <li>Blog</li>
                     </ul>
                 </div>
             </div>
     </div>
        <!-- Inner Page Banner Area End Here -->
        <!--Blog Area Start Here -->
        <div class="research-page2-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                          @if ($message = Session::get('success'))
                          <div class="alert alert-success">
                              <p>{{ $message }}</p>
                          </div>
                          @endif
                          @foreach ($blogs as $blog)
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="research-box2">
                                   <a href="{{ url('blog_details/'.$blog->id) }}">
                                    <div class="research-img-holder">
                                        <img src="{{asset('uploads/files/'. $blog->img_link) }}" alt="research" class="img-responsive">
                                    </div>
                                    <div class="research-details ml-5" style="font-size:20px; ">
                                        {{ $blog->tittle }}  </a>
                                     </div>
                                    <p>{{$blog->text}}</p>
                                </div>
                            </div>
                         @endforeach 
                    </div>
                    <div class="sidebar col-md-3">
                        <div class="sidebar">
                            <div class="sidebar-box">
                                <div class="sidebar-box-inner" >
                                    <h3 class="sidebar-title">Search</h3>
                                    <div class="sidebar-find-course">
                                        <form id="checkout-form">
                                            <div class="form-group course-name">
                                                <input id="first-name" placeholder="Research Name" class="form-control" type="text" />
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
                                    <h3 class="sidebar-title">Latest Blogs</h3>
                                    <div class="sidebar-latest-research-area">
                                        @foreach ($blogs as $blog)
                                        <ul>
                                            <li><a href="{{ url('blog_details/'.$blog->id) }}">{{ $blog->tittle }}</a>
                                                
                                            </li>
                                        </ul>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blogs Area End Here -->
