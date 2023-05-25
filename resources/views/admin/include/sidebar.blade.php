@php $url= request()->path();  @endphp
<style>
    #sidebar-menu>ul>li>button {
    color: #fbfbfb;
    display: block;
    padding: 12px 10px 15px 10px;
    font-weight: 400;
    font-size: .9rem;
}
</style>
<div class="left main-sidebar">
    <div class="sidebar-inner leftscroll">
        <div id="sidebar-menu">
            <ul>
                <li class="submenu">
                    <a>
                        <i class="fas fa-bars"></i>
                        <span> Dashboard </span>
                    </a>
                </li>

              

                <li class="submenu">
                    <a id="tables" class="@if($url==='users') active @endif" >
                        <i class="fas fa-user"></i>
                        <span>Users</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="list-unstyled">
                        <li class="@if($url==='users') active @endif">
                            <a href="{{url('/users')}}">List</a>
                        </li>
                       
                    </ul>
                </li>
                <li class="submenu">
                    <a id="tables" class="@if($url==='foodmenu') active @endif" >
                    <i class="fab fa-product-hunt"></i>
                        <span>Foodmenu</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="list-unstyled">
                        <li class="@if($url==='foodmenu') active @endif">
                            <a href="{{url('/foodmenu')}}">List</a>
                        </li>
                       
                    </ul>
                </li>
                <li class="submenu">
                    <a id="tables" class="@if($url==='viewreservation') active @endif">
                    <i class="fas fa-money-bill-alt"></i>
                        <span>Reservation</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="list-unstyled">
                        <li class="@if($url==='viewreservation') active @endif">
                            <a href="{{url('/viewreservation')}}">List</a>
                        </li>
                       
                    </ul>
                </li>
                <li class="submenu">
                    <a id="tables" class="@if($url==='orders') active @endif">
                    <i class="fab fa-first-order-alt"></i>
                        <span>Orders</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="list-unstyled">
                        <li class="@if($url==='orders') active @endif">
                            <a href="{{url('/orders')}}">List</a>
                        </li>
                       
                    </ul>
                </li>
                 

                
 



            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>