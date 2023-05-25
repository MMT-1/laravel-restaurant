<!DOCTYPE html>
<html lang="en">
    <head>
        <base href="/public" />
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet" />
        <title>Klassy Cafe - Restaurant HTML Template</title>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
            integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        ></script>
        <!--
    
TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
        <!-- Additional CSS Files -->
        <style>
           /*===========================================================
 23: cart page CSS
=============================================================*/
/*===========================================================
 23.1: cart detail CSS
=============================================================*/
.cart-page.cart-detail {
  padding-top: 80px;
  padding-bottom: 80px;
}
.cart-page.cart-detail .table {
  margin-bottom: 0;
}
.cart-page.cart-detail .table thead tr {
  background: #feefeb;
}
.cart-page.cart-detail .table thead tr th {
  text-transform: capitalize;
  font-size: 18px;
  line-height: 28px;
  font-weight: 700;
  color: #151a33;
  padding: 10px 0;
  text-align: center;
  border: 0;
}
.cart-page.cart-detail .table tbody tr .pro-img {
  min-width: 105px;
}
.cart-page.cart-detail .table tbody tr .pro-name {
  min-width: 250px;
}
.cart-page.cart-detail .table tbody tr .pro-price,
.cart-page.cart-detail .table tbody tr .pro-cart,
.cart-page.cart-detail .table tbody tr .pro-stock,
.cart-page.cart-detail .table tbody tr .pro-total {
  min-width: 150px;
}
.cart-page.cart-detail .table tbody tr .pro-quantity,
.cart-page.cart-detail .table tbody tr .pro-delete {
  min-width: 100px;
}
.cart-page.cart-detail .table tbody tr th, .cart-page.cart-detail .table tbody tr td {
  padding: 30px 0;
  vertical-align: middle;
  text-align: center;
}
.cart-page.cart-detail .table tbody tr th p, .cart-page.cart-detail .table tbody tr th a, .cart-page.cart-detail .table tbody tr td p, .cart-page.cart-detail .table tbody tr td a {
  text-transform: capitalize;
}
.cart-page.cart-detail .table tbody tr th a:hover, .cart-page.cart-detail .table tbody tr td a:hover {
  color: #589442;
}
.cart-page.cart-detail .table tbody tr th i, .cart-page.cart-detail .table tbody tr td i {
  font-size: 16px;
  color: #151a33;
  transition: 0.3s;
  -webkit-transition: 0.3s;
  -moz-transition: 0.3s;
  -ms-transition: 0.3s;
  -o-transition: 0.3s;
}
.cart-page.cart-detail .table tbody tr th i:hover, .cart-page.cart-detail .table tbody tr td i:hover {
  color: #589442;
}
.cart-page.cart-detail .table tbody tr th .stock, .cart-page.cart-detail .table tbody tr td .stock {
  padding: 0 10px;
  width: fit-content;
  background: #feefeb;
  margin: auto;
}
.cart-page.cart-detail .table tbody tr th .button-style1, .cart-page.cart-detail .table tbody tr td .button-style1 {
  line-height: 40px;
  padding: 0 20px;
  color: #fff;
}
.cart-page.cart-detail .table tbody tr th .button-style1:hover, .cart-page.cart-detail .table tbody tr td .button-style1:hover {
  color: #fff;
}
.cart-page.cart-detail .table tbody tr th .number-spinner button, .cart-page.cart-detail .table tbody tr td .number-spinner button {
  height: 25px;
  width: 30px;
  background: #151a33;
  display: block;
  transition: 0.3s;
  -webkit-transition: 0.3s;
  -moz-transition: 0.3s;
  -ms-transition: 0.3s;
  -o-transition: 0.3s;
}
.cart-page.cart-detail .table tbody tr th .number-spinner button:hover, .cart-page.cart-detail .table tbody tr td .number-spinner button:hover {
  background: #589442;
}
.cart-page.cart-detail .table tbody tr th .number-spinner button i, .cart-page.cart-detail .table tbody tr td .number-spinner button i {
  color: #fff;
  font-size: 14px;
}
.cart-page.cart-detail .table tbody tr th .number-spinner .up-btn, .cart-page.cart-detail .table tbody tr td .number-spinner .up-btn {
  margin-bottom: 10px;
}
.cart-page.cart-detail .table tbody tr th .number-spinner .input-value, .cart-page.cart-detail .table tbody tr td .number-spinner .input-value {
  height: 60px;
  width: 60px;
  border-radius: 0;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  -ms-border-radius: 0;
  -o-border-radius: 0;
  border: 1px solid #589442;
  color: #589442;
  font-size: 30px;
  font-weight: 400;
  margin-right: 20px;
  padding: 0;
}
.cart-page.cart-detail .table tbody tr:last-child th, .cart-page.cart-detail .table tbody tr:last-child td {
  border: 0;
}
.cart-page.cart-detail .coupon-area {
  padding-top: 10px;
}
.cart-page.cart-detail .coupon-area .coupon-input .inputs {
  height: 40px;
  width: 305px;
  background: #fbefec;
display:none;
  margin-right: 20px;
  border: 0;
  padding: 0 15px;
  outline: none;
}
.cart-page.cart-detail .coupon-area .coupon-input .inputs::placeholder {
  text-transform: capitalize;
  display:none;

}
.cart-page.cart-detail .coupon-area button {
  line-height: 40px;
  padding: 0 20px;

}
.coupon-input .button-style1{
    display:none;
}

