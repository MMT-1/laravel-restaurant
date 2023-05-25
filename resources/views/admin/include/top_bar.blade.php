<div class="headerbar">
    <!-- LOGO -->
    <div class="headerbar-left">
        <a href="/panel" class="logo">
            <img alt="Logo" src="{{asset('admin/assets/images/logo.png')}}" />
            <span>Dashboard</span>
        </a>
    </div>

    <nav class="navbar-custom">
        <ul class="list-inline float-right mb-0">
           
            
            
            <li class="list-inline-item dropdown notif">
                <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" aria-haspopup="false" aria-expanded="false">
                    <img src="{{asset('admin/assets/images/avatars/admin.png')}}" alt="Profile image" class="avatar-rounded">
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                    <!-- item-->
                    <div class="dropdown-item noti-title">
                        <h5 class="text-overflow">
                            <small>Hello, {{auth()->user()->name}}</small>
                        </h5>
                    </div>
                    <!-- item-->
                    <a href="user/profile" class="dropdown-item notify-item">
                        <i class="fas fa-user"></i>
                        <span>Profile</span>
                    </a>

                    <!-- item-->
                    <a  class="dropdown-item notify-item  pt-0">
                    <form method="POST"  action="{{ route('logout') }}" style="margin:p;padding:0">
                    @csrf
                        <button type="submit" style="background:none;border:none;margin:p;padding:0">
                        <i class="fas fa-power-off"></i>
                        <span>Logout</span>
                        </button>
                        
                    </a>
                </div>
            </li>
        </ul>
        <ul class="list-inline menu-left mb-0">
            <li class="float-left">
                <button class="button-menu-mobile open-left">
                    <i class="fas fa-bars"></i>
                </button>
            </li>
        </ul>
    </nav>
</div>
<script>
    $(document).ready(function() {
        $('.dropdown-toggle').dropdown();
    });
</script>