@include('include.header')

<body>
  <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!-- Add your site or application content here -->
    <div id="wrapper">
      <!-- Header Area Start Here -->
      
      @include('include.navbar')
  <!-- Header -->
  @yield('content')

  @include('include.footer')

