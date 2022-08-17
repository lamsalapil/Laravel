@extends('userSite.template')
@section('meropage')

<!-- body start -->

    <section id="sliderimg">
        
            <img class="photo" src="{{asset('Site/photos/bus3.jpg')}}" alt="img 1" >
            <!-- <img class="photo" src="{{asset('Site/photos/bus1.jpg')}}" alt="img 2">
            <img class="photo" src="{{asset('Site/photos/bus2.jpg')}}" alt="img 3">
            <img class="photo" src="{{asset('Site/photos/bus3.jpg')}}" alt="img 4"> -->
        
        
    </section>

<!-- search form -->
    <section id="information">
        <div class="container">
            <div class="row">
                <div class="informationcontent">
                    <form action="{{route('getFindBus')}}" method="GET">
                        @csrf()
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-control1">
                                    <b>Form:</b> 
                                        <input type="text" name="fromwhere" placeholder="From" style="width:100%" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-control1">
                                     <b> To:</b>  
                                        <input type="text" name="togoing" placeholder="To" style="width:100%" >
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-control1">
                                      <b> Date:</b> 
                                        <input type="date" name="busdate" style="width:100%" >
                                </div>
                            </div>
                            <div class="col-md-2 submitButton">
                                <div class="form-control1">
                                <input type="submit" value="Find" name="find" class="btn" style="width:100px; font-weight:700; letter-spacing: 2px;" >
                                       
                                </div>
                            </div>
                            
            
                        </div>
                        
                    </form>
                
                </div>

            </div>
        </div>
    </section>
    <section id="Buslist">
        <div class="container">
            <div class="row">

            <h1>Bus features</h1>

            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                    <img src="{{asset('Site/photos/bus1.jpg')}}" alt="img">
                    <div class="card-body">
                    <h6> <b> NAMASTE TOURS AND TRAVELS</b></h6>
                    <h6>Tourist Bus</h6>
                    <p>Wi-Fi</p>
                    <p>A/c and Fan system</p>
                    <p>Comfatable seats</p>
                    <p>First Aid Kits</p>
                    <p>On Time Depature</p>
                    </div>
                    
                    </div>
                    
                    
                </div>
                <div class="col-md-3">
                    <div class="card">
                    <img src="{{asset('Site/photos/bus1.jpg')}}" alt="img">
                    <div class="card-body">
                    <h6> <b> NAMASTE TOURS AND TRAVELS</b></h6>
                    <h6>Tourist Bus</h6>
                    <p>Wi-Fi</p>
                    <p>A/c and Fan system</p>
                    <p>Comfatable seats</p>
                    <p>First Aid Kits</p>
                    <p>On Time Depature</p>
                    </div>
                    
                    </div>
                    
                    
                </div>
                <div class="col-md-3">
                    <div class="card">
                    <img src="{{asset('Site/photos/bus1.jpg')}}" alt="img">
                    <div class="card-body">
                    <h6> <b> NAMASTE TOURS AND TRAVELS</b></h6>
                    <h6>Tourist Bus</h6>
                    <p>Wi-Fi</p>
                    <p>A/c and Fan system</p>
                    <p>Comfatable seats</p>
                    <p>First Aid Kits</p>
                    <p>On Time Depature</p>
                    </div>
                    
                    </div>
                    
                    
                </div>
                <div class="col-md-3">
                    <div class="card">
                    <img src="{{asset('Site/photos/bus1.jpg')}}" alt="img">
                    <div class="card-body">
                    <h6> <b> NAMASTE TOURS AND TRAVELS</b></h6>
                    <h6> Tourist Bus</h6>
                    <p>Wi-Fi</p>
                    <p>A/c and Fan system</p>
                    <p>Comfatable seats</p>
                    <p>First Aid Kits</p>
                    <p>On Time Depature</p>
                    </div>
                    
                    </div>
                    
                    
                </div>
                
            </div>
        </div>

    

    </section>
    <div class="showmore">
        <input type="submit" value="Show More">
    </div>
    
   


@stop

 
