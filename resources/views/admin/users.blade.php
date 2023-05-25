

    
    
    @extends('admin.layout.master')

@section('title') Create Vendor @endsection

@section('content')
    
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12">
            <div class="breadcrumb-holder">
                <h1 class="main-title float-left">Dashboard</h1>
                <ol class="breadcrumb float-right">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item active">Users List</li>
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
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $data)
    
                            <tr class="">
                              <td >{{$data->name}}</td>
                              <td >{{$data->email}}</td>

            




                              @if($data->usertype == "0")
                              <td ><a href="{{url('/deleteuser',$data->id)}}" class="btn btn-secondary btn-sm" title="delete">
                              <i class="fa fa-trash"></i>
Delete</a></td>
                              @else
                              <td ><a >Not Allowed</a></td>
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
