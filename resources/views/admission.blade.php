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
           <div class="inner-page-banner-area" style="background-image: url({{'uploads/files/'.$site->imglink}});">
               @endif
               @endforeach  
                   <div class="container">
                       <div class="pagination-area">
                           <h1>Admission</h1>
                           <ul>
                               <li><a href="{{asset('index')}}">Home</a> -</li>
                               <li>Admission</li>
                           </ul>
                       </div>
                   </div>
           </div>
        <!-- Inner Page Banner Area End Here -->
        <!-- Registration Page Area Start Here -->
        <div class="registration-page-area bg-secondary">
            <div class="container">
                <h2 class="sidebar-title">Admission</h2>
                <div class="registration-details-area inner-page-padding">
                                           <form id="job_apply_form" name="job_apply_form" action="{{ route('admission.store') }}"
                                                        method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <label>Name <small>*</small></label>
                                                                    <input name="name" type="text" placeholder="Enter Name" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <label>Email <small>*</small></label>
                                                                    <input name="email" class="form-control required email" type="email"
                                                                        placeholder="Enter Email">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <label>Phone/Tel <small>*</small></label>
                                                                    <input name="phone" class="form-control" type="number"
                                                                        placeholder="Enter Phone">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <div class="form-group">
                                                                    <label>Address<small>*</small></label>
                                                                    <input name="address" class="form-control" type="text"
                                                                        placeholder="Enter Address">
                                                                </div>
                                                            </div>
                                                                        <div class="col-sm-3">
                                                                            <div class="form-check">
                                                                            <label>Skill</label><br>
                                                                        <label class="form-check-label">
                                                                            <input type="checkbox" class="form-check-input" name="skill" id="" value="C++" checked>
                                                                            C++
                                                                        </label><br>
                                                                        <label class="form-check-label">
                                                                            <input type="checkbox" class="form-check-input" name="skill" id="" value="Python">
                                                                            Python
                                                                        </label> <br>
                                                                        <label class="form-check-label">
                                                                            <input type="checkbox" class="form-check-input" name="skill" id="" value="Html/css">
                                                                            Html/css
                                                                        </label>
                                                                            </div>
                                                                        </div>
                                                            <div class="col-sm-3">
                                                                <label>Gender</label><br>
                                                                <label class="custom-control custom-radio">
                                                                    <input type="radio" name="gender" id="" value="Male"
                                                                        class="custom-control-input">Male
                                                                    <span class="custom-control-indicator"></span>
                                                                    <span class="custom-control-description"></span>
                                                                </label><br>
                                                                <label class="custom-control custom-radio">
                                                                    <input type="radio" name="gender" id="" value="Female"
                                                                        class="custom-control-input">Female
                                                                    <span class="custom-control-indicator"></span>
                                                                    <span class="custom-control-description"></span>
                                                                </label>

                                                            </div>
                                                            <div class="col-sm-3">
                                                                <div class="form-group">
                                                                    <label>Ward no.<small>*</small></label>
                                                                    <select name="ward_no" class="form-control required">
                                                                        <option value="1">1</option>
                                                                        <option value="2">2</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                                <div class="row">
                                                                    <div class="form-group">
                                                                        <label>Message <small>*</small></label>
                                                                        <textarea name="message" class="form-control required" rows="5"
                                                                            placeholder="Your cover letter/message sent to the employer"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-3">
                                                                        <div class="form-group">
                                                                            <label>Status<small>*</small></label>
                                                                            <select name="status" class="form-control required">
                                                                                <option value="Active">Active</option>
                                                                                <option value="Deactive">Deactive</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <div class="form-group">
                                                                <input name="form_botcheck" class="form-control" type="hidden" value="" />

                                                                <button class="py-4 btn btn-primary font-weight-bolder px-9" type="submit"
                                                                    name="submit">Submit</button>
                                                            </div>
                                            </form>
                </div>
            </div>
        </div>

        {{--  --}}
        {{--  --}}
        {{--  --}}
     
        <!-- Registration Page Area End Here -->
        <!-- Footer Area Start Here -->
 