/*===========================================================
 23.2: cart total CSS
=============================================================*/
.cart-page.cart-total {
  padding-bottom: 80px;
}
.cart-page.cart-total .total-content {
  border: 1px solid #ddd;
  padding: 20px 30px;
}
.cart-page.cart-total .title {
  padding-bottom: 15px;
  margin-top: -17px;
}
.cart-page.cart-total .title h5 {
  font-weight: 700;
  text-transform: capitalize;
}
.cart-page.cart-total .sub {
  border-top: 1px solid #ddd;
  border-bottom: 1px solid #ddd;
  padding: 15px 0;
}
.cart-page.cart-total .sub p {
  text-transform: capitalize;
}
.cart-page.cart-total .ship {
  padding-top: 15px;
  padding-bottom: 15px;
}
.cart-page.cart-total .ship p {
  padding-bottom: 15px;
}
.cart-page.cart-total .input-container {
  position: relative;
  display: block;
  padding-left: 40px;
  padding-bottom: 20px;
}
.cart-page.cart-total .input-container:last-child {
  padding-bottom: 0;
}
.cart-page.cart-total .input-container span {
  text-transform: capitalize;
}
.cart-page.cart-total .input-container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}
.cart-page.cart-total .input-container input:checked ~ .checkmark:after {
  display: block;
}
.cart-page.cart-total .input-container .checkmark {
  position: absolute;
  top: 4px;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 50%;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -ms-border-radius: 50%;
  -o-border-radius: 50%;
}
.cart-page.cart-total .input-container .checkmark:after {
  content: "";
  position: absolute;
  display: none;
  top: 8px;
  left: 8px;
  width: 8px;
  height: 8px;
  border-radius: 50%;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -ms-border-radius: 50%;
  -o-border-radius: 50%;
  background: #589442;
}
.cart-page.cart-total .input-container:hover input ~ .checkmark {
  background: #ffe3e3;
}
.cart-page.cart-total .estimate {
  padding-bottom: 15px;
}
.cart-page.cart-total .estimate h5 {
  font-size: 16px;
  font-weight: 700;
  color: #151a33;
  text-transform: capitalize;
}
.cart-page.cart-total .estimate p {
  transition: 0.3s;
  -webkit-transition: 0.3s;
  -moz-transition: 0.3s;
  -ms-transition: 0.3s;
  -o-transition: 0.3s;
}
.cart-page.cart-total .estimate p:hover {
  color: #589442;
}
.cart-page.cart-total .checkout {
  border-top: 1px solid #ddd;
  padding-top: 10px;
  margin-top:29px;
}
.cart-page.cart-total .checkout h5 {
  font-size: 16px;
  font-weight: 700;
  color: #151a33;
  text-transform: capitalize;
}
.cart-page.cart-total .checkout a {
  width: 100%;
  line-height: 40px;
}
   
   .button-style1, .button-style1[type=submit]{
    position: relative;
    display: inline-block;
    text-transform: capitalize;
    color: rgb(255, 255, 255);
    text-align: center;
    font-size: 16px;
    width: 268px;
    height: 41px;
    font-weight: 500;
    vertical-align: middle;
    z-index: 1;
    transition: all 500ms ease 0s;
    background: rgb(88, 148, 66);
}
.button-style1 .btn-dot::before {
    position: absolute;
    content: "";
    width: 8px;
    height: 8px;
    top: 0px;
    right: 0px;
    background: rgba(255, 255, 255, 0.4);
    transition: all 500ms ease 0s;
}
.button-style1 .btn-dot::after {
    position: absolute;
    content: "";
    width: 8px;
    height: 8px;
    left: 0px;
    bottom: 0px;
    background: rgba(255, 255, 255, 0.4);
    transition: all 500ms ease 0s;
}
.button-style1::before {
    position: absolute;
    content: "";
    width: 100%;
    height: 0%;
    left: 0px;
    top: 0px;
    z-index: -1;
    background: rgb(21, 26, 51);
    transition: all 500ms ease 0s;
}
.button-style1:after {
  position: absolute;
  content: '';
  width: 100%;
  height: 0%;
  background: #151a33;
  left: 0px;
  bottom: 0px;
  z-index: -1;
  transition: all 500ms ease;
  -webkit-transition: all 500ms ease;
  -moz-transition: all 500ms ease;
  -ms-transition: all 500ms ease;
  -o-transition: all 500ms ease;
}
.button-style1:hover:before, .button-style1:hover:after {
  height: 100%;
}
.button-style1:hover .btn-dot:after {
  bottom: calc(100% - 8px);
}
.button-style1:hover .btn-dot:before {
  top: calc(100% - 8px);
  bottom: 0;
}
.button-style1:hover {
  color: #fff;
}
</style>
<style>
.cart {
position: relative;
display: flex;
align-items: center;
cursor: pointer;
font-size:25px;

}
.cart-count {
position: absolute;
top: -10px;
right: -10px;
background-color: #589442;
color: white ;
border-radius: 50%;
width: 18px;
height: 18px;

font-size: 12px;
display: flex;
justify-content: center;
align-items: center;
}

