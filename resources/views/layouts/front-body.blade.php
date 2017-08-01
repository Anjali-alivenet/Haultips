<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Haultips</title>
    <!-- Bootstrap -->
    <link href="{{ asset('public/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('public/assets/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{ asset('public/assets/css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('public/assets/css/responsive.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="homebanner">
    <!--  Header Start Here --> 
    @include('includes.header')
     <!--  Header Ends Here -->
    
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <!--  Form Start  -->
                <section class="findbook text-center">
                    <h1>YOU BOOK!! WE CLEAN!! </h1>
                    <h4>CHOOSE THE PERFECT HOUSE CLEANER AT THE PRICE AND TIME THAT WORKS FOR YOU</h4>

                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <form class="form-horizontal" action="template2.html">
                                <input type="text" class="form-control inputsearch" placeholder="Tell us your postcode">
                                <input type="submit" value="Find Your Cleaner" class="btn btn-block btn-light-search">
                                <img src="{{ asset('public/assets/img/paying_options.png')}}" alt="">
                            </form>
                        </div>
                    </div>
                    <!--div class="panel findform">
                        <div class="col-md-6 medialeft">
                            <div class="media mediagreen">
                                <figure class="pull-left"><img src="img/delivery.png" alt=""></figure>
                                <article class="media-body"><h3>Cleaner Service</h3> Click Here</article>
                            </div>
                            <div class="media greensearch">
                                <div class="pull-left back-to-tab"><i class="fa fa-angle-left"></i></div>
                                <div class="media-body">
                                    <form class="form-main">
                                        <label>Service in <br> India</label>
                                        <div class="input-group">
                                            <input type="text" placeholder="Enter Your Area" class="form-control">
                                            <span class="input-group-btn">
                                                <input type="submit" value="Search" class="btn">
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mediaright">
                            <div class="media mediared">
                                <figure class="pull-left"><img src="img/table.png" alt=""></figure>
                                <article class="media-body"><h3>Post a Task</h3> Click Here</article>
                            </div>
                            <div class="media redsearch">
                                <div class="pull-right back-to-tab"><i class="fa fa-angle-right"></i></div>
                                <div class="media-body">
                                    <form class="form-main">
                                        <label>Post a Task in <br> India</label>
                                        <div class="input-group">
                                            <input type="text" placeholder="Enter Your Area" class="form-control">
                                            <span class="input-group-btn">
                                                <input type="submit" value="Search" class="btn">
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div-->


                </section>
                <!--  Form End  -->
            </div>
        </div>
    </div>
</div>

<!--  Heared End  -->

<!--  Mobile App Start -->
<section class="mobileapp">
    <div class="container">
        <div class="row">
            <div class="col-sm-3"><figure></figure></div>
            <div class="col-sm-9">
                <h2>TRY OUR MOBILE APP</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book.</p>
                <a href="" class="btn btn-lg ">GET THE APP</a>
            </div>
        </div>
    </div>
</section>
<!--  Mobile App End -->
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <section class="waybox">
                <a href="#">
                    <figure><img src="{{ asset('public/assets/img/choosing.jpg')}}" alt=""> </figure>
                    <h3>CHOOSE <br> <span></span></h3>
                    <p>We show you ratings, reviews and prices for top independent house cleaners in your area.</p>
                </a>
            </section>
        </div>
        <div class="col-md-4">
            <section class="waybox">
                <a href="#">
                    <figure><img src="{{ asset('public/assets/img/bookings.jpg')}}" alt=""> </figure>
                    <h3>Book <br> <span></span></h3>
                    <p>View your cleaner's schedule and instantly book from a desktop, tablet or smartphone.</p>
                </a>
            </section>
        </div>
        <div class="col-md-4">
            <section class="waybox">
                <a href="#">
                    <figure><img src="{{ asset('public/assets/img/pay.jpg')}}" alt=""> </figure>
                    <h3>Pay <br> <span></span></h3>
                    <p>Pay securely online. You are only charged after your service. Not happy? We won't charge</p>
                </a>
            </section>
        </div>
    </div>
</div>

<!--  KEY FEATURES Start -->

