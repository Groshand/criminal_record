@extends('layout.main')

@section('title')
    Login
@endsection
@section('body')
    <div class="container">
        <div class="col-md-6 mx-auto padding-top" >
            <form method="post" action="{{route('policelogin')}}">{{csrf_field()}}
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="text" name="id" class="form-control"   placeholder="Enter ID">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary col-md-2 mx-auto">Submit</button>
            </form>
        </div>
    </div>
@endsection