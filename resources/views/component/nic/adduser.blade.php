@extends('layout.nic')

@section('nic')
    <h3>
        @if(session()->has('message'))
            <div>
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
            </div>
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" class="form-control" id=""  placeholder="Enter name" name="name">
            </div>
            <div class="form-group">
                <label for="oname">Other Names</label>
                <input type="text" class="form-control" id=""  placeholder="Enter other name" name="oname">
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
            </div>
            <div class="form-group">
                <label for="birthday">Birthday</label>
                <input type="date" class="form-control" name="bday" >
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" name="address"  placeholder="Enter address">
            </div>
            <div class="form-group">
                <label for="phoneno">Phone No</label>
                <input type="text" class="form-control" name="phoneno"  placeholder="Enter Phone no">
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="job">Job</label>
                <input type="text" class="form-control" name="job"  placeholder="Enter job">
            </div>
            <div class="form-group">
                <label for="image">User Image</label>
                <input type="file"  name="userimage"  id="userimage" >
            </div>
            <div class="form-group">
                <label for="image">FingerPrint</label>
                <input type="file"  name="fingerprint" id="fingerprint">
            </div>
            <button type="submit" class="btn btn-outline-success my-2 my-sm-0">Submit</button>
        </form>
    </div>

    <!--form end-->
@endsection