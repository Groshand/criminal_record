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
                            <input type="text" class="form-control" id=""  placeholder="" value="{{$user->id}}">
                        </div>
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" class="form-control" id=""  value="{{$user->name}}">
                        </div>
                        <div class="form-group">
                            <label for="oname">Other Names</label>
                            <input type="text" class="form-control" id=""  value="{{$user->otherName}}">
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <div class="form-control">
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="gender" value="male" @if($user->gender=='male')
                                        checked
                                        @endif>Male
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="gender" value="female" @if($user->gender=='female')
                                        checked
                                        @endif>Female
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="birthday">Birthday</label>
                            <input type="date" class="form-control" value="{{$user->bDay}}" >
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" value="{{$user->address}}">
                        </div>
                        <div class="form-group">
                            <label for="phoneno">Phone No</label>
                            <input type="text" class="form-control" value="{{$user->phoneNo}}">
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$user->email}}">
                        </div>
                        <div class="form-group">
                            <label for="job">Job</label>
                            <input type="text" class="form-control" value="{{$user->job}}">
                        </div>

                        <button type="submit" class="btn btn-outline-success my-2 my-sm-0">Submit</button>

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