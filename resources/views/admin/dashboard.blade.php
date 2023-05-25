@extends('admin.layout.master')

@section('title') Dashboard @endsection

@section('content')
 
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12">
            <div class="breadcrumb-holder">
                <h1 class="main-title float-left">Dashboard</h1>
                <ol class="breadcrumb float-right">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card-box noradius noborder bg-danger">
                <i class="far fa-user float-right text-white"></i>
                <h6 class="text-white text-uppercase m-b-20">Users</h6>
                <h1 class="m-b-20 text-white counter">{{ \App\Models\User::count() }}</h1>
                <span class="text-white">12 Today</span>
            </div>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card-box noradius noborder bg-purple">
                <i class="fab fa-product-hunt float-right text-white"></i>
                <h6 class="text-white text-uppercase m-b-20">Menu</h6>
                <h1 class="m-b-20 text-white counter">{{ \App\Models\Food::count() }}</h1>
                <span class="text-white">12 Today</span>
            </div>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card-box noradius noborder bg-warning">
                <i class="fas fa-shopping-cart float-right text-white"></i>
                <h6 class="text-white text-uppercase m-b-20">Orders</h6>
                <h1 class="m-b-20 text-white counter">{{ \App\Models\Order::count() }}</h1>
                <span class="text-white">25 Today</span>
            </div>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card-box noradius noborder bg-info">
                <i class="fas fa-money-bill-alt float-right text-white"></i>
                <h6 class="text-white text-uppercase m-b-20">Reservation</h6>
                <h1 class="m-b-20 text-white counter">{{ \App\Models\Reservation::count() }}</h1>
                <span class="text-white">5 New</span>
            </div>
        </div>
    </div>
    <!-- end row -->

    <!-- end row-->
</div>
<!-- END container-fluid -->
@endsection 
