
        <!-- Header Area Start Here -->
        <header>
            <div id="header1" class="header1-area">
                <div class="main-menu-area bg-primary" id="sticker">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-3">
                                <div class="logo-area">
                                    @foreach ($sites as $site)
                                    @if ($site->site_key=='logo')
                                   <img src="{{ asset('uploads/files/'.$site->imglink) }}"/>
                                   @endif
                                   @endforeach
                                </div>
                                
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-9">
                                <nav id="desktop-nav">
                                    <ul>
                                        <li class="active"><a href="{{ url('index')}}">Home</a>
                                            
                                        </li>
                                        <li class=""><a href="#">About </a>
                                            <ul>
                                                <li class=""><a href="{{ url('aboutus')}}">About Us</a></li>
                                                <li><a href="{{ url('messages')}}">Message</a></li>
                                                <li><a href="{{ url('planning')}}">Planning</a></li>
                                                
                                            </ul>
                                        </li>
                                        <li><a href="#">Course</a>
                                            <ul class="dropdown">
                                                @foreach ($categories as $category)
                                                  <li><a href="{{ url('courses/'.$category->c_id) }}">{{ $category->c_name }}</a></li>
                                                @endforeach
                                              </ul>
                                        </li>
                                        <li><a href="#">Examination</a>
                                            <ul>
                                                <li><a href="{{ url('notices')}}">Notice</a></li>
                                                <li><a href="{{ url('results')}}">Result</a></li>
                                               
                                            </ul>
                                        </li>
                                        <li><a href="teachers">Teachers</a>
                                           
                                           </li>
                                             
                                        <li><a href="#">Pages</a>
                                            <ul>
                                                <li><a href="{{ url('galleries')}}">Gallery </a></li>
                                                <li><a href="{{ url('events')}}">Events</a></li>
                                                <li><a href="{{ url('blogs')}}">Blogs</a></li>
                                                <li><a href="{{ url('newses')}}">News</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ url('contacts')}}">Contact</a>
                                            
                                        </li>
                                        
                                        
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-lg-2 col-md-2 hidden-sm">
                                <div class="apply-btn-area">
                                    <a href="{{ url('admissions')}}" class="apply-now-btn">Addmission</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu Area Start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul>
                                        <li><a href="index">Home</a>
                                         
                                        </li>
                                        <li class=""><a href="#">About </a>
                                            <ul>
                                                <li class=""><a href="{{ url('aboutus')}}">About Us</a></li>
                                                <li><a href="{{ url('message')}}">Message</a></li>
                                                <li><a href="{{ url('planning')}}">Planning</a></li>
                                                
                                            </ul>
                                        </li>
                                        <li><a href="course">Courses</a>
                                            
                                        </li>
                                        <li><a href="#">Examination</a>
                                            <ul>
                                                <li><a href="{{ url('notice')}}">Notice</a></li>
                                                <li><a href="{{ url('result')}}">Result</a></li>
                                               
                                            </ul>
                                        </li>
                                        <li><a href="{{ url('teachers')}}">Teachers</a>
                                           
                                           </li>
                                              
                                           <li><a href="#">Pages</a>
                                            <ul>
                                                <li><a href="{{ url('gallery')}}">Gallery </a></li>
                                                <li><a href="{{ url('event')}}">Events</a></li>
                                                <li><a href="{{ url('blog')}}">Blogs</a></li>
                                                <li><a href="{{ url('news')}}">News</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ url('contact')}}">Contact</a>
                                            
                                            </li>
                                            <li>          <div class="apply-btn-area">
                                    <a href="{{ url('admission')}}" class="apply-now-btn">Addmission</a>
                                </div></li>
                                    
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu Area End -->
        </header>
          <!-- Header Area End Here -->
