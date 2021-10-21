@extends('layout.layout')
@section('content')

  <!-- Inner Page Banner Area Start Here -->

     <div class="inner-page-banner-area" style="background-image: url({{asset('assets/uploads/backgroundimg.jpg')}});">
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
    

        {{-- Blog area --}}
        <div class="research-details-page-area">
            <div class="container">
                <div class="row">
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
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
                                        <p>{{Illuminate\Support\Str::words($blog->text,10,'.....') }}</p>
                                    </div>
                                </div>
                                @endforeach 
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="text-center">
                                            {{$blogs->links()}}
                                        </div>
                                    </div>
                                </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="sidebar">
                            <div class="sidebar-box">
                                <div class="sidebar-box-inner">
                                    <h3 class="sidebar-title">Search</h3>
                                    <div class="sidebar-find-course">
                                        <form id="checkout-form" action="{{ route('blogSearch') }}" method="GET">
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
                                    <h3 class="sidebar-title">Latest Blogs</h3>
                                    <div class="sidebar-latest-research-area">
                                        <ul>
                                            @foreach ($blogs as $blog)
                                            <li>
                                                <div class="latest-research-img">
                                                    <a href="{{ url('blog_details/'.$blog->id) }}"><img src="{{ asset('uploads/files/'.$blog->img_link) }}" class="img-responsive" alt="skilled">{{ $blog->tittle }}</a>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blogs Area End Here -->