<section class="keyfeature">
    <div class="container">
        <h2>KEY FEATURES</h2>
        <h4>MORE REASONS FOR LOVING PROBLAM.COM </h4>
        <div class="row">
            <div class="col-lg-4">
                <aside class="keyfeaturebox">
                    <figure><img src="{{ asset('public/assets/img/weather_icons-14-64.png')}}" alt=""> </figure>
                    <h4>FULLY VETED</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy </p>
                </aside>
            </div>
            <div class="col-lg-4">
                <aside class="keyfeaturebox">
                    <figure><img src="{{ asset('public/assets/img/common_calendar_month_-32.png')}}" alt=""> </figure>
                    <h4>FULLY VETED</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy </p>
                </aside>
            </div>
            <div class="col-lg-4">
                <aside class="keyfeaturebox">
                    <figure><img src="{{ asset('public/assets/img/device_smart-phone_vertical_-32.png')}}" alt=""> </figure>
                    <h4>FULLY VETED</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy </p>
                </aside>
            </div>
            <div class="col-lg-4">
                <aside class="keyfeaturebox">
                    <figure><img src="{{ asset('public/assets/img/hield.png')}}" alt=""> </figure>
                    <h4>FULLY VETED</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy </p>
                </aside>
            </div>
            <div class="col-lg-4">
                <aside class="keyfeaturebox">
                    <figure><img src="{{ asset('public/assets/img/graduationcap.png')}}" alt=""> </figure>
                    <h4>FULLY VETED</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy </p>
                </aside>
            </div>
            <div class="col-lg-4">
                <aside class="keyfeaturebox">
                    <figure><img src="{{ asset('public/assets/img/guarantee.png')}}" alt=""> </figure>
                    <h4>FULLY VETED</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy </p>
                </aside>
            </div>
        </div>
    </div>
</section>

<!--  KEY FEATURES End -->
<!--  Client Start -->
<section class="clientbox">
    <div class="container">
        <div class="col-lg-10 col-lg-offset-1">
            <h2>WHAT CLIENT SAYS</h2>
            <h4>POSITIVE REVIEWS FOR LOVING PROBLAM.COM </h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            <br>
            <p>- Client Name, Company Name</p>
        </div>
    </div>
</section>
<!--  Client End -->

<!-- Our Client Start -->

<!--  Our Client Start -->

<div class="container">
    <section class="booking text-center">
        <h2>READY TO BOOK NOW?? <a href="#" class="btn">BOOK A CLEANER</a></h2>
    </section>
</div>


<!-- Modal -->
<div class="modal modalshad" id="myModal">
    <div class="modal-dialog modal-problam">

        <!-- Modal loginform content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" id="modal-problam-close">&times;</button>
                <h4 class="modal-title">Welcome back</h4>
            </div>
            <div class="modal-body" id="myform">
                <form method="post" action="{{url('login')}}" id="loginform">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="text" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="Password" class="form-control" name="password">
                    </div>
                    <div class="form-group">
                        <input type="radio" id="radio01" name="login_type" checked value="1">
                        <label for="radio01" class="text-lowercase"><span></span><small>Cleaner</small> </label>
                        &nbsp; &nbsp;
                        <input type="radio" id="radio02" name="login_type" value="2">
                        <label for="radio02" class="text-lowercase"><span></span><small>Tasker</small> </label>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-block btn-lg" value="Login">
                    </div>
                    @if (session('msg'))
                        <div class="alert alert-danger text-center">
                            {{ session('msg') }}
                        </div>
                    @endif

                    <div class="form-group">
                        <input type="checkbox" id="radio03" name="radio">
                        <label for="radio03" class="text-lowercase"><span></span><small>Remember me</small> </label>
                        <br>
                        <a style="margin-left:29px;" href="#" id="forgetlink">Forgot Password?</a>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <p class="text-center"><i class="fa fa-user-plus"></i> Not a member? <a href="{{url('register')}}">Create Account!</a></p>
            </div>
        </div>
        <!-- Modal Forgot content-->
        <div class="modal-content" id="forgetform">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Forgot your password?</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="{{url('resetpass')}}">
                    {!! csrf_field() !!}
                    <div class="alert alert-danger text-center">No account found for e-mail 'abcdemo@testmail.com' </div>
                    <div class="form-group">
                        <label>Your E-mail Address</label>
                        <input type="email" required class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-block btn-lg" value="Reset password">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <p class="text-center"><a href="#" id="loginback">Back</a></p>
            </div>
        </div>

    </div>
</div>
<!--  Footer Start  -->
@include('includes.footer')
<!--  Footer End  -->


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{ asset('public/assets/js/jquery.min.js')}}"></script>
<script src="{{ asset('public/assets/js/jquery.validate.min.js')}}"></script>
<script src="{{ asset('public/assets/js/additional-methods.min.js')}}"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ asset('public/assets/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('public/assets/js/scrolltopcontrol.js')}}"></script>
<script src="{{ asset('public/assets/js/script.min.js')}}"></script>

</body>
</html>