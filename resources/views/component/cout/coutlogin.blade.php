@extends('layout.main')

@section('title')
    Login
@endsection
@section('body')
    <div class="container">
        <div class="col-md-6 mx-auto " style="margin-top:10%;" >
            <form method="post" action="{{route('coutlogin')}}">{{csrf_field()}}
                <div class="form-group">
                    <h4>Court Officer Login</h4>
                    @if(session()->has('message'))
                        <div class="alert-danger alert">
                            {{session()->get('message')}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Court Officer ID</label>
                    <input type="text" name="id" class="form-control"   placeholder="Enter Officer's ID">
                    @if($errors->first('id'))<div class="alert-danger  form-control">{{ $errors->first('id') }}</div>@endif
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    @if($errors->first('password'))<div class="alert-danger form-control">{{ $errors->first('password') }}</div>@endif
                </div>
                <button type="submit" class="btn btn-outline-info col-md-3 mx-auto">Login</button>
            </form>
        </div>
    </div>
@endsection