@extends('layout.main')

@section('title')
    admin
@endsection

@section('body')
    @if(session()->has('name2')=='adminadmin')
        <!--navbar start-->
        <nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Admin Blade</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            All Offenses
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Police-Officers
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Court-Officers
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Users
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            News
                        </a>
                        <div class="dropdown-menu bg-dark ">
                            <a class="dropdown-item list-group-item list-group-item-dark" href="https://www.newsfirst.lk/latest-news/" target="https://www.newsfirst.lk/latest-news/">Lates News</a>
                            <a class="dropdown-item list-group-item list-group-item-dark" href="https://www.w3newspapers.com/srilanka/" target="https://www.w3newspapers.com/srilanka/">News Papers</a>
                            <a class="dropdown-item list-group-item list-group-item-dark" href="https://archives.dailynews.lk/2001/pix/gov_gazette.html" target="https://archives.dailynews.lk/2001/pix/gov_gazette.html">Gazette</a>
                        </div>
                    </li>
                    <div class="navbar-nav"  >
                        <form class="form-inline"  >{{csrf_field()}}
                            <input class="form-control w-80" type="text" name="nic" placeholder="Search " aria-label="Search">
                            <button class="btn  btn-outline-info my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </div>
                </ul>

                <ul class="navbar-nav my-1 ">
                    <li class="nav-item">
                        <a class="nav-link " href="#">
                            <i class="fa fa-bell-o">
                                @if(Session::has('admin1'))
                                    <span class="badge badge-danger">{{Session::get('admin1')}}</span>
                                @endif
                            </i>
                            Notification
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="{{route('adminlogout')}}">
                            <i class="fa fa-sign-out">
                                <span class="badge badge-danger"></span>
                            </i>
                            Logout
                        </a>
                    </li>
                </ul>

            </div>
        </nav>
        <!--navbar end-->

        <div class="container">
            @yield('admin')
        </div>
    @endif
    @if(session()->has('name2')!='adminadmin')

        <div class="alert alert-danger container mt-sm-5">
            <h5> Please you must <a href="admin">LogIn</a> to access resources</h5>
        </div>
    @endif

@endsection