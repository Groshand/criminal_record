@extends('layout.nic')
@section('nic')
    <h3>{{$user->name}}</h3>
    <!--form start-->
    <div class=" container">
        <div class="row">
            <div class="col-md-8">
                <form>

                    @if($user)

                        <div class="form-group">
                            <label for="nic">NIC No </label>
                            <lable class="form-control">{{$user->id}}</lable>
                        </div>
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <lable class="form-control">{{$user->name}}</lable>
                        </div>
                        <div class="form-group">
                            <label for="oname">Other Names</label>
                            <lable class="form-control">{{$user->otherName}}</lable>
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <lable class="form-control">{{$user->gender}}</lable>
                        </div>
                        <div class="form-group">
                            <label for="birthday">Birthday</label>
                            <lable class="form-control">{{$user->bDay}}</lable>
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <lable class="form-control">{{$user->address}}</lable>
                        </div>
                        <div class="form-group">
                            <label for="phoneno">Phone No</label>
                            <lable class="form-control">{{$user->phoneNo}}</lable>
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <lable class="form-control">{{$user->email}}</lable>
                        </div>
                        <div class="form-group">
                            <label for="job">Job</label>
                            <lable class="form-control">{{$user->job}}</lable>
                        </div>


                    @endif
                </form>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="nic">Image </label>
                    <img src="images/user/{{$user->profileImage}}" alt="" width="100%" height="100%" class="img-thumbnail">
                </div>
            </div>
        </div>

    </div>

    <!--form end-->
@endsection