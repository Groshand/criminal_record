@extends('layout.main')

@section('title')
    Login
@endsection
@section('body')
    <div class="container">
        <div class="col-md-6 mx-auto " style="margin-top:10%;" >
            <form method="post" action="{{route('coutlogin')}}">{{csrf_field()}}
                <div class="form-group">
                    <h4>Cout Officer Login</h4>
                    @if(session()->has('message'))
                        <div class="alert-danger alert">
                            {{session()->get('message')}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Cout Officer ID</label>
                    <input type="text" name="id" class="form-control"   placeholder="Enter Officer's ID">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-outline-info col-md-3 mx-auto">Login</button>
            </form>
        </div>
    </div>
@endsection