.fa-shopping-cart{
color: #2a2a2a;

}
.input-container {
    position: relative !important;
}

.fa-location-arrow {
    position: absolute !important;
    top: 50% !important;
    right: 10px !important;
    transform: translate(-50%, -50%) !important;
    color: #000 !important;
    font-size: 25px !important;
    cursor: pointer !important;
}
h5 {
    font-size: 18px;
    line-height: 30px;
    color: rgb(21, 26, 51);
}


</style>
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />

        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css" />

        <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css" />

        <link rel="stylesheet" href="assets/css/owl-carousel.css" />

        <link rel="stylesheet" href="assets/css/lightbox.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        label {
    display: inline-block ;
    text-align: left;
    display: flex;
    align-items: flex-start;
    margin-bottom: 0.5rem;
    margin-top: 15px;

}
    </style>

    </head>
    @include('navbar')


        <div id="top" class="mx-auto container text-center ">

            <form action="{{url('orderconfirm')}}" method="post">                    
                @csrf


   <!-- start account area -->
   <section class="cart-page cart-detail" style="min-height:60vh;margin-top:40px"> 
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">image</th>
                                    <th scope="col">product name</th>
                                    <th scope="col">price</th>
                                    <th scope="col">quantity</th>
                                    <th scope="col">total</th>
                                    <th scope="col">delete</th>
                                </tr>
                            </thead>
                            <tbody>
    @php
    $subtotal = 0;
    $count = 0;
    @endphp


    @foreach($data as $item)
        <tr>
            <th scope="row" class="pro-img">
                <a href="shop-4-column-sidebar.html">
                    <img width="130px" height="50px" src="foodimage/{{ $item->image }}" alt="{{ $item->title }}"/>
                </a>
            </th>
            <td class="pro-name">
            <input type="text" name="foodname[]" value="{{$item->title}}" hidden />
                <a href="#">{{$item->title }}</a>
            </td>
            <td class="pro-price">
            <input type="text" name="price[]" value="{{$item->price}}" hidden />

                <p>{{$item->price}}</p></td>
            <td class="pro-quantity">
                <div class="d-flex number-spinner justify-content-center">
                <input type="text" name="quantity[]" value="{{$item->quantity}}" hidden />

                <input type="text" class="form-control text-center input-value" value="{{$item->quantity}}" name="quantityUp[{{$item->id}}]" id="quantity-{{$item->id}}">


                    <div class="buttons">
                    <button class="up-btn" data-id="{{$item->id}}"><i class="fa-solid fa-plus"></i></button>
