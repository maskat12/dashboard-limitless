<div class="navbar navbar-expand-md navbar-dark">
    <div class="">
        <a href="/" class="d-inline-block">
            <img src="{{asset('/limitless/images/logo_icon_dark.png')}}" alt="logo" >
        </a>
    </div>
    <!-- /mobile controls -->
    <div class="d-md-none">
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar-mobile" aria-expanded="false">
            <i class="icon-paragraph-justify3"></i>
        </button>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar-auth-mobile" aria-expanded="false">
            <i class="icon-user"></i>
        </button>
    </div>

    <div class="navbar-collapse collapse justify-content-center navbar-center" id="navbar-mobile" style="">
 
    </div>
    <div class="navbar-collapse collapse justify-content-end ml-md-auto" id="navbar-auth-mobile" style="">
        @if(Auth::check())
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="navbar-nav-link" href="{{route('dashboard')}}">
                    <i class="icon-home2"></i>
                    <span>&nbsp;Dashboard</span>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item dropdown dropdown-user">
                <a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
                    <img src="/global_assets//images/image.png" class="rounded-circle" alt="">
                    <span>{{$currentUser->username}}</span>
                </a>

                <div class="dropdown-menu dropdown-menu-right">
                    
                    <a href="{{ url('/account') }}" class="dropdown-item"><i class="icon-cog5"></i> Pengaturan</a>
                    <a href="{{ url('logout') }}"  class="dropdown-item"
                        onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        <i class="icon-switch2"></i>Logout
                        
                        <form id="logout-form" action="{{ url('logout') }}" method="GET" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </a>

                </div>
            </li>
        </ul>
        @else
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="navbar-nav-link" href="/login">
                    <i class="icon-user-tie"></i>
                    <span>&nbsp;Login</span>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="navbar-nav-link" href="/register">
                    <i class="icon-user-plus"></i>
                    <span>&nbsp;Register</span>
                </a>
            </li>
        </ul>
        @endif
    </div>
</div>