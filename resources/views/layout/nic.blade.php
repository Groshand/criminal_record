@extends('layout.main')

@section('title')
    Add user
@endsection

@section('body')
    @if(session()->has('name')=='nicadmin')
        <div class="container">
        <!--navbar start-->
        <nav class="navbar navbar-light " style="background-color: #e3f2fd;">
            <a class="navbar-brand">NIC Department</a>
            <form class="form-inline" action="{{route('searchuser')}}" method="post">{{csrf_field()}}
                <input class="form-control mr-sm-3" type="text" name="nic" placeholder="Search by NIC" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            <h5><a href="{{route('logout')}}">Logout</a></h5>
        </nav>
        <!--navbar end-->
        @yield('nic')
    @endif
    @if(session()->has('name')!='nicadmin')
        <div class="container btn-danger">
            <h5> Please you must <a href="{{route('niclog')}}">LogIn</a> to access resources</h5>
        </div>

    @endif
    </div>

@endsection