<button class="down-btn" data-id="{{$item->id}}"><i class="fa-solid fa-minus"></i></button>

                    </div>
                </div>
            </td>
            <td class="pro-total"><p>{{$item->price * $item->quantity}}</p></td>
            <td class="pro-delete">
                <a href="{{url('/remove',$item->id)}}">
                <i class="fa-regular fa-trash-can"></i>                                        </a>
                </a>
            </td>
        </tr>
        @php
        $subtotal += (float)$item->price * (float)$item->quantity;
        $count += $item->quantity;
        @endphp
    @endforeach


</tbody>

                        </table>
                    </div>
                   
            </div>
        </div>
    </div>
</section>
<!-- end account area -->

<!-- start cart-total area -->
<section class="cart-page cart-total">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="total-content">
                    
                   
                <div class="title text-center">
                <h5 class="total-items"><strong>{{ $count }}</strong> Item(s)  in your Bag</h5>
                    </div>
                           
                            
                                <div class="text-start">
                                    <label for="" >Name</label>
                                    <input type="text" name="name" class="w-100 text-start" required placeholder="Name">
                                </div>
                                <div class="">
                                    <label for="" >Phone</label>
                                    <input type="number" name="phone" class="w-100 " required placeholder="Phone">
                                </div>
                                <div class="label-order-confirm">
                                    <label for="">Address</label>
                                    <div class=" position-relative">
    <input type="text" name="address" class="w-100" required placeholder="Address" style="padding-right: 56px;">
    <i class="fa-solid fa-location-arrow position-absolute top-50 end-0 translate-middle-y" onclick="getLocation()" style="color:#000;font-size:25px;cursor:pointer;"></i>
</div>

                                </div>

                                <div class="checkout">
                        <div class="d-flex justify-content-between" style="    margin-bottom: 10px;
">
                            <h5>total</h5>
                            <p>{{ number_format($subtotal, 2) }}</p>
                        </div>
                                    <button class="button-style1" type="submit"  >Order Confirm</button>
                                </div>
                            </div>       
                        </div>
                    </div>
                </div>
            
