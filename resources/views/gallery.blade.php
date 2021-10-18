@extends('layout.layout')
@section('content')


        <!-- Header Area End Here -->
        <!-- Inner Page Banner Area Start Here -->
        @foreach ($sites as $site)
        @if ($site->site_key=='bgimage')
           <div class="inner-page-banner-area" style="background-image: url({{'uploads/files/'.$site->imglink}});">
               @endif
               @endforeach
                   <div class="container">
                       <div class="pagination-area">
                           <h1>Our Gallery</h1>
                           <ul>
                               <li><a href="{{asset('index')}}">Home</a> -</li>
                               <li>Gallery</li>
                           </ul>
                       </div>
                   </div>
           </div>
        <!-- Inner Page Banner Area End Here -->

            <!-- Gallery Area 2 Start Here -->
            <div class="gallery-area2">
                <div class="container" id="inner-isotope">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="isotop-classes-tab isotop-btn">
                                @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                            @endif
                                <a href="#" data-filter="*">All</a>
                                @foreach ($gallerycategories as $gallerycategory)
                                <a href="#" data-filter=".{{ $gallerycategory->g_name }}">{{ $gallerycategory->g_name }}</a>
                              @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="row featuredContainer gallery-wrapper mb-2">
                        @foreach ($galleries as $gallery)
                        @foreach ($gallerycategories as $gallerycategory)
                        @if ($gallerycategory->g_id==$gallery->g_id)
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 {{ $gallerycategory->g_name }}">
                                <img src="{{'uploads/files/'.$gallery->img_link}}" class="img-responsive" alt="gallery" >
                        </div>
                        
                        @endif
                        @endforeach
                        @endforeach

                    </div>
                </div>
            </div>
            <!-- Gallery Area 2 End Here -->

        @endsection





