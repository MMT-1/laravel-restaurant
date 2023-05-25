





@extends('admin.layout.master')

@section('title') Category List @endsection

@section('content')
 
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12">
            <div class="breadcrumb-holder">
                <h1 class="main-title float-left">Dashboard</h1>
                <ol class="breadcrumb float-right">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item active">Orders List</li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="mb-3">
                <div class=" float-right">
                <form action="{{url('/search')}}" method="get">
                    @csrf
                    <div class="input-group  mx-auto" >
                  <input type="text" name="search" class="form-control " aria-label="Search" aria-describedby="button-addon2">
                  <button class="btn btn-info" type="submit" id="button-addon2">Search</button>
                </div>

                  </form>
</div>
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
                            <th >Name</th>
                            <th >Phone</th>
                            <th >Address</th>
                            <th >Foodname</th>
                            <th >Price</th>
                            <th >Quantity</th>
                            <th >Total Price</th>
                            <th >Action</th>
                          </tr>
                        </thead>
                        <tbody>
      @foreach($data as $data)
    
        <tr >
          <td >{{$data->name}}</td>
          <td >{{$data->phone}}</td>
          <td >{{$data->address}}</td>
          <td >{{$data->foodname}}</td>
          <td >{{$data->price}}</td>
          <td >{{$data->quantity}}</td>
          <td >{{$data->quantity * $data->price}}</td>
          @if(Auth()->user()->usertype == 1)
              <td><a href="{{ url('/deleteorder', $data->id) }}"  class="btn btn-secondary btn-sm" title="delete">delete</a></td>
              <i class="fa fa-trash"></i>

          @else
              <td>Not Allowed</td>
          @endif


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




