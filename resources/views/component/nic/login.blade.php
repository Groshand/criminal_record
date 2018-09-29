@extends('layout.main')

@section('title')
    Login
@endsection
@section('body')
    <div class="container" >
        <div class="col-md-6 mx-auto " style="margin-top:20%;">

            <form method="post" action="{{route('niclog')}}" >
                {{csrf_field()}}
                <div class="form-group">
                    <h4>Login NIC</h4>
                    <label for="exampleInputPassword1">Password</label>
                    @if(session()->has('message'))
                        <div class="alert-danger alert">
                            {{session()->get('message')}}
                        </div>
                    @endif
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-outline-info col-md-3 mx-auto">Login</button>
            </form>
        </div>
    </div>

@endsection