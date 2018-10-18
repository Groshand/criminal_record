@extends('layout.police')
@section('police')
    <div class="container border border-light px-5 pt-2 pb-5 rounded mt-md-3">
        <h3>ALL Offenses</h3>
        <!--shapes-->
        <div class="row p-3">
            <div class="form-group col-md-3">
                <h5 class="">Accepted Offenses</h5>
                <div class="" style="height: 50px;width: 50px;background-color: #007bff; border-radius: 50%"></div>
            </div>
            <div class="form-group col-md-3">
                <h5 class="">Ongoing Offenses</h5>
                <div class="" style="height: 50px;width: 50px;background-color: #28a745; border-radius: 50%"></div>
            </div>
            <div class="form-group col-md-3">
                <h5 class="">Rejected Offenses</h5>
                <div class="" style="height: 50px;width: 50px;background-color: #dc3545; border-radius: 50%"></div>
            </div>
        </div>

            @if(count($offense)>0 )
                @foreach($offense as $ofns)
                        @foreach($users as $user)
                            @if($ofns->userId==$user->id )
                                <button data-toggle="modal" data-target="#a{{$ofns->id}}" class="col-md-12 btn border-secondary  @if($ofns->accept==0)btn-outline-success @elseif($ofns->accept==2)btn-outline-danger @elseif($ofns->accept==1) btn-outline-primary @endif" style="border-style:solid;
    border-width:thick;">
                                    <div class="row ">
                                        <div class="col-md-3">
                                            <h6 class="mb-1 d-flex">{{$ofns->id}} </h6>
                                            <img src="images/user/{{$user->profileImage}}" class="rounded img-thumbnail border-secondary" width="75px" height="75px">
                                        </div>
                                        <div class="col-md-8 rounded border border-dark" >
                                            <div class="d-flex w-100 ">
                                                <h6 class="mb-1">
                                                    @foreach($data as $data1)
                                                        @if($data1->id==$ofns->pOffenseId)
                                                            {{$data1->type}}
                                                        @endif
                                                    @endforeach
                                                </h6>
                                            </div>
                                            <h5 class="mb-1">{{$user->name}}</h5>
                                            <h6>{{$user->address}}</h6>
                                            <h6 class="text-right">Added At : {{$ofns->created_at}}</h6>

                                        </div>
                                        <div class="col-md-1"></div>
                                    </div>
                                </button><br><br>



                                <div class="modal fade text-body" id="a{{$ofns->id}}" role="dialog">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">About {{$user->name}}</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                @if($user && $ofns)
                                                    <h5>Personal Details</h5>
                                                    <div class="row">
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
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="nic">NIC No </label>
                                                                <label class="form-control" >{{$user->id}}</label>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="name">Full Name</label>
                                                                <label class="form-control" >{{$user->name}}</label>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="oname">Other Names</label>
                                                                <label class="form-control">{{$user->otherName}}</label>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="gender">Gender</label>
                                                                <label class="form-control">{{$user->gender}}</label>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="birthday">Birthday</label>
                                                                <label class="form-control">{{$user->bDay}}</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="address">Address</label>
                                                                <label class="form-control">{{$user->address}}</label>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="phoneno">Phone No</label>
                                                                <label class="form-control">{{$user->phoneNo}}</label>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="email">Email address</label>
                                                                <label class="form-control">{{$user->email}}</label>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="job">Job</label>
                                                                <label class="form-control">{{$user->job}}</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr><h5>Offense Details of {{$user->name}}</h5>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="nic">Offense No</label>
                                                                <label class="form-control" >{{$ofns->id}}</label>
                                                            </div>
                                                            <div class="form-group">
                                                                <label >Offense Added Date </label>
                                                                <label class="form-control" >{{$ofns->created_at}}</label>
                                                            </div>
                                                            <div class="form-group">
                                                                <label >Police Officer ID</label>
                                                                <label class="form-control" >{{$ofns->policeId}}</label>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="gender">Catogory of Offense</label>
                                                                @foreach($data as $data1)
                                                                    @if($data1->id==$ofns->pOffenseId)
                                                                        <label class="form-control">{{$data1->type}}</label>
                                                                    @endif
                                                                @endforeach
                                                            </div>


                                                        </div>
                                                        <div class="col-md-6">
                                                            <label >Police Officer Discription</label>
                                                            <div class="card">
                                                                <div class="card-body rounded border border-light">{{$ofns->pDiscription}}</div>
                                                            </div>
                                                            @if($ofns->cDiscription)
                                                                <label >Cout Officer Discription</label>
                                                                <div class="card">
                                                                    <div class="card-body rounded border border-light">{{$ofns->cDiscription}}</div>
                                                                </div>
                                                            @endif

                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="modal-footer">
                                                <a href="#" data-dismiss="modal" class="btn">Close</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @endif
                        @endforeach
                @endforeach
            @else
                <div class="alert-success">
                    <h6>Your Have No Offenses</h6>
                </div>
            @endif

    </div>
@endsection