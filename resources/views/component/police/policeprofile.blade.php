@extends('layout.police')

@section('police')
    <h3  class="my-3">{{$user->name}}</h3>
    <!--form start-->
    <div class=" container  border border-light py-5 rounded">
        <div class="row">
            <div class="col-md-8">
                @if($user)
                    <form>
                        <div class="form-group row">
                            <label class="col-md-4">Police ID </label>
                            <label class="form-control col-md-8">{{$police->id}}</label>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4">Phone No </label>
                            <label class="form-control col-md-8">{{$user->phoneNo}}</label>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4">Email </label>
                            <label class="form-control col-md-8">{{$user->email}}</label>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4">Address</label>
                            <label  class="form-control col-md-8">{{$user->address}}</label>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4">Police Station </label>
                            <label class="form-control col-md-8">{{$police->policeStation}}</label>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4">Start Service</label>
                            <label class="form-control col-md-8" >{{$police->created_at}}</label>
                        </div>
                    </form>

                @endif
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