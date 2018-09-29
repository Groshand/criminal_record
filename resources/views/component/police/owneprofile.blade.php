@extends('layout.police')

@section('police')
    <h3 class="m-3">{{$user->name}}</h3>
    <!--form start-->
    <div class="container ">
            <div class="container row ">
                <button type="button" class="btn btn-info col-md-3 border border-light btn-lg" data-toggle="modal" data-target="#myModal1">Your Added All Offenses</button>
                <button type="button" class="btn btn-info col-md-3 border border-light btn-lg" data-toggle="modal" data-target="#myModal2">Accept Offenses</button>
                <button type="button" class="btn btn-info col-md-3 border border-light btn-lg" data-toggle="modal" data-target="#myModal3">Reject Offenses</button>
                <button type="button" class="btn btn-info col-md-3 border border-light btn-lg" data-toggle="modal" data-target="#myModal4">Proccessing Offenses</button>


            </div>



<!--main models-->
            <div class="modal fade text-body" id="myModal1" role="dialog">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">All OFFense</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            @if(count($offense)>0)
                                @foreach($offense as $ofns)
                                    @if($ofns->policeId==Auth::user()->id)
                                        @foreach($user12 as $user2)
                                            @if($ofns->userId==$user2->id)
                                                <button data-toggle="modal" data-target="#aa{{$ofns->id}}" class="col-md-12 btn btn-outline-info border-primary">

                                                     <div class="row">
                                                <div class="col-md-3">
                                                    <h6 class="mb-1 d-flex">{{$ofns->id}} </h6>
                                                    <img src="images/user/{{$user2->profileImage}}" class="rounded img-thumbnail" width="75px" height="75px">
                                                </div>
                                                <div class="col-md-8 rounded border border-dark" >
                                                    <div class="d-flex w-100 justify-content-between">
                                                        <h6 class="mb-1">
                                                            @foreach($data as $data1)
                                                                @if($data1->id==$ofns->pOffenseId)
                                                                    {{$data1->type}}
                                                                @endif
                                                            @endforeach
                                                        </h6>
                                                        <small>Added At : {{$ofns->created_at}}</small>
                                                    </div>
                                                    <p class="mb-1">{{$user2->name}}</p>
                                                    <small>{{$user2->address}}</small>
                                                </div>
                                                <div class="col-md-1"></div>
                                            </div>
                                                </button><br>
                                            @endif
                                        @endforeach
                                    @endif
                                @endforeach
                            @endif
                        </div>
                        <div class="modal-footer">
                            <a href="#" data-dismiss="modal" class="btn">Close</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade text-body" id="myModal2" role="dialog">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Accepted Offense</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            @if(count($offense)>0)
                                @foreach($offense as $ofns)
                                    @if($ofns->policeId==Auth::user()->id && $ofns->accept==1)
                                        @foreach($user12 as $user2)
                                            @if($ofns->userId==$user2->id)
                                                <button data-toggle="modal" data-target="#aa{{$ofns->id}}" class="col-md-12 btn btn-outline-info border-primary">

                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <h6 class="mb-1 d-flex">{{$ofns->id}} </h6>
                                                            <img src="images/user/{{$user2->profileImage}}" class="rounded img-thumbnail" width="75px" height="75px">
                                                        </div>
                                                        <div class="col-md-8 rounded border border-dark" >
                                                            <div class="d-flex w-100 justify-content-between">
                                                                <h6 class="mb-1">
                                                                    @foreach($data as $data1)
                                                                        @if($data1->id==$ofns->pOffenseId)
                                                                            {{$data1->type}}
                                                                        @endif
                                                                    @endforeach
                                                                </h6>
                                                                <small>Added At : {{$ofns->created_at}}</small>
                                                            </div>
                                                            <p class="mb-1">{{$user2->name}}</p>
                                                            <small>{{$user2->address}}</small>
                                                        </div>
                                                        <div class="col-md-1"></div>
                                                    </div>
                                                </button><br>
                                            @endif
                                        @endforeach
                                    @endif
                                @endforeach
                            @endif
                        </div>
                        <div class="modal-footer">
                            <a href="#" data-dismiss="modal" class="btn">Close</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade text-body" id="myModal3" role="dialog">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Reject Offense</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            @if(count($offense)>0)
                                @foreach($offense as $ofns)
                                    @if($ofns->policeId==Auth::user()->id && $ofns->accept==2)
                                        @foreach($user12 as $user2)
                                            @if($ofns->userId==$user2->id)
                                                <button data-toggle="modal" data-target="#aa{{$ofns->id}}" class="col-md-12 btn btn-outline-info border-primary">

                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <h6 class="mb-1 d-flex">{{$ofns->id}} </h6>
                                                            <img src="images/user/{{$user2->profileImage}}" class="rounded img-thumbnail" width="75px" height="75px">
                                                        </div>
                                                        <div class="col-md-8 rounded border border-dark" >
                                                            <div class="d-flex w-100 justify-content-between">
                                                                <h6 class="mb-1">
                                                                    @foreach($data as $data1)
                                                                        @if($data1->id==$ofns->pOffenseId)
                                                                            {{$data1->type}}
                                                                        @endif
                                                                    @endforeach
                                                                </h6>
                                                                <small>Added At : {{$ofns->created_at}}</small>
                                                            </div>
                                                            <p class="mb-1">{{$user2->name}}</p>
                                                            <small>{{$user2->address}}</small>
                                                        </div>
                                                        <div class="col-md-1"></div>
                                                    </div>
                                                </button><br>
                                            @endif
                                        @endforeach
                                    @endif
                                @endforeach
                            @endif
                        </div>
                        <div class="modal-footer">
                            <a href="#" data-dismiss="modal" class="btn">Close</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade text-body" id="myModal4" role="dialog">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Proccess Offense</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            @if(count($offense)>0)
                                @foreach($offense as $ofns)
                                    @if($ofns->policeId==Auth::user()->id && $ofns->accept==0)
                                        @foreach($user12 as $user2)
                                            @if($ofns->userId==$user2->id)
                                                <button data-toggle="modal" data-target="#aa{{$ofns->id}}" class="col-md-12 btn btn-outline-info border-primary">

                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <h6 class="mb-1 d-flex">{{$ofns->id}} </h6>
                                                            <img src="images/user/{{$user2->profileImage}}" class="rounded img-thumbnail" width="75px" height="75px">
                                                        </div>
                                                        <div class="col-md-8 rounded border border-dark" >
                                                            <div class="d-flex w-100 justify-content-between">
                                                                <h6 class="mb-1">
                                                                    @foreach($data as $data1)
                                                                        @if($data1->id==$ofns->pOffenseId)
                                                                            {{$data1->type}}
                                                                        @endif
                                                                    @endforeach
                                                                </h6>
                                                                <small>Added At : {{$ofns->created_at}}</small>
                                                            </div>
                                                            <p class="mb-1">{{$user2->name}}</p>
                                                            <small>{{$user2->address}}</small>
                                                        </div>
                                                        <div class="col-md-1"></div>
                                                    </div>
                                                </button><br>
                                            @endif
                                        @endforeach
                                    @endif
                                @endforeach
                            @endif
                        </div>
                        <div class="modal-footer">
                            <a href="#" data-dismiss="modal" class="btn">Close</a>
                        </div>
                    </div>
                </div>
            </div>


