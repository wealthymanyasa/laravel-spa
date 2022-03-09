<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" 
        crossorigin="anonymous" />
    
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" type="text/css">
    <title>codeStars</title>
</head>

<body>

    <nav class="navbar">
        <div class="container">
            <div class="logo imgStyle">
                <!--outputing the image from setups database table stored in public/uploads/setups-->
                <a href="#home"><img src="{{ url('uploads/setups') }}/{{ $setups->image }}" alt="logo"></a>
            </div>
            <div class="navigation" id="myNavbar">
            <ul class="menu">
                <li class="text-uppercase">
                    <a href="header">Home</a>
                </li>
                 <!--looping through the categories from the categories table using foreach-->
                @foreach ($cats as $cat)
                    <li class="text-uppercase"><a href="#{{ $cat->slug }}"
                            class="">{{ $cat->title }}</a></li>
                @endforeach
                <li class="text-uppercase">
                    <a href="#contactus" >Contact</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <header class="header">
        <div class="container">
            <div>
                <h1>{{$home->title}}</h1>
                <p>{{$home->description}}</p>
            <p>
                <a href="#about" class="btnStyle btn btn-primary">Get Started</a>
                <a href="#services" class="btnStyle btn btn-primary">Our Services</a>
            </p>
            </div>
            <div class="container">
                <img src="{{url('uploads/contents')}}/{{$home->image}}" alt="" />

            </div>
            
        </div>
        
    </header>
    <section class="about">
        <div class="aboutHeader">
            <h1>About Us</h1>
            <p >We believe technology is a powerful force for good and are working to 
                foster a sustainable future.</p>
           
        </div>
        <div class="container"  id="aboutus">
            <div>
              @empty($aboutus)
               <p></p>
              @else
                <h2>{{$aboutus->title}}</h2>
                <p>{{$aboutus->description}}</p>
            <p>
                
            </p>
            </div>
            <div class="">          
                  <img src="{{url('uploads/contents')}}/{{$aboutus->image}}" alt="" />
            </div>
               
            @endempty
          </div>
      
        </div>
        <div class="container">
            <div style="margin-right: 20px">    
                @empty($aboutUs)
                <p></p>
               @else      
                <img src="{{url('uploads/contents')}}/{{$aboutUs->image}}" alt="" />
          </div>
          
            <div>
                <h2>{{$aboutUs->title}}</h2>
                <p>{{$aboutUs->description}}</p>
            <p>
                
            </p>
            </div>
            @endempty
        </div>
        <div class="container">
            <div>
                @empty($aboutUs1)
                <p></p>
               @else 
                <h2>{{$aboutUs1->title}}</h2>
                <p>{{$aboutUs1->description}}</p>
            <p>
                
            </p>
            </div>
            <div class="">          
                  <img src="{{url('uploads/contents')}}/{{$aboutUs1->image}}" alt="" />
            </div>
            @endempty
        </div>
        
    </section>


    <section class="boxes" id="services">
        <div class="aboutHeader">
            <h1>Services</h1>
            <p>To reach the right people at the right time with the right product requires a software development company with experience.</p>
           
        </div>
        <div class="container">
            @foreach ($services as $service)
            <div class="box">
                <h2><i class="fa fa-{{$service->icon}}"></i> {{$service->title}}</h2>
                <p>
                    {!!$service->description!!}
                </p>
            </div>
           @endforeach
        </div>
    </section>

    <section class="clients" id="clients">
        <!--clients_section-->
      <div class="clientsHeader">
        <h2 >Clients</h2>
      </div>
       
   
        <!--clients_section-->
        <div class="client_logos">
            <!--client_logos-->
            <div class="container">
                <ul class="fadeInRight animated wow">
                    @foreach($clients->take(4) as $client)
                    <li>
                        <a href="{{$client->link}}" Target="_Blank">
                            <img src="{{url('uploads/clients')}}/{{$client->image}}" alt="">
                        </a>
                   </li>
                    @endforeach
                
      
                </ul>
            </div>
        </div>
    </section>
    <div class="aboutHeader">
        <h2 >Contact Us</h2>
      </div>
    <section class="row" id="contactus">
        
           
        <div class="column">
            
                <h2 style="color: #333; text-align:center">
                    Our Location
                </h2>
                  
                <div>
                    <!-- Google Map Code -->
                    <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12
                    !1m3!1d3798.644356128793!2d31.085626514484268!3d-17.808403980441152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1931bad10291bf53%3A0xd52d1e7be5a0e322!2s33%20Princess%20Dr%2C%20Harare!5e0!3m2!1sen!2szw!4v1644931661338!5m2!1sen!2szw"
                     width="100%" height="310px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            
        </div>
        <div class="column">
         
           <div class="row">
              <div class="col-md-4">
               
                <p><i class="fa fa-map-marker" style="font-size:30px;color:red"></i>{{$setups->address}}</p>
              </div>
              <div class="col-md-4">
           
                <p><i class="fa fa-envelope" style="font-size:28px"></i>{{$setups->email}}</p>
              </div>
              <div class="col-md-4">
                 
                <p> 
                    <i class="fa fa-mobile-phone" style="font-size:35px"></i> 
                    {{$setups->contact}}</p>
              </div>
            </div>
              <!--form-->
              <form action="" method="post">
                <div class="row">
                    <div class="col-sm-6">          
                            <input type="text" name="name" placeholder="Your Name" class="form-control column" style="border-radius: 15px">
                    </div>
                    <div class="col-sm-6">
                        <input type="email" name="email" id="" placeholder="Your Email" class="column form-control" style="border-radius: 15px">

                    </div>
                    
                </div>
              <input type="text" name="subject" placeholder="Subject" id="" class="form-control column" style="border-radius: 15px">
              <br>
              <textarea name="" id="" cols="20" rows="5" placeholder="Message" class="column form-control" style="border-radius: 15px"></textarea>
                <br>
                <div class="aboutHeader">
                    <input class="btn btn-primary form-control btnStyle" 
                    style="min-width: 160px; max-width:160px ; border-radius:25px;"
                     type="submit" value="Send Message">
                </div>
             
              </form>
        </div>
    </section>
      <footer class="header">
        <div class="row" >
            <div class="col-sm-4">
           <h1> <strong>codeStars</strong> </h1>
           <p>{{$home->description}}</p>
            </div>
            
            <div class="col-sm-2">
              <strong> USEFUL LINKS</strong>
            
              <ul class="page-links">
                  <li><a href="#" style="color:#fff">Home</a></li>
                  <br>
                  <li><a href="#aboutus" style="color:#fff">About Us</a></li>
                  <br>
                  <li><a href="#services" style="color:#fff">Services</a></li>
                  <br>
                  <li><a href="#terms" style="color:#fff">Terms of service</a></li>
                  <br>
                  <li><a href="#privacypolicy" style="color:#fff">Privacy Policy</a></li>
              </ul>
              
            </div>
            <div class="col-sm-2">
               <strong> CONTACT US</strong>
               <div class="contact-links">
                <p>{{$setups->address}}</p><br>
                <p>{{$setups->contact}}</p><br>
                <p>{{$setups->email}}</p>
               </div>
               
            </div>
            <div class="col-sm-4">
             <strong>   OUR NEWSLETTER</strong>
              
               <p class="news">
                We will email you our customers to update about
                 our brand's latest products and services. We will also share
                 valuable industry news or blog posts or inform you about
                  your discounts and offers.</p>
            <form action="" method="post" class="form" style=" ">
                <div class="row">
                    <div class="">
                        <input type="email" name="email2" class="form-control">

                    </div>
                    <div class="">
                        <input type="submit" value="Subscribe" class="btn btn-primary">

                    </div>
                </div>
            </form>
            
            </div>
            
        </div>
       
    </footer>
    
    <div class="footer">
        &copy; Copyright<strong>codeStars</strong>. All Rights Reserved
     </div>
  
     </main>
 
</body>

</html>
