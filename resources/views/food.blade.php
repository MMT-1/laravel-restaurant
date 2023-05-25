<style>

.pagination nav{
	position: absolute;
  left: 50%;
  transform: translate(-50%, -50%);

}

.clear:after, .pagination:after, .clear:before, .pagination:before {
  content: "";
  display: table;
}
.clear:after, .pagination:after {
  clear: both;
}

.pagination__wrapper {
  background: linear-gradient(to right, rgba(255, 255, 255, 0) 0%, white 17%, white 83%, rgba(255, 255, 255, 0) 100%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr="#00ffffff", endColorstr="#00ffffff",GradientType=1 );
  height: 50px;
  left: 50%;
  position: absolute;
  text-align: center;
  transform: translate(-50%, -50%);
  top: 50%;
  width: 700px;
}
.pagination__wrapper:before, .pagination__wrapper:after {
  background: linear-gradient(to right, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.1) 17%, rgba(0, 0, 0, 0.1) 83%, rgba(0, 0, 0, 0) 100%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr="#00000000", endColorstr="#00000000",GradientType=1 );
  content: "";
  height: 1px;
  left: 0;
  position: absolute;
  width: 100%;
}
.pagination__wrapper:before {
  top: -1px;
}
.pagination__wrapper:after {
  bottom: -1px;
}

@-webkit-keyframes hoverAnimation {
  from {
    opacity: 1;
  }
  to {
    opacity: 0;
  }
}

@keyframes hoverAnimation {
  from {
    opacity: 1;
  }
  to {
    opacity: 0;
  }
}
.pagination {
  display: inline-block;
  list-style: none;
  margin: 0;
  padding: 0;
}
.pagination li {
  display: block;
  float: left;
  padding: 5px;
}
.pagination li:first-child {
  border: none;
}
.page-item.active .page-link {
    z-index: 3;
    color: #fff;
    background-color: #589442;
    border-color: #007bff;
}
.pagination li span.active{
	background: #589442;
}
.pagination button,
.pagination span {
  background: none;
  border: none;
  border-radius: 50%;
  box-sizing: border-box;
  color: rgba(0, 0, 0, 0.6);
  display: block;
  font-size: 16px;
  height: 40px;
  line-height: 40px;
  min-width: 40px;
  padding: 0;
}
.pagination button {
  outline: none;
  position: relative;
  transition: all 170ms linear;
}
.pagination li a{
	background: none;
  border: none;
  border-radius: 50%;
  box-sizing: border-box;
  color: rgba(0, 0, 0, 0.6);
  display: block;
  font-size: 16px;
  height: 40px;
  line-height: 40px;
  min-width: 40px;
  padding: 0;
}
.why-text .fa-cart-plus-plus{
  position:absolute;
  top:0;
  right:0;
  margin:15px;
  font-size:28px;
  color:#fff;
}
.fa-cart-plus-1{
    position: absolute;
    z-index: 1;
    font-size: 28px;
    color: #fff;
    margin: 15px;
    top:0;
    right: 0;
}
</style>
<div class="menu-box" id="menu">
		<div class="container">
		
			<div class="row special-list" id="user_table">
                @foreach($data   as $row)
                
				<div class="col-lg-4 col-md-6 special-grid drinks">
        <form action="{{url('/addcart',$row->id)}}" method="post" >
                        @csrf
					<div class="gallery-single fix food-items">
          <button type="submit" class="p-0 m-0"><i class="fa-solid fa-cart-plus fa-cart-plus-1"></i></button>			

						<img src="foodimage/{{$row->image}}" class="img-fluid" alt="Image">

						<div class="why-text">
							<h4>{{$row->title}}</h4>
							<p>{{$row->description}}</p>
							<h5>{{$row->price}}</h5>
              <!-- <input type="number" name="quantity" style="width:80px" min="1" value="1"> -->

              <button type="submit"class="p-0 m-0"><i class="fa-solid fa-cart-plus fa-cart-plus-plus"></i></button>
            </div>
					</div></form>

                </div>
				@endforeach
			<div class="row w-100 mx-center mt-5 px-center text-center">
			<div class="col-12 text-center  mx-auto text-center">
					<div class="pagination ">
					{!! $data->links() !!}
					</div>
				</div>
			</div>
			</div>

				

		
			
		</div>
	</div>
	<!-- End Menu -->



	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>




	<script>









$(document).ready(function(){
    var loading = false;
    
    $(document).on('click', '.pagination a', function(event){
        event.preventDefault();
        
        if (!loading) {
            loading = true;
            var page = $(this).attr('href').split('page=')[1];
            
            $.ajax({
                url: "/?page=" + page,
                success: function(data) {
                    $('#user_table').html(data);
                    loading = false;
                }
            });
        }
    });
});





</script>