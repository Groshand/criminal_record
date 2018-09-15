@extends('layout.main')

@section('title')
     user
@endsection

@section('body')

    <div class="container">
        <!--navbar start-->
        <nav class="navbar navbar-light " style="background-color: #e3f2fd;">
            <a class="navbar-brand">Police Department</a>
            <a href="{{route('searchuserfrompolice')}}">Add Offense</a>
            <a href="#">Sri Lanka Police</a>
            <a href="#">New</a>
            <a href="#">Contact No</a>
            <a href="#">Gazzet</a>
            <a href="{{route('logout')}}">Logout</a>
        </nav>
        <!--navbar end-->


        @yield('user')
    </div>

@endsection