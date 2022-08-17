@extends('layouts.app', ['activePage' => 'ListBus', 'titlePage' => __('Bus List')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Bus List Table</h4>
            <p class="card-category"> Listed Bus</p>
            <button class="btn btn-primary" data-toggle="modal" data-target="#addbus">Add Bus</button>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    ID
                  </th>
                  <th>
                    Bus Number
                  </th>
                  <th>
                    Bus Photo
                  </th>
                  <th>
                    Contact
                  </th>
                  <th>
                    Company
                  </th>
                  <th>
                    Owner
                  </th>
                  <th>
                      create_at
                    </th>
                    <th>
                      action
                    </th>
                </thead>
                @foreach($ListBus as $bus)
                <tr>
                  <td>{{$bus->id}}</td>
                  <td>{{$bus->busnumber}}</td>
                  <td><img src="{{asset('BusListPhoto/' .$bus->Photo)}}" alt="img" width="50px"></td>
                  <td>{{$bus->Contact}}</td>
                  <td>{{$bus->Company}}</td>
                  <td>{{$bus->Owner}}</td>
                  <td>{{$bus->created_at}}</td>
                  <td> <a href="{{route('getSchedulebus', $bus->id)}}">Schedule</a> || <a href="{{route('getDeletebuslist', $bus->id)}}">Delete</a> || <a href="{{route('getEditbuslist', $bus->id)}}">Edit</a> || <a href="{{route('getManageSeat', $bus->id)}}">Seat</a> </td>

                  
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
<div class="modal fade" id="addbus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Bus List.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('postBusList')}}" method="POST" enctype="multipart/form-data">
      <div class="modal-body " style="margin-left: 200px;">
            @csrf()
            <label for="busnumber">Bus Number</label><br>
            <input type="text" name="Ga" maxlength="2" placeholder="Ga">
            <input type="number" name="twoNo" placeholder="00" onKeyPress="if(this.value.length==2) return false;">
            <input type="text" name="ta" maxlength="2" placeholder="Ta">
            <input type="number" name="fourNo" id="title" name="bnumber" placeholder="0000" onKeyPress="if(this.value.length==4) return false;"><br>
            <label for="busphoto">photo</label><br>
            <input type="file" name="bphoto"></br>
            <label for="Contact Number">Contact</label><br>
            <input type="number" id="CNumber" name="contact" onKeyPress="if(this.value.length==10) return false;" placeholder="+977"></br>
            <label for="BusRegisterName">Bus Register Name</label><br>
            <input type="text" id="busname" name="Bname" placeholder="Bus name"></br>
            <label for="BusOwner">Owner</label><br>
            <input type="text" id="owner" name="Bowner" placeholder="Owner"></br>

            
    
      
      
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