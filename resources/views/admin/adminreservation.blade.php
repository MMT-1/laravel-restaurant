@extends('admin.layout.master')

@section('title') Vendor List @endsection

@section('content')
 
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12">
            <div class="breadcrumb-holder">
                <h1 class="main-title float-left">Dashboard</h1>
                <ol class="breadcrumb float-right">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item active">Reservation List</li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="card mb-3">
                <div class="card-body">
                       @include('admin.include.message')
                       <div class="table-responsive">
                        <table class="datatable table table-bordered table-hover display">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Guest</th>
                                    <th>Date</th>
                                    <th>Time</th> 
                                    <th>Message</th>
                                </tr>
                            </thead>
                            <tbody>
        @foreach($data as $data)
        <tr >
          <td >{{$data->name}}</td>
          <td >{{$data->email}}</td>
          <td >{{$data->phone}}</td>
          <td >{{$data->guest}}</td>
          <td >{{$data->date}}</td>
          <td >{{$data->time}}</td>
          <td >{{$data->message}}</td>
          
        </tr>
        @endforeach
      </tbody>
                        </table>
                    </div>
                  </div>
             </div>
        </div>
    </div>
    
 
 

</div>
@endsection 





