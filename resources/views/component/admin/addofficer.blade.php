@extends('layout.admin')

@section('admin')
    <h3>
        @if(session()->has('message'))
            <div class="alert-danger alert">
                {{session()->get('message')}}
            </div>
        @endif
    </h3>
    <h3>Add Officers</h3>
    <!--form start-->
    <div class="container  border border-light py-5 rounded">
        <form method="post" action="{{route('addofficer')}}" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <label for="nic">NIC No</label>
                <input type="text" class="form-control" id=""  placeholder="Enter NIC no" name="nic">
            </div>
            <div class="form-group">
                <label for="id">Officer ID</label>
                <input type="text" class="form-control" id=""  placeholder="Enter Officer ID" name="id">
            </div>
            <div class="form-group">
                <label for="password">Area</label>
                <input type="text" class="form-control" name="area"  placeholder="Enter area">
            </div>
            <div class="form-group">
                <label for="gender">Officer</label>
                <div class="form-control">
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="cp" value="police">Police
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="cp" value="cout">Cout
                        </label>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary col-md-2 mx-auto">Add</button>
        </form>
    </div>

    <!--form end-->
@endsection