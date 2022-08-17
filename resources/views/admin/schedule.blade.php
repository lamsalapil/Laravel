@extends('layouts.app', ['activePage' => 'busSchedule', 'titlePage' => __('Bus Schedule')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Bus schedule list Table</h4>
            <p class="card-category"> Schedule Listed Bus</p>
            <button class="btn btn-primary" data-toggle="modal" data-target="#addschedule">Update Schedule</button>
            
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
                    date
                  </th>
                  <th>
                    from
                  </th>
                  <th>
                    To
                  </th>
                  <th>
                    Time
                  </th>
                  <th>
                    Duration Time
                  </th>
                  <th>
                    Seats Number
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
                @foreach($busSchedule as $list)
                <tr>
                  <td>{{$list->id}}</td>
                  <td>{{$bus_id}}</td>
                  <td>{{$list->date}}</td>
                  <td>{{$list->from}}</td>
                  <td>{{$list->to}}</td>
                  <td>{{$list->time}}</td>
                  <td>{{$list->duration}}</td>
                  <td>{{$list->seat_number}}</td>
                  <td>{{$list->status}}</td>
                  <td>{{$list->created_at}}</td>
                  <td>{{$list->updated_at}}</td>

                  
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
<div class="modal fade" id="addschedule" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Bus Schedule List.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route ('postScheduleList')}}" method="POST" enctype="multipart/form-data">
      <div class="modal-body " style="margin-left: 200px;">
            @csrf()
            <label for="busnumber">Bus id</label><br>
            <input type="number"  name="busId" value="{{$bus_id}}" readonly><br>
            <label for="busDate">Date</label><br>
            <input type="date" name="busdate"><br>
            <label for="fromBus">From</label><br>
            <input type="Text" name="placefrom"></br>
            <label for="toBusr">To</label><br>
            <input type="Text"  name="placeTo"></br>
            <label for="TimeBus">Time</label><br>
            <input type="time"  name="startTime"></br>
            <label for="duration">Duration Time</label><br>
            <input type="duration"  name="duration"></br>
            <label for="BusSeats">Bus seats Number</label><br>
            <input type="number" name="seatsBus"></br>
           
            

            
    
      
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="save" class="btn btn-primary">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>



@endsection