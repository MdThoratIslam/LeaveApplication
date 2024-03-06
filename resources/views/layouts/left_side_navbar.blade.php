<nav class="pcoded-navbar  ">
    <div class="navbar-wrapper  ">
        <div class="navbar-content scroll-div ">

            <div class="">
                <div class="main-menu-header">
                    <img class="img-radius" src="{{asset('assets/images/users/avatar-2.jpg')}}" alt="User-Profile-Image">
                    <div class="user-details">
                        <span>John Doe</span>
                        <div id="more-details">UX Designer<i class="fa fa-chevron-down m-l-5"></i></div>
                    </div>
                </div>
                <div class="collapse" id="nav-user-link">
                    <ul class="list-unstyled">
                        <li class="list-group-item"><a href="user-profile.html"><i class="feather icon-user m-r-5"></i>View
                                Profile</a></li>
                        <li class="list-group-item"><a href="#!"><i class="feather icon-settings m-r-5"></i>Settings</a>
                        </li>
                        <li class="list-group-item"><a href="auth-normal-sign-in.html"><i
                                    class="feather icon-log-out m-r-5"></i>Logout</a></li>
                    </ul>
                </div>
            </div>

            <ul class="nav pcoded-inner-navbar ">
                <li class="nav-item pcoded-menu-caption">
                    <label>Navigation</label>
                </li>
                <li class="nav-item">
                    <a href="{{route('dashboard')}}" class="nav-link ">
                        <span class="pcoded-micon">
                            <i class="feather icon-home"></i>
                        </span>
                        <span class="pcoded-mtext">Dashboard
                        </span>
                    </a>
                </li>
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    @canany(['create-leave', 'edit-leave', 'delete-leave', 'view-leave'])
                            <li class="nav-item pcoded-hasmenu">
                                <a href="#!" class="nav-link ">
                                    <span class="pcoded-micon">
                                        <i class="feather icon-layout"></i>
                                    </span>
                                    <span class="pcoded-mtext">Leave</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li><a href="{{route('apply.create')}}" >Apply</a></li>
                                    <li><a href="{{route('apply.index')}}">List</a></li>
                                </ul>
                            </li>
                    @endcanany
                    @canany(['create-user', 'edit-user', 'delete-user', 'view-user'])
                            <li class="nav-item pcoded-hasmenu">
                                <a href="#!" class="nav-link ">
                                    <span class="pcoded-micon">
                                        <i class="feather icon-layout"></i>
                                    </span>
                                    <span class="pcoded-mtext">User Create</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li><a href="{{Route('create_user')}}" >Create</a></li>
                                    <li><a href="{{route('users.index')}}">List</a></li>
                                </ul>
                            </li>
                    @endcanany
                    @canany(['create-role', 'edit-role', 'delete-role', 'view-role',])
                            <li class="nav-item pcoded-hasmenu">
                            <a href="#!" class="nav-link ">
                                <span class="pcoded-micon">
                                    <i class="feather icon-layout"></i>
                                </span>
                                <span class="pcoded-mtext">Manage Role</span>
                            </a>
                            <ul class="pcoded-submenu">
                                <li><a href="{{Route('roles.create')}}" >Create</a></li>
                                <li><a href="{{route('roles.index')}}">List</a></li>
                            </ul>
                        </li>
                    @endcanany
                @endguest
            </ul>
        </div>
    </div>
</nav>
