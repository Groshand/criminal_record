@extends('layout.main')
@section('title')
    Add user
@endsection

@section('body')
    @if(session()->has('name')=='nicadmin')
        <!--navbar start-->


        <nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Cout Officer Blade</a>
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
                        <form class="form-inline" action="{{route('searchuser')}}" method="post" >{{csrf_field()}}
                            <input class="form-control w-80" type="text" name="nic" placeholder="Search By NIC" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </div>
                </ul>

                <ul class="navbar-nav my-1 ">
                    <li class="nav-item">
                        <a class="nav-link " href="#">
                            <i class="fa fa-bell-o">
                                    <span class="badge badge-danger">2</span>
                            </i>
                            Notification
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="{{route('niclogout')}}">
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

        @yield('nic')
    @endif
    @if(session()->has('name')!='nicadmin')

        <div class="alert alert-danger container mt-sm-5">
            <h5> Please you must <a href="{{route('niclog')}}">LogIn</a> to access resources</h5>
        </div>

    @endif
    </div>

@endsection