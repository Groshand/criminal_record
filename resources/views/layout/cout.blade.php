@extends('layout.main')

@section('title')
    Add user
@endsection

@section('body')

        <div class="container">
            <!--navbar start-->
            <nav class="navbar navbar-light " style="background-color: #e3f2fd;">
                <a class="navbar-brand">cout officer</a>
                <a href="alloffense">Notifications</a>
                @if(Session::has('cnotification'))
                    <h5> {{Session::get('cnotification')}}</h5>
                @endif
                <a href="#">Sri Lanka Police</a>
                <a href="#">New</a>
                <a href="#">Contact No</a>
                <a href="#">Gazzet</a>
                <a href="{{route('cowneprofile')}}">profile</a>
                <a href="{{route('clogout')}}">Logout</a>
            </nav>
            <!--navbar end-->
            <div class="row">
                <div class=""  >
                    <form class="form-inline" action="{{route('searchuserfromcout')}}" method="post" >{{csrf_field()}}user search
                        <input class="form-control mr-sm-3" type="text" name="nic" placeholder="Search by NIC" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>

            </div>

            @yield('cout')
        </div>

@endsection