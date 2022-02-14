<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1">
    <title>PropertyBook</title>
    <link rel="icon" href="{{url('uploads/setups')}}/{{$setups->image}}" type="image/png">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" type="text/css">

 
</head>

<body>

    <!--Header_section-->
    <header id="header_wrapper">
        <div class="container">
            <div class="header_box">
                <div class="logo" style="max-width: 200px"><a href="#"><img src="{{url('uploads/setups')}}/{{$setups->image}}" alt="logo"></a></div>
                <nav class="navbar navbar-inverse" role="navigation">
                    <div class="navbar-header">
                        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    </div>
                    <div id="main-nav" class="collapse navbar-collapse navStyle">
                        <ul class="nav navbar-nav" id="mainNav">
                            <li class="active"><a href="#hero_section" class="scroll-link">Home</a></li>
                            @foreach ($cats as $cat)
                            <li class="text-uppercase"><a href="#{{$cat->slug}}" class="scroll-link">{{$cat->title}}</a></li>
                            @endforeach
                            <li class="text-uppercase"><a href="#contact" class="scroll-link">contact us</a></li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!--Header_section-->

    <!--Hero_Section-->
    <section id="hero_section" class="top_cont_outer">
        <div class="hero_wrapper">
            <div class="container">
                <div class="hero_section">
                    <div class="row " style="padding-top: 0px">
                        <div class="col-lg-6 col-sm-6">
                            <div class="top_left_cont zoomIn wow animated">
                                <h2>{{$home->title}}</h2>
                                <p>{{$home->description}}</p>
                                <a href="#services" class="read_more2">Read more</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <img src="{{url('uploads/contents')}}/{{$home->image}}" 
                            class="zoomIn wow animated" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Hero_Section-->

    <section id="{{$aboutus->slug}}">
        <!--Aboutus-->
        <div class="inner_wrapper">
            <div class="container">
                <h2>ABOUT US</h2>
                <div class="inner_section">
                    <div class="row">
                        <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right">
                            <img src="{{url('uploads/contents')}}/{{$aboutus->image}}" 
                            class="img-circle delay-03s animated wow zoomIn" alt="">
                        </div>
                        <div class=" col-lg-7 col-md-7 col-sm-7 col-xs-12 pull-left">
                            <div class=" delay-01s animated fadeInDown wow animated">
                                <h3>{{$aboutus->title}}...</h3><br />
                                <p>{{$aboutus->description}}</p> <br />
                            </div>
                            <div class="work_bottom"> <span>Want to know more..</span>
                                 <a href="#contactus" class="contact_btn">Contact Us</a> 
                                </div>
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </section>
    <!--Aboutus-->


    <!--Service-->
    <section id="{{$services->slug}}">
        <div class="container">
            <h2 >Services</h2>
            <div class="service_wrapper">
                <div class="row">
                  <!--Outputting services section -->
                    @foreach ($services as $service)
                    <div class="col-lg-3 ">
                        <div class="service_block">
                            <div class="service_icon delay-03s animated wow  zoomIn"> <span><i class="fa fa-{{$service->icon}}"></i></span> </div>
                            <h3 class="animated fadeInUp wow">{{$service->title}}</h3>
                            <p class="animated fadeInDown wow">{!!$service->description!!}</p>
                        </div>
                    </div>
                   
                    @endforeach
                  
                  </div>
            </div>
    </section>
    <!--Service section eds here-->




    <!-- Portfolio -->
    <section id="{{$portfolio->slug}}" class="content">

        <!-- Container -->
        <div class="container portfolio_title">

            <!-- Title -->
            <div class="section-title">
                <h2>Portfolio</h2>
            </div>
            <!--/Title -->

        </div>
        <!-- Container -->

        <div class="portfolio-top"></div>

        <!-- Portfolio Filters -->
        <div class="portfolio">

            <div id="filters" class="sixteen columns">
                <ul class="clearfix">
                    <li><a id="all" href="#" data-filter="*" class="active">
                            <h5>All</h5>
                        </a></li>
                        @foreach ($portcats as $cats )
                             <li><a class="" href="#" data-filter=".{{$cats->slug}}">
                            <h5>{{$cats->title}}</h5>
                        </a></li>
                        @endforeach
                   
                </ul>
            </div>
            <!--/Portfolio Filters -->

            <!-- Portfolio Wrapper -->
            <div class="isotope fadeInLeft animated wow " style="position: relative; overflow: hidden; height: 480px;" id="portfolio_wrapper">
                @foreach ($portfolio as $port)
                <!-- Portfolio Item -->
                <div style="position: absolute; left: 0px; top: 0px;
                 transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1);
                  width: 337px; opacity: 1;" class="portfolio-item one-four  
                   {{$port->class}} isotope-item">
                    <div class="portfolio_img " style="width: 100%;"> <img src="{{url('uploads/portfolios')}}/{{$port->image}}" alt="Portfolio 1"> </div>
                    <div class="item_overlay">
                        <div class="item_info">
                            <h4 class="project_name">{{$port->title}}</h4>
                        </div>
                    </div>
                </div>
                <!--/Portfolio Item -->

                @endforeach
               
                

            </div>
            <!--/Portfolio Wrapper -->

        </div>
        <!--/Portfolio Filters -->

        <div class="portfolio_btm"></div>


        <div id="project_container">
            <div class="clear"></div>
            <div id="project_data"></div>
        </div>


    </section>
    <!--/Portfolio -->

    <section class="page_section" id="{{$clients->slug}}">
        <!--page_section-->
        <h2>Clients</h2>
        <!--page_section-->
        <div class="client_logos">
            <!--client_logos-->
            <div class="container">
                <ul class="fadeInRight animated wow">
                    @foreach($clients->take(4) as $client)
                    <li>
                        <a href="javascript:void(0)">
                            <img src="{{url('uploads/clients')}}/{{$client->image}}" alt="">
                        </a>
                   </li>
                    @endforeach
                
      
                </ul>
            </div>
        </div>
    </section>
    <!--client_logos-->

    <section class="page_section team" id="team">
        <!--main-section team-start-->
        <div class="container">
            <h2>Team</h2>
            <h6>Lorem ipsum dolor sit amet, consectetur adipiscing.</h6>
            <div class="team_section clearfix">
                <div class="team_area">
                    <div class="team_box wow fadeInDown delay-03s">
                        <div class="team_box_shadow"><a href="javascript:void(0)"></a></div>
                        <img src="img/team_pic1.jpg" alt="">
                        <ul>
                            <li><a href="javascript:void(0)" class="fa fa-twitter"></a></li>
                            <li><a href="javascript:void(0)" class="fa fa-facebook"></a></li>
                            <li><a href="javascript:void(0)" class="fa fa-pinterest"></a></li>
                            <li><a href="javascript:void(0)" class="fa fa-google-plus"></a></li>
                        </ul>
                    </div>
                    <h3 class="wow fadeInDown delay-03s">Tom Rensed</h3>
                    <span class="wow fadeInDown delay-03s">Chief Executive Officer</span>
                    <p class="wow fadeInDown delay-03s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
                </div>
                <div class="team_area">
                    <div class="team_box  wow fadeInDown delay-06s">
                        <div class="team_box_shadow"><a href="javascript:void(0)"></a></div>
                        <img src="img/team_pic2.jpg" alt="">
                        <ul>
                            <li><a href="javascript:void(0)" class="fa fa-twitter"></a></li>
                            <li><a href="javascript:void(0)" class="fa fa-facebook"></a></li>
                            <li><a href="javascript:void(0)" class="fa fa-pinterest"></a></li>
                            <li><a href="javascript:void(0)" class="fa fa-google-plus"></a></li>
                        </ul>
                    </div>
                    <h3 class="wow fadeInDown delay-06s">Kathren Mory</h3>
                    <span class="wow fadeInDown delay-06s">Vice President</span>
                    <p class="wow fadeInDown delay-06s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
                </div>
                <div class="team_area">
                    <div class="team_box wow fadeInDown delay-09s">
                        <div class="team_box_shadow"><a href="javascript:void(0)"></a></div>
                        <img src="img/team_pic3.jpg" alt="">
                        <ul>
                            <li><a href="javascript:void(0)" class="fa fa-twitter"></a></li>
                            <li><a href="javascript:void(0)" class="fa fa-facebook"></a></li>
                            <li><a href="javascript:void(0)" class="fa fa-pinterest"></a></li>
                            <li><a href="javascript:void(0)" class="fa fa-google-plus"></a></li>
                        </ul>
                    </div>
                    <h3 class="wow fadeInDown delay-09s">Lancer Jack</h3>
                    <span class="wow fadeInDown delay-09s">Senior Manager</span>
                    <p class="wow fadeInDown delay-09s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
                </div>
            </div>
        </div>
    </section>
    <!--/Team-->
    <!--Footer-->
    <footer class="footer_wrapper" id="contact">
        <div class="container">
            <section class="page_section contact" id="contact">
                <div class="contact_section">
                    <h2>Contact Us</h2>
                    <div class="row">
                        <div class="col-lg-4">

                        </div>
                        <div class="col-lg-4">

                        </div>
                        <div class="col-lg-4">

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 wow fadeInLeft">
                        <div class="contact_info">
                            <div class="detail">
                                <h4>Propertybook</h4>
                                <p>{{$setups->address}}</p>
                            </div>
                            <div class="detail">
                                <h4>Call Us</h4>
                                <p>{{$setups->contact}}</p>
                            </div>
                            <div class="detail">
                                <h4>Email us</h4>
                                <p>{{$setups->email}}</p>
                            </div>
                        </div>



                        <ul class="social_links">
                            <li class="twitter animated bounceIn wow delay-02s"><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                            <li class="facebook animated bounceIn wow delay-03s"><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                            <li class="pinterest animated bounceIn wow delay-04s"><a href="javascript:void(0)"><i class="fa fa-pinterest"></i></a></li>
                            <li class="gplus animated bounceIn wow delay-05s"><a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-8 wow fadeInLeft delay-06s">
                        <div class="form">
                            <input class="input-text" type="text" name="" value="Your Name *" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">
                            <input class="input-text" type="text" name="" value="Your E-mail *" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">
                            <textarea class="input-text text-area" cols="0" rows="0" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">Your Message *</textarea>
                            <input class="input-btn" type="submit" value="send message">
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="container">
            <div class="footer_bottom"><span>Copyright © {{date('Y')}}, Website by <a href="http://obertmanyasa.herokuapp.com">Wealthy Manyasa</a>. </span> </div>
        </div>
    </footer>

    <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
    <script type="text/javascript" src="js/jquery.nav.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.js"></script>
    <script type="text/javascript" src="js/wow.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>

    <style>
        .service_block{
            margin-bottom:30px;
                    }
  </style>
</body>

</html>