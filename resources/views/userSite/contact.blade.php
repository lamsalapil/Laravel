@extends('userSite.template')
@section('contactpage')

    <section id="busContact">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <form action="">
                        <h3>Contact us</h3>
                        <div class="contactname">

                            <h5>Full name:</h5>
                            <input type="text" name="fullname" ><br>

                            <h5>Email Address:</h5>
                            <input type="text" name="fullname" ><br>
                            
                            <h5>Subject:</h5>
                            <input type="text" name="fullname" ><br>
                            <h5>Massage:</h5>
                            <textarea name="massage" id="massage" cols="30" rows="10"></textarea><br>

                            
                            <input class="btn" type="submit" value="send">

                        </div>
                    </form>
                </div>
                <div class="col-md-6 contactimg">
                    <img src="{{asset('Site/photos/Contact-Us.png')}}" alt="img">
                </div>
            </div>
        </div>
    </section>
    <section id="contactus">
        <div class="container">
            <div class="row">
                
                <div class="col-md-4 contact">
                    
                    <small><i class="fa-solid fa-phone"></i><br> Contact</small><br>
                     9802212120
                </div>
                <div class="col-md-4 email">
                    
                    <small><i class="fa-solid fa-envelope"></i></i><br> Email</small><br>
                    
                    bussawari@gmail.com
                </div>
                <div class="col-md-4 address">
                    
                    <small><i class="fa-solid fa-location"></i><br> Address</small><br>
                    Pokhara, Nepal
                </div>
            </div>
        </div>
    </section>
   
   
    @stop