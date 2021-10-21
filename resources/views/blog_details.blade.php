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
                    <h1>Blog Details</h1>
                    <ul>
                        <li><a href="{{asset('index')}}">Home</a> -</li>
                        <li>Details</li>
                    </ul>
                </div>
            </div>
    </div>
        <!-- Inner Page Banner Area End Here -->
        <!-- Blog Details Page Area Start Here -->
        <div class="research-details-page-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                        <div class="row research-details-inner">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <img src="{{ asset('uploads/files/'.$blog_details->img_link) }}" class="img-responsive" alt="research">
                                <h2 class="title-default-left-bold title-bar-high"><a href="#">{{ $blog_details->tittle }}</a></h2>
                                <p>{{ $blog_details->text}}</p>
                                <p><p>{{ $blog_details->details}}</p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <div class="sidebar">
                            <div class="sidebar-box">
                                <div class="sidebar-box-inner">
                                    <h3 class="sidebar-title">Latest Blogs</h3>
                                    <div class="sidebar-latest-research-area">
                                        <ul>
                                            @foreach ($blog as $blogs)
                                            <li>
                                                <div class="latest-research-img">
                                                    <a href="{{ url('blog_details/'.$blogs->id) }}"><img src="{{ asset('uploads/files/'.$blogs->img_link) }}" class="img-responsive" alt="skilled"></a>
                                                </div>
                                                <div class="latest-research-content">
                                                    <a>{{ $blogs->tittle }}</a>
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
        <!-- Blog Details Page Area End Here -->
        @endsection