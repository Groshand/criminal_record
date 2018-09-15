@extends('layout.main')

@section('title')
    Login
@endsection
@section('body')
    <div class="container">
        <div class="col-md-6 mx-auto padding-top" >
            @if(session()->has('message'))
                <div>
                    {{session()->get('message')}}
                </div>
            @endif
            <form method="post" action="{{route('niclog')}}">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary col-md-2 mx-auto">Submit</button>
            </form>
        </div>
    </div>

    <div class="container">
        <h2>Large Modal</h2>
        <!-- Trigger the modal with a button -->
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Large Modal</button>

        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Modal Header</h4>
                    </div>
                    <div class="modal-body">
                        <p>This is a large modal.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection