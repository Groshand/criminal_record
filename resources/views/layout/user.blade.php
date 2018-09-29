@extends('layout.main')

@section('title')
     user
@endsection

@section('body')


    <!--navbar start-->

    <nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">User Blade</a>
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
                        <a class="nav-link" href="https://www.victimsupport.org.uk/crime-info/types-crime">
                            About Crime
                        </a>
                    </li>
                    <li class="nav-item dropdown" data-hover="dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            Contacts
                        </a>
                        <div class="dropdown-menu bg-dark ">
                            <a class="dropdown-item list-group-item list-group-item-dark" href="https://www.police.lk/index.php/tourist-police/1678-police-stations-telephone-directory" target="https://www.police.lk/index.php/tourist-police/1678-police-stations-telephone-directory">Police Stations Contacts</a>
                            <a class="dropdown-item list-group-item list-group-item-dark" href="http://www.drp.gov.lk/Templates/Contact.us.english.Department-for-Registration-of-Persons.html" target="http://www.drp.gov.lk/Templates/Contact.us.english.Department-for-Registration-of-Persons.html">Contacts NIC Department</a>
                            <a class="dropdown-item list-group-item list-group-item-dark" href="http://www.ebizindex.com/index.php/snorkel/sri-lanka-emergency-telephone-numbers.html" target="http://www.ebizindex.com/index.php/snorkel/sri-lanka-emergency-telephone-numbers.html">Emergency Contacts</a>
                        </div>
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
                    <div class="navbar-nav "  >
                        <form class="form-inline" action="{{route('searchoffense')}}" method="post" >{{csrf_field()}}
                            <input class="form-control " type="text" name="id" placeholder="Search by Offence ID " aria-label="Search">
                            <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </div>
                </ul>

                <ul class="navbar-nav my-1 ">
                    <li class="nav-item">
                        <a class="nav-link " href="{{route('ualloffense')}}">
                            <i class="fa fa-bell-o">
                                @if(Session::has('notification'))
                                    <span class="badge badge-danger"> {{Session::get('notification')}}</span>
                                @endif
                            </i>
                            Notification
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{route('uprofile')}}">
                            <i class="fa fa-user">
                                <span class="badge badge-danger"></span>
                            </i>
                            @if(Auth::user()) {{Auth::user()->name}} @endif
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{route('ulogout')}}">
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
        @yield('user')
    </div>

@endsection