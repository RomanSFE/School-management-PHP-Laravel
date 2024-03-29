
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
        <!-- <link href="assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" media="screen"> -->

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
                                    <li><a href="{{URL::to('/contact')}}"><i class="fa fa-phone-square"></i>CONTACT US</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </nav>
            </div>
        </div>
        
        <div class="row">
            <div id="homeSlider" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#homeSlider" data-slide-to="0" class="active"></li>
                    <li data-target="#homeSlider" data-slide-to="1"></li>
                    <li data-target="#homeSlider" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="img/slider/slide4.jpg" alt="slide1">
                        <div class="carousel-caption">
                            <h4><i class="fa fa-star-o"></i>WE ARE BEST<i class="fa fa-star-o"></i></h4>
                            <h2>CHOOSE <span><i class="fa fa-trophy"></i>BEST</span> FOR YOUR CHILD</h2>
                            <p>We here at <strong>PATHSHALA</strong> provides best education <br /> to your little one</p>
                            <a href="#"><i class="fa fa-paper-plane"></i>KNOW MORE</a>
                        </div>
                    </div>

                    <div class="item">
                        <img src="img/slider/slide5.jpg" alt="slide2">
                        <div class="carousel-caption">
                            <h4><i class="fa fa-star-o"></i>WE ARE BEST<i class="fa fa-star-o"></i></h4>
                            <h2>LET YOUR CHILD <span><i class="fa fa-line-chart"></i>GROW</span></h2>
                            <p>We here at <strong>PATHSHALA</strong> provides best education <br /> to your little one</p>
                            <a href="#"><i class="fa fa-paper-plane"></i>KNOW MORE</a>
                        </div>
                    </div>
                    <div class="item">
                        <img src="img/slider/slide6.jpg" alt="slide2">
                        <div class="carousel-caption">
                            <h4><i class="fa fa-star-o"></i>WE ARE BEST<i class="fa fa-star-o"></i></h4>
                            <h2>GIVE <span><i class="fa fa-rocket"></i>BOOST</span> TO YOUR CHILD</h2>
                            <p>We here at <strong>PATHSHALA</strong> provides best education <br /> to your little one</p>
                            <a href="#"><i class="fa fa-paper-plane"></i>KNOW MORE</a>
                        </div>
                    </div>
                </div>

                <!-- Slide Controls -->
                <a class="left carousel-control" href="#homeSlider" role="button" data-slide="prev">
                    <span class="fa fa-arrow-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#homeSlider" role="button" data-slide="next">
                    <span class="fa fa-arrow-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        
        <!-- Principal Intro Section -->
        <div class="row principal-intro-row">
            <div class="container">
                <div class="col-sm-5">
                    <img src="img/principal1.jpg" alt="Our Principal"/>
                </div>
                <div class="col-sm-7 principal-intro">
                    <h6><i class="fa fa-star-o"></i><span>MEET OUR STAR</span><i class="fa fa-star-o"></i></h6>
                    <h3>MEET OUR PRINCIPAL</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                    <h6 class="principal-name">Mr JOHN DOE, M.D, P.C</h6>
                    <div>
                        <a href="#" class="know-more-btn"><i class="fa fa-paper-plane"></i>KNOW MORE</a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Events Section -->
        
        <div class="row section-row evets-row">
            <div class="container">
                <div class="section-row-header-center">
                    <h6><i class="fa fa-star-o"></i>WE ARE BEST<i class="fa fa-star-o"></i></h6>
                    <h1>EVENTS - NEWS</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                </div>
              <!--   <div class="col-sm-12">
                    <div class="event-tab-link-box">
                        <div class="pull-mid">
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a  href="#1" data-toggle="tab"><i class="fa fa-graduation-cap"></i><span>ACADEMICS</span></a>
                                </li>
                                <li>                                
                                    <a href="#2" data-toggle="tab"><i class="fa fa-users"></i><span>ADMISSIONS</span></a>
                                </li>
                                <li>                                
                                    <a href="#3" data-toggle="tab"><i class="fa fa-trophy"></i><span>SPORTS</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> -->
                <div class="clearfix"></div>
                <div class="tab-content">
                    <div class="tab-pane active" id="1">
                        <div class="col-md-8 left-event-items">
                                <div class="event-item">
                                    <div class="col-sm-7">
                                        <div class="event-date">
                                            <p><span>10</span> SEP</p>
                                        </div>
                                        <h3>Annual Science Fest</h3>
                                        <h6><i class="fa fa-map-marker"></i>Sciene Building</h6>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                    </div>
                                    <div class="col-sm-5 event-item-img">
                                        <div class="event-img">
                                            <img src="img/news/news-sm1.jpg" alt="event" />
                                            <div class="event-detail-link">
                                                <a href="#">VIEW DETAILS</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="event-item">
                                    <div class="col-sm-7">
                                        <div class="event-date">
                                            <p><span>21</span> AUG</p>
                                        </div>
                                        <h3>Inter School Sports Meet</h3>
                                        <h6><i class="fa fa-map-marker"></i>Playground</h6>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                    </div>
                                    <div class="col-sm-5 event-item-img">
                                        <div class="event-img">
                                            <img src="img/news/news-sm2.jpg" alt="event" />
                                            <div class="event-detail-link">
                                                <a href="#">VIEW DETAILS</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                        </div>
                        <div class="col-md-4 right-event-items">
                            <div class="event-item">
                                <img src="img/news/news-lg3.jpg" alt="event" />
                            </div>
                            <div class="featured-event">
                                <div class="event-date">
                                    <p><span>10</span> SEP</p>
                                </div>
                                <h3>Inter School Sports Meet</h3>
                                <h6><i class="fa fa-map-marker"></i>Playground</h6>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                <a href="#"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="2">
                        <div class="col-md-8 left-event-items">
                                <div class="event-item">
                                    <div class="col-sm-7">
                                        <div class="event-date">
                                            <p><span>10</span> SEP</p>
                                        </div>
                                        <h3>Annual Science Fest</h3>
                                        <h6><i class="fa fa-map-marker"></i>Sciene Building</h6>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                    </div>
                                    <div class="col-sm-5 event-item-img">
                                        <div class="event-img">
                                            <img src="img/news/news-sm2.jpg" alt="event" />
                                            <div class="event-detail-link">
                                                <a href="#">VIEW DETAILS</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="event-item">
                                    <div class="col-sm-7">
                                        <div class="event-date">
                                            <p><span>21</span> AUG</p>
                                        </div>
                                        <h3>Inter School Sports Meet</h3>
                                        <h6><i class="fa fa-map-marker"></i>Playground</h6>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                    </div>
                                    <div class="col-sm-5 event-item-img">
                                        <div class="event-img">
                                            <img src="img/news/news-sm1.jpg" alt="event" />
                                            <div class="event-detail-link">
                                                <a href="#">VIEW DETAILS</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                        </div>
                        <div class="col-md-4 right-event-items">
                            <div class="event-item">
                                <img src="img/news/news-lg3.jpg" alt="event" />
                            </div>
                            <div class="featured-event">
                                <div class="event-date">
                                    <p><span>10</span> SEP</p>
                                </div>
                                <h3>Inter School Sports Meet</h3>
                                <h6><i class="fa fa-map-marker"></i>Playground</h6>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                <a href="#"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="3">
                        <div class="col-md-8 left-event-items">
                                <div class="event-item">
                                    <div class="col-sm-7">
                                        <div class="event-date">
                                            <p><span>10</span> SEP</p>
                                        </div>
                                        <h3>Annual Science Fest</h3>
                                        <h6><i class="fa fa-map-marker"></i>Sciene Building</h6>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                    </div>
                                    <div class="col-sm-5 event-item-img">
                                        <div class="event-img">
                                            <img src="img/news/news-sm2.jpg" alt="event" />
                                            <div class="event-detail-link">
                                                <a href="#">VIEW DETAILS</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="event-item">
                                    <div class="col-sm-7">
                                        <div class="event-date">
                                            <p><span>21</span> AUG</p>
                                        </div>
                                        <h3>Inter School Sports Meet</h3>
                                        <h6><i class="fa fa-map-marker"></i>Playground</h6>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                    </div>
                                    <div class="col-sm-5 event-item-img">
                                        <div class="event-img">
                                            <img src="img/news/news-sm3.jpg" alt="event" />
                                            <div class="event-detail-link">
                                                <a href="#">VIEW DETAILS</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                        </div>
                        <div class="col-md-4 right-event-items">
                            <div class="event-item">
                                <img src="img/news/news-lg3.jpg" alt="event" />
                            </div>
                            <div class="featured-event">
                                <div class="event-date">
                                    <p><span>10</span> SEP</p>
                                </div>
                                <h3>Inter School Sports Meet</h3>
                                <h6><i class="fa fa-map-marker"></i>Playground</h6>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                <a href="#"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Our Teaacher section -->
        <div class="row section-row teacher-row">
            <div class="container">
                <div class="section-row-header-center">
                    <h6><i class="fa fa-star-o"></i>WE ARE BEST<i class="fa fa-star-o"></i></h6>
                    <h1>MEET OUR TEACHERS</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                </div>
                <div class="owl-carousel" id="ourTeacher">
                    <div class="teacher-item">
                        <h5><i class="fa fa-flask"></i>ORGANIC CHEMISTRY</h5>
                        <div class="teacher-item-inner">
                            <p class="teacher-desc">
                                It is a long established fact that a reader will be distracted by the readable content 
                                of a page when looking at its layout.
                            </p>
                            <div class="col-xs-4 clear-padding teacher-img">
                                <img src="img/parent/parent2.jpg" alt="teacher" />
                            </div>
                            <div class="col-xs-8 teacher-details">
                                <p><strong>John Doe</strong></p>
                                <p><i>MSc. Chemistry</i></p>
                                <p>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="teacher-know-more-link">
                            <a href="#"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
                        </div>
                    </div>
                    <div class="teacher-item">
                        <h5><i class="fa fa-flash"></i>ELECTROSTATICS</h5>
                        <div class="teacher-item-inner">
                            <p class="teacher-desc">
                                It is a long established fact that a reader will be distracted by the readable content 
                                of a page when looking at its layout.
                            </p>
                            <div class="col-xs-4 clear-padding teacher-img">
                                <img src="img/parent/parent1.jpg" alt="teacher" />
                            </div>
                            <div class="col-xs-8 teacher-details">
                                <p><strong>Lenore Doe</strong></p>
                                <p><i>Ph.D. Physics</i></p>
                                <p>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="teacher-know-more-link">
                            <a href="#"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
                        </div>
                    </div>
                    <div class="teacher-item">
                        <h5><i class="fa fa-heartbeat"></i>HUMAN BIOLOGY</h5>
                        <div class="teacher-item-inner">
                            <p class="teacher-desc">
                                It is a long established fact that a reader will be distracted by the readable content 
                                of a page when looking at its layout.
                            </p>
                            <div class="col-xs-4 clear-padding teacher-img">
                                <img src="img/parent/parent2.jpg" alt="teacher" />
                            </div>
                            <div class="col-xs-8 teacher-details">
                                <p><strong>John Doe</strong></p>
                                <p><i>Ph.D. Biology</i></p>
                                <p>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="teacher-know-more-link">
                            <a href="#"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
                        </div>
                    </div>
                    <div class="teacher-item">
                        <h5><i class="fa fa-code"></i>COMPUTER SCIENCE</h5>
                        <div class="teacher-item-inner">
                            <p class="teacher-desc">
                                It is a long established fact that a reader will be distracted by the readable content 
                                of a page when looking at its layout.
                            </p>
                            <div class="col-xs-4 clear-padding teacher-img">
                                <img src="img/parent/parent1.jpg" alt="teacher" />
                            </div>
                            <div class="col-xs-8 teacher-details">
                                <p><strong>Lenore Doe</strong></p>
                                <p><i>Ph.D. Physics</i></p>
                                <p>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="teacher-know-more-link">
                            <a href="#"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        
       
        
        <!-- Parent testimonial section -->
       <!--  <div class="row parent-test-row section-row">
            <div class="container">
                <div class="section-row-header-center">
                    <h1>WHAT PARENTS SAY</h1>
                </div>
                <div class="owl-carousel" id="parentTestimonial">
                    <div class="parent-test-item">
                        <div class="col-sm-3">
                            <div class="parent-img">
                                <img src="img/parent/parent1.jpg" alt="parent"/>
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <p class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>
                            <p><i>"It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout."</i></p>
                            <p class="parent-details"><i>LENORE</i></p>
                        </div>
                    </div>
                    <div class="parent-test-item">
                        <div class="col-sm-3">
                            <div class="parent-img">
                                <img src="img/parent/parent2.jpg" alt="parent"/>
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <p class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></p>
                            <p><i>"It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout".</i></p>
                            <p class="parent-details"><i>JOHN DOE</i></p>
                        </div>
                    </div>
                    <div class="parent-test-item">
                        <div class="col-sm-3">
                            <div class="parent-img">
                                <img src="img/parent/parent1.jpg" alt="parent"/>
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <p class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>
                            <p><i>"It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout."</i></p>
                            <p class="parent-details"><i>LENORE</i></p>
                        </div>
                    </div>
                    <div class="parent-test-item">
                        <div class="col-sm-3">
                            <div class="parent-img">
                                <img src="img/parent/parent2.jpg" alt="parent"/>
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <p class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></p>
                            <p><i>"It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout".</i></p>
                            <p class="parent-details"><i>JOHN DOE</i></p>
                        </div>
                    </div>
                    <div class="parent-test-item">
                        <div class="col-sm-3">
                            <div class="parent-img">
                                <img src="img/parent/parent1.jpg" alt="parent"/>
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <p class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>
                            <p><i>"It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout."</i></p>
                            <p class="parent-details"><i>LENORE</i></p>
                        </div>
                    </div>
                    <div class="parent-test-item">
                        <div class="col-sm-3">
                            <div class="parent-img">
                                <img src="img/parent/parent2.jpg" alt="parent"/>
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <p class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></p>
                            <p><i>"It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout".</i></p>
                            <p class="parent-details"><i>JOHN DOE</i></p>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        
        <!-- Facts section -->
        <!-- <div class="row section-row">
            <div class="container">
                <div class="fact-wrapper">
                    <div class="col-md-5 fact-item">
                        <p class="lg-icon"><i class="fa fa-trophy"></i></p>
                        <p>PATHSHALA won best School award in 2016</p>
                        <h1>WINNER BEST SCHOOL AWARD</h1>
                        <p>It is a long established fact that a reader will be distracted by the content of a page when looking at its layout. It is a long established fact that a reader will be distracted by the content.</p>
                    </div>
                    <div class="col-md-7 fact-item">
                        <div class="fact-item-list">
                            <div class="col-xs-3">
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="col-xs-9">
                                <h2>14+ <br />COMPETITION WON</h2>
                                <p>It is a long established fact that a reader will be distracted.</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="fact-item-list">
                            <div class="col-xs-3">
                                <i class="fa fa-clock-o"></i>
                            </div>
                            <div class="col-xs-9">
                                <h2>1000+ <br />VOLUNTEER HOURS</h2>
                                <p>It is a long established fact that a reader will be distracted.</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="fact-item-list">
                            <div class="col-xs-3">
                                <i class="fa fa-graduation-cap"></i>
                            </div>
                            <div class="col-xs-9">
                                <h2>100% <br />SUCCESS RATE</h2>
                                <p>It is a long established fact that a reader will be distracted.</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div> -->
    
        <!-- Know More Info & Admission apply row -->
        <!-- <div class="row apply-know-row">
            <div class="container">
                <div class="col-sm-6 admission-row">
                    <h3>ADMISSIONS ARE OPEN</h3>
                    <p>It is a long established fact that a reader will be distracted by the content of a page when looking at its layout.</p>
                    <a href="#"><i class="fa fa-edit"></i>APPLY NOW</a>
                </div>
                <div class="col-sm-6 info-row">
                    <h3>HAVE ANY QUERIES?</h3>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                    <div class="input-wrapper">
                        <input type="text" placeholder="e.g. email@pathshala.com"/><a href="#"><i class="fa fa-paper-plane"></i></a>
                    </div>
                </div>
            </div>
        </div> -->
        
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
<script>'undefined'=== typeof _trfq || (window._trfq = []);'undefined'=== typeof _trfd && (window._trfd=[]),_trfd.push({'tccl.baseHost':'secureserver.net'}),_trfd.push({'ap':'cpsh'},{'server':'a2plcpnl0381'})    </script><script src='../../../../../img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js'></script>

</html>