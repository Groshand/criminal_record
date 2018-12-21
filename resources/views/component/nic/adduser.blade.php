@extends('layout.nic')

@section('nic')
    <h3>
        @if(session()->has('message'))
            <div class="alert-primary alert">
                {{session()->get('message')}}
            </div>
        @endif
    </h3>
    <h3>Add Person</h3>
    <!--form start-->
    <div class=" container">
        <form method="post" action="{{route('adduser')}}" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <label for="nic">NIC No</label>
                <input type="text" class="form-control" id=""  placeholder="Enter NIC no" name="nic">
                @if($errors->first('nic'))<div class="alert-danger form-control">{{ $errors->first('nic') }}</div>@endif
            </div>
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" class="form-control" id=""  placeholder="Enter name" name="name">
                @if($errors->first('name'))<div class="alert-danger form-control">{{ $errors->first('name') }}</div>@endif
            </div>
            <div class="form-group">
                <label for="oname">Other Names</label>
                <input type="text" class="form-control" id=""  placeholder="Enter other name" name="oname">
                @if($errors->first('oname'))<div class="alert-danger form-control">{{ $errors->first('oname') }}</div>@endif
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <div class="form-control">
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="gender" value="male">Male
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="gender" value="female">Female
                        </label>
                    </div>
                </div>
                @if($errors->first('gender'))<div class="alert-danger form-control">{{ $errors->first('gender') }}</div>@endif
            </div>
            <div class="form-group">
                <label for="birthday">Birthday</label>
                <input type="date" class="form-control" name="bday" >
                @if($errors->first('bday'))<div class="alert-danger form-control">{{ $errors->first('bday') }}</div>@endif
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" name="address"  placeholder="Enter address">
                @if($errors->first('address'))<div class="alert-danger form-control">{{ $errors->first('address') }}</div>@endif
            </div>
            <div class="form-group">
                <label for="phoneno">Phone No</label>
                <input type="text" class="form-control" name="phoneno"  placeholder="Enter Phone no">
                @if($errors->first('phoneno'))<div class="alert-danger form-control">{{ $errors->first('phoneno') }}</div>@endif
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                @if($errors->first('email'))<div class="alert-danger form-control">{{ $errors->first('email') }}</div>@endif
            </div>
            <div class="form-group">
                <label for="job">Job</label>
                <input type="text" class="form-control" name="job"  placeholder="Enter job">
                @if($errors->first('job'))<div class="alert-danger form-control">{{ $errors->first('job') }}</div>@endif
            </div>
            <div class="form-group">
                <label for="image">User Image</label>
                <input type="file"  name="userimage"  id="userimage" >
                @if($errors->first('userimage'))<div class="alert-danger form-control">{{ $errors->first('userimage') }}</div>@endif
            </div>
            <div class="form-group">
                <label for="image">FingerPrint</label>
                <input type="file"  name="fingerprint" id="fingerprint">
                @if($errors->first('fingerprint'))<div class="alert-danger form-control">{{ $errors->first('fingerprint') }}</div>@endif
            </div>
            <button type="submit" class="btn btn-outline-success my-2 my-sm-0">Submit</button>
        </form>
    </div>

    <!--form end-->
@endsection