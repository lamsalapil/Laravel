@extends('userSite.template')
@section('searchpage')

<!-- body start -->
    <section id="search-information">
        <div class="container">
            <div class="row">
                <div class="search-informationcontent">
                    <form action="" method="GET">
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
                            <div class="col-md-2 search-submitButton">
                                <div class="form-control1">
                                <input type="submit" value="Update" name="find" >
                                       
                                </div>
                            </div>
                            
            
                        </div>
                        
                    </form>
                
                </div>

            </div>
        </div>
    </section>
    <section id="search">
        <div class="container">
            <div class="row">
            <h3>Search Result</h3>
            @if($find->count())
            @foreach($find as $list)
            <div class="col-md-3 bookbox">
                {{$list->from}}
            </div>
            <div class="col-md-3 bookbox">
                {{$list->to}}
            </div>
            <div class="col-md-3 bookbox">
                {{$list->date}}
            </div>
            @endforeach
            @else

               <p class="notfound">Bus Not avilable.....</p> 
            @endif
            </div>
        </div>
    </section>




@stop

 
