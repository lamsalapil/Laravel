@extends('layouts.app', ['activePage' => 'BusList', 'titlePage' => __('Bus Detail')])


@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Edit Bus Detail</h4>
            <p class="card-category"> Edit Bus details from list.</p>
           
          </div>
          <div class="card-body">
            <div class="table-responsive">
            <form action="{{route('postEditbusdetail', $BusList->id)}}" method="POST" enctype="multipart/form-data">
            <div class="modal-body " style="margin-left: 200px;">
            @csrf()
                <label for="busnumber">Bus Number</label><br>
                <input type="text" name="bnumber" value="{{$BusList->busnumber}}"><br>
        
                <label for="busphoto">photo</label><br>
                <input type="file" name="bphoto"><img src="{{asset('BusListPhoto/' .$BusList->Photo)}}" alt="img" width="100px"></br>
                <label for="Contact Number">Contact</label><br>
                <input type="number" id="CNumber" name="contact" onKeyPress="if(this.value.length==10) return false;" value="{{$BusList->Contact}}"></br>
                <label for="BusRegisterName">Bus Register Name</label><br>
                <input type="text" id="busname" name="bname" value="{{$BusList->Company}}"></br>
                <label for="BusOwner">Owner</label><br>
                <input type="text" id="owner" name="bowner" value="{{$BusList->Owner}}"></br>

            
    
      
      
            </div>
            <div class="modal-footer">
                
                <button type="submit" name="save" class="btn btn-primary">Edit</button>
            </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
    