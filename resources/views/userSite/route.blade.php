
@extends('userSite.template')
@section('routepage')
<section id="routeList">
    <div class="container">
        <div class="row">
            <table class="table">
                <thead>
                    <th>From</th>
                    <th>Duration Time</th>
                    <th>To</th>
                </thead>
                @foreach($list as $schedule)
                <tr>
                   

                    <td>{{$schedule->from}}</td>
                    <td>{{$schedule->duration}}</td>
                    <td>{{$schedule->to}}</td>
 
                </tr>
                @endforeach
            </table>
        </div>
    </div>

</section>

@stop