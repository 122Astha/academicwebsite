   <!-- Footer Area Start Here -->
   <footer>
            <div class="footer-area-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box">
                                <a href="index.html"><img class="img-responsive" src="img/logo-footer.png" alt="logo"></a>
                                <div class="footer-about">
                                    <p>Praesent vel rutrum purus. Nam vel dui eu sus duis dignissim dignissim. Suspenetey disse at ros tecongueconsequat.Fusce sit amet rna feugiat.</p>
                                </div>
                                <ul class="footer-social">
                                    <li><a href="https://www.facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="https://www.twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="https://www.linkedin.com"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="https://www.pinterest.com"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                    <li><a href="https://www.rss.com"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                    <li><a href="https://www.google.com"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box">
                                <h3>Featured Links</h3>
                                <ul class="featured-links">
                                    <li>
                                        <ul>
                                            
                                            <li><a href="aboutus.php">About Us</a></li>
                                            <li><a href="course.php">Course</a></li>
                                            <li><a href="notice.php">Examination</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li><a href="teachers.php">Teachers</a></li>
                                            <li><a href="gallery.php">Pages</a></li>
                                            <li><a href="contact.php">Contact</a></li>
                                         
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box">
                                <h3>Information</h3>
                                <ul class="corporate-address">
                                    @foreach ($sites as $site)
                                    @if ($site->site_key=='contact')
                                    <p><a href="tel:{{ $site->site_value }}">{{ $site->site_value }}</a></p>
                                    @endif
                                    @endforeach
                                    @foreach ($sites as $site)
                                    @if ($site->site_key=='email')
                                    <p><a href="mailto:{{ $site->site_value }}"></a>{{ $site->site_value }}</p>
                                    @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box">
                            
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d112488.24760131458!2d83.88657799411769!3d28.229855807896243!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3995937bbf0376ff%3A0xf6cf823b25802164!2sPokhara!5e0!3m2!1sen!2snp!4v1631172772593!5m2!1sen!2snp" width="250" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                     
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-area-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                            <p>&copy; Copyright by Xdezo Technologies</p>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-right link" >
                            <ul class="payment-method"  >
                                <li>
                                <a href="#">Terms of user/</a>
                                </li>
                                <li>
                                <a href="#">License/</a>
                                </li>
                                <li>
                                <a href="#">Support</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Area End Here -->
    </div>
    <!-- Main Body Area End Here -->
    <!-- jquery-->
    <script src="{{ asset('frontend/js/jquery-2.2.4.min.js') }}" type="text/javascript"></script>
    <!-- Plugins js -->
    <script src="{{ asset('frontend/js/plugins.js')}}" type="text/javascript"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('frontend/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <!-- WOW JS -->
    <script src="{{ asset('frontend/js/wow.min.js')}}"></script>
    <!-- Nivo slider js -->
    <script src="{{ asset('frontend/vendor/slider/js/jquery.nivo.slider.js')}}" type="text/javascript"></script>
    <script src="{{ asset ('frontend/vendor/slider/home.js')}}" type="text/javascript"></script>
    <!-- Owl Cauosel JS -->
    <script src="{{ asset('frontend/vendor/OwlCarousel/owl.carousel.min.js')}}" type="text/javascript"></script>
    <!-- Meanmenu Js -->
    <script src="{{ asset('frontend/js/jquery.meanmenu.min.js')}}" type="text/javascript"></script>
    <!-- Srollup js -->
    <script src="{{ asset('frontend/js/jquery.scrollUp.min.js')}}" type="text/javascript"></script>
    <!-- jquery.counterup js -->
    <script src="{{ asset('frontend/js/jquery.counterup.min.js')}}"></script>
    <script src="{{ asset('js/waypoints.min.js')}}"></script>
    <!-- Countdown js -->
    <script src="{{ asset ('frontend/js/jquery.countdown.min.js')}}" type="text/javascript"></script>
    <!-- Isotope js -->
    <script src="{{ asset ('frontend/js/isotope.pkgd.min.js')}}" type="text/javascript"></script>
    <!-- Magic Popup js -->
    <script src="{{ asset(' frontend/js/jquery.magnific-popup.min.js')}}" type="text/javascript"></script>
    <!-- Gridrotator js -->
    <script src="{{ asset (' frontend/js/jquery.gridrotator.js')}}" type="text/javascript"></script>
     <!-- Select2 Js -->
    <script src="{{ asset('frontend/js/select2.min.js')}}" type="text/javascript"></script>
     <!-- Validator js -->
    <script src="{{ asset('frontend/js/validator.min.js')}}" type="text/javascript"></script>
     <!-- Nouislider Js -->
    <script src="{{ asset('frontend/vendor/noUiSlider/nouislider.min.js')}}" type="text/javascript"></script>
    <!-- Custom Js -->
    <script src="{{ asset('frontend/js/main.js')}}" type="text/javascript"></script>
</body>

</html>