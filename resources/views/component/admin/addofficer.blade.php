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
                @if($errors->first('nic'))<div class="alert-danger form-control">{{ $errors->first('nic') }}</div>@endif
                <input type="text" class="form-control" id=""  placeholder="Enter NIC no" name="nic">
            </div>
            <div class="form-group">
                <label for="id">Officer ID</label>
                @if($errors->first('id'))<div class="alert-danger form-control">{{ $errors->first('id') }}</div>@endif
                <input type="text" class="form-control" id=""  placeholder="Enter Officer ID" name="id">
            </div>
            <div class="form-group">
                <label >Area</label>
                @if($errors->first('area'))<div class="alert-danger form-control">{{ $errors->first('area') }}</div>@endif
                <input type="text" class="form-control" name="area"  placeholder="Enter area">
            </div>
            <div class="form-group">
                <label for="gender">Officer</label>
                @if($errors->first('cp'))<div class="alert-danger form-control">{{ $errors->first('cp') }}</div>@endif
                <div class="form-control">
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="cp" value="police">Police
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="cp" value="cout">Court
                        </label>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-outline-success col-md-2 mx-auto">Add Officer</button>
        </form>
    </div>

    <!--form end-->
@endsection