@extends('layout.main')
@section('title')
    Add user
@endsection

@section('body')

            <!--navbar start-->
            <nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="phome">Find The Criminal</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">

                        <li class="nav-item">
                            <a class="nav-link" href="searchuserfrompolice" >
                                Add Offense
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="paalloffense" >
                                All Offenses
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pactnlow" >
                                Acts & Laws
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.police.lk/" target="https://www.police.lk/">
                               Sri Lanka Police
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.police.lk/index.php/tourist-police/1678-police-stations-telephone-directory" target="https://www.police.lk/index.php/tourist-police/1678-police-stations-telephone-directory">
                                Contact
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                News
                            </a>
                            <div class="dropdown-menu bg-dark ">
                                <a class="dropdown-item list-group-item list-group-item-dark" href="https://www.newsfirst.lk/tag/sri-lanka-police/" target="https://www.newsfirst.lk/tag/sri-lanka-police/">Police News</a>
                                <a class="dropdown-item list-group-item list-group-item-dark" href="https://www.w3newspapers.com/srilanka/" target="https://www.w3newspapers.com/srilanka/">News Papers</a>
                                <a class="dropdown-item list-group-item list-group-item-dark" href="https://archives.dailynews.lk/2001/pix/gov_gazette.html" target="https://archives.dailynews.lk/2001/pix/gov_gazette.html">Gazette</a>
                            </div>
                        </li>
                        <div class="navbar-nav"  >
                            <form class="form-inline" action="{{route('searchpolice')}}" method="post" >{{csrf_field()}}
                                <input class="form-control w-80" type="text" name="id" placeholder="Search By Officer ID" aria-label="Search">
                                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
                            </form>
                        </div>
                    </ul>

                    <ul class="navbar-nav my-1 ">
                        <li class="nav-item">
                            <a class="nav-link " href="{{route('palloffense' )}}">
                                <i class="fa fa-bell-o">
                                    @if(Session::has('pnotification'))
                                    <span class="badge badge-danger">{{Session::get('pnotification')}}</span>
                                    @endif
                                </i>
                                Notification
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{route('owneprofile')}}">
                                <i class="fa fa-user">
                                    <span class="badge badge-danger"></span>
                                </i>
                                Profile
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{route('plogout')}}">
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
                @yield('police')
            </div>




@endsection