@extends('layout.police')
@section('police')
    <!--form start-->
    <div class="container">
        <h3>{{$user->name}}</h3>

        <div class="container row ">
            <button type="button" class="btn btn-info col-md-4 border border-light btn-lg" data-toggle="modal" data-target="#myModal1">Profile</button>
            <button type="button" class="btn btn-info col-md-4 border border-light btn-lg" data-toggle="modal" data-target="#myModal3">Offenses</button>
            <button type="button" class="btn btn-info col-md-4 border border-light btn-lg" data-toggle="modal" data-target="#myModal2">Add Offense</button>


        </div>

     <!--Images-->
        <div class="row container my-4 border border-light py-2 rounded">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nic">Profile Image </label>
                    <img src="images/user/{{$user->profileImage}}" alt="" width="100%" height="100%" class="img-thumbnail">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nic">FingerPrint </label>
                    <img src="images/fingerprint/{{$user->fingerPrint}}" alt="" width="100%" height="100%" class="img-thumbnail">
                </div>
            </div>

        </div>


        <div class="modal fade" id="myModal1" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4>Personal Details</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">

                        <div class="container px-5">
                                @if($user)
                                        <div class="form-group row">
                                            <label class="col-md-4">NIC No </label>
                                            <label class="form-control col-md-8">{{$user->id}}</label>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-4">Full Name</label>
                                            <label class="form-control col-md-8">{{$user->name}}</label>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-4">Other Names</label>
                                            <label class="form-control col-md-8">{{$user->otherName}}</label>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-4">Gender</label>
                                            <label class="form-control col-md-8">{{$user->gender}}</label>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-4">Birthday</label>
                                            <label class="form-control col-md-8">{{$user->bDay}}</label>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-4">Address</label>
                                            <label class="form-control col-md-8">{{$user->address}}</label>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-4">Phone No</label>
                                            <label class="form-control col-md-8">{{$user->phoneNo}}</label>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-4">Email address</label>
                                            <label class="form-control col-md-8">{{$user->email}}</label>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-4">Job</label>
                                            <label class="form-control col-md-8">{{$user->job}}</label>
                                        </div>


                                    @endif
                        </div>

                    </div>
                    <div class="modal-footer">
                        <a href="#" data-dismiss="modal" class="btn">Close</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="myModal2" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">ADD OFFENSE</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="{{route('addoffense',['id'=>$user->id] )}}">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label >Select type of offense</label>
                                @if(count($data)>0)
                                    @foreach($data as $types)
                                        <div class="radio">
                                            <label data-toggle="popover"  data-trigger="hover" data-content="{{$types->discription}}">
                                                <input  type="radio"  name="types" value="{{$types->id}}">
                                                {{$types->type}}
                                            </label>
                                        </div>
                                    @endforeach
                                @endif
                                <script>
                                    $(document).ready(function(){
                                        $('[data-toggle="popover"]').popover();
                                    });
                                </script>
                                <textarea name="discription" id="" cols="30" rows="10"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary col-md-2 mx-auto">Add</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="myModal3" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">OFFense</h4>
                    </div>
                    <div class="modal-body">
                        @if(count($offense)>0)
                            @foreach($offense as $ofns)
                                @if($ofns->userId==$user->id)
                                    <div >
                                        <label >{{$ofns->pDiscription}}</label>
                                    </div>
                                @endif
                            @endforeach
                        @endif
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <!--form end-->
@endsection