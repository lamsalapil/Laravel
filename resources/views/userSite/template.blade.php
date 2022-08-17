<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset ('Site/bootstrap/css/bootstrap.css')}}">

    <link rel="stylesheet" href="{{asset ('Site/style.css')}}">
    <link rel="stylesheet" href="{{asset ('Site/aboutstyle.css')}}">

    <link rel="stylesheet" href="{{asset ('Site/fontawesome/css/all.css')}}">
    <script src="{{asset ('Site/fontawesome/js/all.css')}}"></script>

    <title>Home</title>
    
</head>

<!-- header part start -->
<body>
    <section id="top-header">
       <div class="container">
            <div class="row">
               <div class="col-md-6 callus ">
               <div class="col-md-3 logo">
                    <img src="{{asset('Site/photos/logo.png')}}" alt="img" width="200px">
                </div>

               </div>
               <div class="col-md-6  socialmedia">
                
                <i class="fab fa-brands fa-facebook"></i>
                <i class="fab fa-brands fa-twitter"></i>
                <i class="fab fa-brands fa-instagram"></i>
            </div>

            </div>
        </div>
    </section>

    <!-- <section id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-3 logo">
                    <img src="{{asset('Site/photos/logo.png')}}" alt="img" width="200px">
                </div>
                <div class="col-md-3 contact">
                    
                    <small><i class="fa-solid fa-phone"></i>Contact</small>
                     9804119898
                </div>
                <div class="col-md-3 email">
                    
                    <small><i class="fa-solid fa-envelope"></i></i>Email</small>
                    
                    bussawari@gmail.com
                </div>
                <div class="col-md-3 address">
                    
                    <small><i class="fa-solid fa-location"></i>Address</small>
                    Pokhara, Nepal
                </div>
            </div>
        </div>
    </section> -->
    <section id="mainmenu">
        <div class="container">
            <div class="row">
            <ul>
                <li>
                    <a href="{{route('gethome')}}">Home</a>
                </li>
                
                <li>
                    <a href="{{route('getroute')}}">Routes List</a>
                </li>
                <li>
                    <a href="#">Blog</a>
                </li>
                <li>
                    <a href="{{route('getabout')}}">About us</a>
                </li>
                <li>
                    <a href="{{route('getcontact')}}">Contact us</a>
                </li>
            </ul>   
            
            </div>

        </div>
    </section>

<!-- header end -->

<!-- 
    body part-->

@yield('meropage')
@yield('routepage')
@yield('aboutpage')
@yield('searchpage')
@yield('contactpage')

<!-- footer -->

    <section id="footer">
        <div class="container">
                <div class="row">
                    <div class="col-md-3 footer-top">
                        <img src="{{asset('Site/photos/logo.png')}}" alt="img">
                        <h6><i class="fa-solid fa-location"></i> Address</h6>
                            <a href="https://goo.gl/maps/YP2ZvuAz9ZzaAZM68">Srijana chowk, Pokhara-8, Nepal</a> 
                            
                    </div>
                    
                    <div class="col-md-3 footer-center">
                    <div class="center">
                    <ul>
                        <b>Company</b>
                        <li>
                            <a href="{{route('gethome')}}">Home</a>
                        </li>
                        <li>
                            <a href="">Our services</a>
                        </li>
                        <li>
                            <a href="{{route('getabout')}}">About</a>
                        </li>
                        <li>
                            <a href="#">Places</a>
                        </li>
                        <li>
                            <a href="#">Blog</a>
                        </li>
                        <li>
                            <a href="{{route('getcontact')}}">Contact</a>
                        </li>
                    </ul>
                    </div>
                    </div>
                    <div class="col-md-2 footer-center-right">
                        <div class="right">
                            <ul>
                                <b></b>
                                <li>
                                    <a href="#">Blog</a>
                                </li>
                                <li>
                                    <a href="#">Faq</a>
                                </li>
                            </ul>
                            
                        </div>
                    </div>

                    <div class="col-md-4 footer-right">
                        <div class="name">
                            <small>Name:</small>
                            <input type="text" placeholder="Name" >
                        </div>
                        <div class="email">
                            <small>Email:</small>
                            <input type="email" placeholder="Email">
                        </div>
                       <div class="comment">
                            <Small>Comment:</Small>
                            <textarea name="comment" id="comment" cols="50" rows="5" placeholder="Comment"></textarea>
                       </div>
                       
                        <br>
                        <a href="#" class="btn btn-primary">submit</a>
                    </div>


            </div>
            

        <div>
        <div class="black-line">
        </div>
        </div>
            
            
       
    </section>
   <section id="last-footer">
    <div class="container">
            <div class="row">
                <div class="col-md-6 copyright">
                    <h6>Copyright@2022 all rights reserved JamJamGuru.com</h6>
                </div>
                <div class="col-md-6 payment">
                    <h6>Payment partner: eSawa, ImePay, Khalti, Visa Card</h6>
                </div>
            </div>
        </div>
   </section>

<!-- footer end -->

    <script src="{{asset('Site/bootstrap/js/bootstrap.js')}}"></script>

</body>
</html>