<!--sub model-->
            @if(count($offense)>0)
                @foreach($offense as $ofns)
                    @foreach($user12 as $user2)
                        @if($ofns->userId==$user2->id)
                            <div class="modal fade text-body" id="aa{{$ofns->id}}" data-backdrop="static">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">About {{$user2->name}}</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div><div class="container"></div>
                                        <div class="modal-body">

                                            @if($user2 && $ofns)
                                                <h5>Personal Details</h5>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="nic">Profile Image </label>
                                                                <img src="images/user/{{$user2->profileImage}}" alt="" width="100%" height="100%" class="img-thumbnail">
                                                            </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="nic">FingerPrint </label>
                                                                <img src="images/fingerprint/{{$user2->fingerPrint}}" alt="" width="100%" height="100%" class="img-thumbnail">
                                                            </div>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="nic">NIC No </label>
                                                            <label class="form-control" >{{$user2->id}}</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="name">Full Name</label>
                                                            <label class="form-control" >{{$user2->name}}</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="oname">Other Names</label>
                                                            <label class="form-control">{{$user2->otherName}}</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="gender">Gender</label>
                                                            <label class="form-control">{{$user2->gender}}</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="birthday">Birthday</label>
                                                            <label class="form-control">{{$user2->bDay}}</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="address">Address</label>
                                                            <label class="form-control">{{$user2->address}}</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="phoneno">Phone No</label>
                                                            <label class="form-control">{{$user2->phoneNo}}</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="email">Email address</label>
                                                            <label class="form-control">{{$user2->email}}</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="job">Job</label>
                                                            <label class="form-control">{{$user2->job}}</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr><h5>Offense Details of {{$user2->name}}</h5>
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
            @endif



<!--Officer content-->
        <div class="row container mt-md-5 border border-light py-5 rounded">
            <div class="col-md-8">
                @if($user)
                    <div class="form-group row">
                        <label class="col-md-4">Police ID </label>
                        <input type="text" class="form-control col-md-8" value="{{$police->id}}" placeholder="{{$police->id}}"></input>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4">NIC</label>
                        <input type="text" class="form-control col-md-8" value="{{$user->id}}" placeholder="{{$user->id}}"></input>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4">Phone No </label>
                        <input type="text" class="form-control col-md-8"value="{{$user->phoneNo}}" placeholder="{{$user->phoneNo}}"></input>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4">Email </label>
                        <input type="email" class="form-control col-md-8" value="{{$user->email}}" placeholder="{{$user->email}}"></input>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4">Address</label>
                        <input type="text" class="form-control col-md-8" value="{{$user->address}}" placeholder="{{$user->address}}"></input>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4">Police Station </label>
                        <input type="text" class="form-control col-md-8" value="{{$police->policeStation}}" placeholder="{{$police->policeStation}}"></input>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4">Start Service</label>
                        <input type="text" class="form-control col-md-8" value="{{$police->created_at}}" placeholder="{{$police->created_at}}"></input>
                    </div>
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

@endsection