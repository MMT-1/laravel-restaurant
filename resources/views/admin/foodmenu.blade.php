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
                    <li class="breadcrumb-item active">Menu List</li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>

<div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="card mb-3">
                  <div class="card-body">
<div class=" ">
   <form class="m-5 mx-auto" method="post" action="{{ url('/uploadfood') }}" enctype="multipart/form-data">
  @csrf
  <div class="mb-3 form-group">
    <label for="title" class="form-label">Title</label>
    <input type="text" placeholder="Write a title" required class="form-control" name="title" id="title">
  </div>
  <div class="mb-3">
    <label for="price" class="form-label">Price</label>
    <input type="text" class="form-control" required placeholder="Write a price" name="price" id="price">
  </div>
  <div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <textarea class="form-control" placeholder="Write a description" required name="description" id="description" rows="3"></textarea>
  </div>

  <div class="input-file-container mb-3">  
    <input class="input-file" id="my-file" name="image" type="file">
    <label tabindex="0" for="my-file" class="input-file-trigger">Select a file...</label>
  </div>
  <p class="file-return"></p>
  
  <div class="form-group text-right m-b-0">
                            <button class="btn btn-primary" type="submit">
                                <i class="fa fa-check"></i>  Create 
                            </button>
                          
                        </div>

</form>

    </div>
    </div>
    </div>
    </div>









     
<div class="container-fluid">
    
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="card mb-3">
                <div class="card-body">
                       @include('admin.include.message')
                       <div class="table-responsive">
                        <table class="datatable table table-bordered table-hover display">
                            <thead>
                                <tr>
          <th >Food Name</th>
          <th >Price</th>
          <th >Description</th>
          <th >Image</th>
          <th >Delete</th>
          <th >Update</th>
        </tr>
      </thead> 

      <tbody>
        @foreach($data as $food)
        <tr class="">
          <td>{{$food->title}}</td>
          <td>{{$food->price}}</td>
          <td>{{$food->description}}</td>
          <td><img src="foodimage/{{$food->image}}" style="width:100%;height:100%;max-width:130px;max-height:130px;border-radius: 0;" alt=""></td>


          <td>
            <a href="{{url('/deletemenu',$food->id)}}" class="btn btn-secondary btn-sm" title="delete">
              <i class="fa fa-trash"></i>
              Delete
            </a>
          </td>




          <td>          
          <a class="btn btn-primary btn-sm" title="Edit" href="{{url('/updatemenu',$food->id)}}">
             <i class="fa fa-edit"></i>
             Edit
            </a> 
        </td>
        </tr>
        @endforeach
      </tbody>
    
    </table>
    <div class=" text-center px-auto  mx-auto text-center mt-5">
              <div class="pagination text-center px-auto  mx-auto justify-content-center"  >
              {{ $data->links() }}

              </div>
          </div>
			
    

      </div>

          </div>
       
  </div>
  




</div>





<script>
  document.querySelector("html").classList.add('js');

var fileInput  = document.querySelector( ".input-file" ),  
    button     = document.querySelector( ".input-file-trigger" ),
    the_return = document.querySelector(".file-return");
      
button.addEventListener( "keydown", function( event ) {  
    if ( event.keyCode == 13 || event.keyCode == 32 ) {  
        fileInput.focus();  
    }  
});
button.addEventListener( "click", function( event ) {
   fileInput.focus();
   return false;
});  
fileInput.addEventListener( "change", function( event ) {  
    the_return.innerHTML = this.value;  
});  
</script>

@endsection