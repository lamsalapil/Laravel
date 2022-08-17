@extends('layouts.app', ['activePage' => 'busSchedule', 'titlePage' => __('Bus Seat')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Seat Status</h4>
            
           
            <button class="btn btn-primary" data-toggle="modal" data-target="#addseat">Add Seat</button>
            
           <a href="{{route('getbusList')}}"> <input class="btn btn-primary float-lg-right" type="button" value="Back" ></a>
            
            
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    ID
                  </th>
                  <th>
                    Bus_id
                  </th>
                  <th>
                    Seat Number
                  </th>
                  <th>
                    Seat Position
                  </th>
                  <th>
                    Status
                  </th>
                 
                  <th>
                      created_at
                    </th>
                    <th>
                      updated_at
                    </th>
                    
                </thead>
                @foreach($busSeatManage as $seat)
                <tr>
                  <td>{{$seat->id}}</td>
                  <td>{{$bus_id}}</td>
                  
                  <td>{{$seat->seat_number}}</td>
                  <td>{{$seat->seat_position}}</td>
                  <td>{{$seat->status}}</td>
                  <td>{{$seat->created_at}}</td>
                  <td>{{$seat->updated_at}}</td>

                  
                </tr>
                @endforeach
               
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="addseat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Bus Seat.</h5>
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('postManageSeat', $bus_id)}}" method="POST" enctype="multipart/form-data">
      <div class="modal-body " style="margin-left: 200px;">
            @csrf()
            <label for="busid">Bus Id.: {{$bus_id}}</label><br>
            
            <label for="busseat">Seat No</label><br>
            <input type="number" name="busseat"><br>
            <label for="busposition">Seat Position</label><br>
            <input type="text" name="busposition"><br>
            
            

            
    
      
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="save" class="btn btn-primary">Add</button>
      </div>
      </form>
    </div>
  </div>
</div>



@endsection