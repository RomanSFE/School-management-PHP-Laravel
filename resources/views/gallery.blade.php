
 <!DOCTYPE html>
<html>
    
<head>

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="">
        <title>Pathshala - Responsive Education Template</title>

        <!-- Styles -->
        <!-- <link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="assets/css/owl.carousel.min.css" rel="stylesheet" media="screen">
        <link href="assets/css/owl.theme.default.min.css" rel="stylesheet" media="screen"> -->
       <!--  <link href="assets/css/style.css" rel="stylesheet" media="screen"> -->

       <!-- patshala start -->
       <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
       <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
       <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
       <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
       <link rel="stylesheet" href="{{asset('css/styletwo.css')}}">
       <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
       

        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="{{asset('fonts/font-awesome/css/font-awesome.min.css')}}">
        

    </head>
    <body>
        <div class="row nav-row trans-menu">
            <div class="container nav-container">
                <div class="top-navbar">
                 <!--    <div class = "pull-right">
                        <div class="top-nav-social pull-left">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                        <div class="top-nav-login-btn pull-right">
                            <a href="#" data-toggle="modal" data-target="#loginModal"><i class="fa fa-sign-in"></i>LOGIN</a>
                        </div>
                       
                    </div> -->
                    <div class = "clearfix"></div>
                </div> 
                <div class = "clearfix"></div>
                <nav id="pathshalaNavbar" class="navbar navbar-default" role="navigation">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#pathshalaNavbarCollapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="/">CHAPRA MODEL SCHOOL</a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="pathshalaNavbarCollapse">
                        <ul class="nav navbar-nav">
                            <li><a href="/"><i class="fa fa-home"></i>HOME</a></li>
                          
                            <li><a href="{{URL::to('/admission')}}"><i class="fa fa-users"></i>ADMISSIONS</a></li>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="fa fa-picture-o"></i>GALLERY <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{URL::to('/gallery')}}"><i class="fa fa-calendar"></i>CAMPUS GALLERY</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="fa fa-dashboard"></i>DASHBOARD <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{URL::to('/backend')}}"><i class="fa fa-user-secret"></i>ADMIN</a></li>
                                    <li><a href="{{URL::to('/teacher_login')}}"><i class="fa fa-user"></i>TEACHER</a></li>
                                    <!-- <li><a href="dashboard/student-dashboard.html"><i class="fa fa-child"></i>STUDENT</a></li> -->
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="fa fa-file"></i>PAGES <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <!-- <li><a href="gallery.html"><i class="fa fa-picture-o"></i>CAMPUS GALLERY</a></li> -->
                                    <li><a href="{{URL::to('/about')}}"><i class="fa fa-info-circle"></i>ABOUT</a></li>
                                    <li><a href="contact.html"><i class="fa fa-phone-square"></i>CONTACT US</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </nav>
            </div>
        </div>
        
        <!-- Page Title Section -->
        <div class="row page-title page-title-about">
            <div class="container">
                <h2><i class="fa fa-picture-o"></i>CAMPUS GALLERY</h2>
            </div>
        </div>
        
       

        <div class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2>See our titan project</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat possimus et deleniti harum nulla laborum minus eum iste, molestiae aliquam optio veniam dicta, accusantium consequuntur.</p>
                    </div>
                </div>
            </div>
            <div class="row no-padding">
                <div class="col-md-4">
                    <div class="single-projects project-bg-1">
                        <div class="project-hover">
                            <div class="hover-content-table">
                                <div class="hover-content-table-cell">
                                    <div class="hover-contents">
                                        <a class="mgp" href="imagesx/project-bg-1.jpg"><i class="fa fa-search-plus"></i></a>
                                        <h3>Travelling the world</h3>
                                        <p>Photography</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-projects project-bg-2 half-height">
                        <div class="project-hover">
                            <div class="hover-content-table">
                                <div class="hover-content-table-cell">
                                    <div class="hover-contents">
                                        <a class="mgp" href="imagesx/project-bg-2.jpg"><i class="fa fa-search-plus"></i></a>
                                        <h3>Travelling the world</h3>
                                        <p>Photography</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-projects project-bg-3 half-height">
                        <div class="project-hover">
                            <div class="hover-content-table">
                                <div class="hover-content-table-cell">
                                    <div class="hover-contents">
                                        <a class="mgp" href="imagesx/project-bg-3.jpg"><i class="fa fa-search-plus"></i></a>
                                        <h3>Travelling the world</h3>
                                        <p>Photography</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-projects project-bg-4 half-height">
                        <div class="project-hover">
                            <div class="hover-content-table">
                                <div class="hover-content-table-cell">
                                    <div class="hover-contents">
                                        <a class="mgp" href="imagesx/project-bg-4.jpg"><i class="fa fa-search-plus"></i></a>
                                        <h3>Travelling the world</h3>
                                        <p>Photography</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-projects project-bg-5 half-height">
                        <div class="project-hover">
                            <div class="hover-content-table">
                                <div class="hover-content-table-cell">
                                    <div class="hover-contents">
                                        <a class="mgp" href="imagesx/project-bg-5.jpg"><i class="fa fa-search-plus"></i></a>
                                        <h3>Travelling the world</h3>
                                        <p>Photography</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
            
        
        <!-- Footer Section -->
        <div class="row footer-row">
            <div class="container">
                <div class="school-logo">
                    <i class="fa fa-graduation-cap"></i>
                    <h3>PATHSHALA</h3>
                    <h6>BETTER WAY TO LEARN & GROW</h6>
                </div>
                <div class="col-md-4 col-sm-6 footer-item">
                    <h5>CONTACT US</h5>
                    <p><i class="fa fa-map-marker"></i>3768 Seabury Ct, Burlington, NC, 27215</p>
                    <p><i class="fa fa-mobile"></i> +1 8910000891</p>
                    <p><i class="fa fa-envelope"></i>email@pathshala.com</p>
                </div>
                <div class="col-md-2 col-sm-6 footer-item">
                    <h5>QUICK LINKS</h5>
                    <div class="quick-link-box">
                        <a href="#"><i class="fa fa-graduation-cap"></i>Academics</a>
                        <a href="#"><i class="fa fa-users"></i>Admission</a>
                        <a href="#"><i class="fa fa-calendar"></i>Events</a>
                        <a href="#"><i class="fa fa-thumbs-up"></i>Campus Life</a>
                    </div>
                </div>
                <div class="clearfix visible-sm"></div>
                <div class="col-md-3 col-sm-6 footer-item">
                    <h5>SCHOOL TIMINGS</h5>
                    <p><i class="fa fa-clock-o"></i> MON - FRI 9:00 AM - 3:00 PM</p>
                    <p><i class="fa fa-clock-o"></i> SAT 9:00 AM - 1:00 PM</p>
                </div>
                <div class="col-md-3 col-sm-6 footer-item">
                    <h5>SUBSCRIBE</h5>
                    <div class="footer-subscribe">
                        <i class="fa fa-envelope"></i></a><input type="text" placeholder="example@pathshala.com" />
                    </div>
                    <a href="#" class="subscribe-link"><i class="fa fa-paper-plane"></i>SUBMIT</a>
                </div>
            </div>
            <div class="footer-social-row">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
            </div>
        </div>
        
        <!-- Login Modal -->
        <!-- Modal -->
        <div class="modal fade" id="loginModal" role="dialog">
            <div class="modal-dialog modal-sm">
                <div class="modal-content login-modal">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"><i class="fa fa-sign-in"></i>LOGIN</h4>
                    </div>
                    <div class="modal-body">
                        <div>
                            <label><i class="fa fa-user"></i>USERNAME/EMAIL</label>
                            <input class="form-control" type="text" placeholder="Username/Email">
                        </div>
                        <div>
                            <label><i class="fa fa-key"></i>PASSWORD</label>
                            <input class="form-control" type="password" placeholder="Password">
                        </div>
                        <a href="#" class="forgot-link">FORGOT PASSWORD?</a>
                        <a href="#" class="login-link"><i class="fa fa-sign-in"></i>LOGIN</a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Scripts -->
        <!-- <script src="assets/js/jQuery_v3_2_0.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/plugins/owl.carousel.min.js"></script>
        <script src="assets/js/js.js"></script> -->
        <!-- Patshala -->
        <script src="{{asset('js/patshala/jQuery_v3_2_0.min.js')}}"></script>
        <script src="{{asset('js/patshala/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/patshala/owl.carousel.min.js')}}"></script>
        <script src="{{asset('js/patshala/jquery-ui.min')}}"></script>
        <script src="{{asset('js/patshala/magnific-popup.js')}}"></script>
        <script src="{{asset('js/patshala/js.js')}}"></script>
        <script src="{{asset('js/patshala/main.js')}}"></script>
        
    </body>
<script>'undefined'=== typeof _trfq || (window._trfq = []);'undefined'=== typeof _trfd && (window._trfd=[]),_trfd.push({'tccl.baseHost':'secureserver.net'}),_trfd.push({'ap':'cpsh'},{'server':'a2plcpnl0381'}) </script><script src='../../../../../img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js'></script>

</html>