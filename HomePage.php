<?php
include_once 'ConnectionPage.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Online Skill Test">
        <meta name="author" content="Kundan Chaudhary, Pawan Tiwary, Santosh Aryal">

        <title>Online Skill Test</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

        <!-- Fonts -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="css/animate.css" rel="stylesheet" />
        <!-- CSS -->
        <link href="css/style.css" rel="stylesheet">
        <link href="color/default.css" rel="stylesheet">
    </head>

    <body id="page-top" data-spy="scroll" data-target=".navbar-custom">
        <!-- Preloader -->
        <div id="preloader">
            <div id="load">

            </div>
        </div>

        <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <h1>Online Skill Test</h1>
                    </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="#intro">Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="AdminLoginPage.php">Admin</a></li>
                                <li><a href="StudentLoginPage.php">Student</a></li>
                            </ul>
                        </li>
                        <li><a href="RegistrationPage.php">Sign Up</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#contact">Contact</a></li>

                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <!-- Section: intro -->
        <section id="intro" class="intro">
            <div class="slogan">
                <h2>WELCOME<span class="text_color"> TO </span></h2>
                <h2>ONLINE SKILL TEST</h2>
            </div>
            <div class="page-scroll">
                <a href="#contact" class="btn btn-circle">
                    <i class="fa fa-angle-double-down animated"></i>
                </a>
            </div>
        </section>
        <!-- /Section: intro -->

        <!-- Section: about -->
        <section id="about" class="home-section text-center">
            <div class="heading-about">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="wow bounceInDown" data-wow-delay="0.4s">
                                <div class="section-heading">
                                    <h2>About us</h2>
                                    <i class="fa fa-2x fa-angle-down"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-lg-offset-5">
                        <hr class="marginbot-50">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="wow bounceInUp" data-wow-delay="0.2s">
                            <div class="team boxed-grey">
                                <div class="inner">
                                    <h5>Kundan Chaudhary</h5>
                                    <p class="subtitle">Front End Designer</p>
                                    <div class="avatar"><img src="img/team/kundan.jpg" alt="" class="img-responsive img-circle" />

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="wow bounceInUp" data-wow-delay="0.5s">
                            <div class="team boxed-grey">
                                <div class="inner">
                                    <h5>Pawan Tiwary</h5>
                                    <p class="subtitle">Back End Designer</p>
                                    <div class="avatar"><img src="img/team/pawan.JPG" alt="" class="img-responsive img-circle" />

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="wow bounceInUp" data-wow-delay="0.8s">
                            <div class="team boxed-grey">
                                <div class="inner">
                                    <h5>Santosh Aryal</h5>
                                    <p class="subtitle">System Analyst</p>
                                    <div class="avatar"><img src="img/team/santosh.JPG" alt="" class="img-responsive img-circle" />

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>		
            </div>
        </section>
        <!-- /Section: about -->

        <!-- Section: contact -->
        <section id="contact" class="home-section text-center">
            <div class="heading-contact">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="wow bounceInDown" data-wow-delay="0.4s">
                                <div class="section-heading">
                                    <h2>Get in touch</h2>
                                    <i class="fa fa-2x fa-angle-down"></i>
                                    <i class="fa fa-2x fa-angle-down"></i>
                                    <i class="fa fa-2x fa-angle-down"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-lg-offset-5">
                        <hr class="marginbot-50">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="boxed-grey">
                            <form id="contact-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" id="name" placeholder="Enter name" required="required"/>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email Address</label>
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                                                <input type="email" class="form-control" id="email" placeholder="Enter email" required="required" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="subject">Subject</label>
                                            <select id="subject" name="subject" class="form-control" required="required">
                                                <option value="na" selected="">Choose One:</option>
                                                <option value="service">General Customer Service</option>
                                                <option value="suggestions">Suggestions</option>
                                                <option value="product">Product Support</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Message</label>
                                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required" placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-skin pull-right" id="btnContactUs">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="widget-contact">
                            <address>
                                <strong>We're on social networks</strong><br>
                                <ul class="company-social">
                                    <li class="social-facebook"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li class="social-twitter"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                    <li class="social-dribble"><a href="#" target="_blank"><i class="fa fa-dribbble"></i></a></li>
                                    <li class="social-google"><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                </ul>	
                            </address>					
                        </div>	
                    </div>
                </div>
            </div>
        </section>
        <!-- /Section: contact -->
        <!-- Footer -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="wow shake" data-wow-delay="0.4s">
                            <div class="page-scroll marginbot-30">
                                <a href="#intro" id="totop" class="btn btn-circle">
                                    <i class="fa fa-angle-double-up animated"></i>
                                </a>
                            </div>
                        </div>
                        <p>&copy;Online Sill Test</p>
                    </div>
                </div>	
            </div>
        </footer>
        <!-- /Footer -->
        <!-- Core JavaScript Files -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.easing.min.js"></script>	
        <script src="js/jquery.scrollTo.js"></script>
        <script src="js/wow.min.js"></script>
        <!-- Custom Theme JavaScript -->
        <script src="js/custom.js"></script>
    </body>
</html>