</section>
</form>


        </div>
            <!-- jQuery -->
            <script src="assets/js/jquery-2.1.0.min.js"></script>

            <!-- Bootstrap -->
            <script src="assets/js/popper.js"></script>
            <script src="assets/js/bootstrap.min.js"></script>

            <!-- Plugins -->
            <script src="assets/js/owl-carousel.js"></script>
            <script src="assets/js/accordions.js"></script>
            <script src="assets/js/datepicker.js"></script>
            <script src="assets/js/scrollreveal.min.js"></script>
            <script src="assets/js/waypoints.min.js"></script>
            <script src="assets/js/jquery.counterup.min.js"></script>
            <script src="assets/js/imgfix.min.js"></script>
            <script src="assets/js/slick.js"></script>
            <script src="assets/js/lightbox.js"></script>
            <script src="assets/js/isotope.js"></script>

            <!-- Global Init -->
            <script src="assets/js/custom.js"></script>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

            <script>
                $(function () {
                    var selectedClass = "";
                    $("p").click(function () {
                        selectedClass = $(this).attr("data-rel");
                        $("#portfolio").fadeTo(50, 0.1);
                        $("#portfolio div")
                            .not("." + selectedClass)
                            .fadeOut();
                        setTimeout(function () {
                            $("." + selectedClass).fadeIn();
                            $("#portfolio").fadeTo(50, 1);
                        }, 500);
                    });
                });
            </script>

            <script>
                // $("#order").click(function () {
                //     $("#appear").show();
                // });
                // $("#close").click(function () {
                //     $("#appear").hide();
                // });
            </script>
        </div>
       
<script>
    function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(fillAddress);
    } else {
        alert("Geolocation is not supported by this browser.");
    }
}

function fillAddress(position) {
    var latitude = position.coords.latitude;
    var longitude = position.coords.longitude;
    var url = "https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=" + latitude + "&lon=" + longitude;

    fetch(url)
        .then(response => response.json())
        .then(data => {
            var address = data.display_name;
            document.getElementsByName("address")[0].value = address;
        })
        .catch(error => console.error(error));
}



function fillAddress(position) {
                var latitude = position.coords.latitude;
                var longitude = position.coords.longitude;
                var url = "https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=" + latitude + "&lon=" + longitude;

                fetch(url)
                    .then(response => response.json())
                    .then(data => {
                        var address = data.display_name;
                        localStorage.setItem("address", address);
                        document.getElementsByName("address")[0].value = address;
                    })
                    .catch(error => console.error(error));
            }

            window.onload = function() {
                var address = localStorage.getItem("address");
                if (address) {
                    document.getElementsByName("address")[0].value = address;
                }
            };

</script>
 
<script>
    $(document).ready(function() {
        // Listen to the click event on the plus button
        $('.up-btn').click(function() {
            var id = $(this).data('id');
            var inputField = $('#quantity-' + id);
            var currentValue = parseInt(inputField.val());
            var originalValue = inputField.data('quantity');
            inputField.val(currentValue + 1);
            inputField.data('quantity', originalValue);
        });

        // Listen to the click event on the minus button
        $('.down-btn').click(function() {
            var id = $(this).data('id');
            var inputField = $('#quantity-' + id);
            var currentValue = parseInt(inputField.val());
            var originalValue = inputField.data('quantity');
            if (currentValue > 1) {
                inputField.val(currentValue - 1);
                inputField.data('quantity', originalValue);
            }
        });
    });
</script>
<script>
    $('.up-btn, .down-btn').click(function(e) {
        e.preventDefault();
        var id = $(this).data('id');
        var quantity = parseInt($('#quantity-' + id).val());
        var originalQuantity = $('#quantity-' + id).data('quantity');
        if ($(this).hasClass('up-btn')) {
            quantity += 1;
        } else {
            quantity = Math.max(1, quantity - 1);
        }
        $.ajax({
            url: '/update-quantity/' + id,
            type: 'POST',
            data: {
                quantity: quantity,
                original_quantity: originalQuantity,
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                $('#quantity-' + id).data('quantity', response.quantity);
            },
            error: function(xhr) {
                console.log(xhr.responseText);
            }
        });
    });
</script>



    </body>
</html>
