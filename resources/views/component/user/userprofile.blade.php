@extends('layout.user')
@section('user')
    <h3>{{$user->name}}</h3>
    <!--form start-->
    <div class="container">
        <!-- Trigger the modal with a button -->
        <div class="container row ">
            <button type="button" class="btn btn-info col-md-4 border border-light btn-lg" data-toggle="modal" data-target="#myModal1">Profile</button>
            <button type="button" class="btn btn-info col-md-4 border border-light btn-lg" data-toggle="modal" data-target="#myModal2">New Offenses</button>
            <button type="button" class="btn btn-info col-md-4 border border-light btn-lg" data-toggle="modal" data-target="#myModal3">All Offense</button>
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



        <div class="modal fade text-body" id="myModal1" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4>Personal Details</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">

                        <div class="container">
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
        <div class="modal fade text-body" id="myModal2" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4>New OFFENSE</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        @if(count($offense)>0)
                            @foreach($offense as $ofns)
                                @if($ofns->userId==$user->id && $ofns->accept==0)
                                    <button data-toggle="modal" data-target="#ab{{$ofns->id}}" class="col-md-12 btn btn-outline-success border-primary">

                                        <div class="row">
                                            <div class="col-md-3">
                                                <h6 class="mb-1 d-flex">{{$ofns->id}} </h6>
                                                @if($ofns->accept==0)
                                                    <img src="images/emoji/cofuse.jpg" class="rounded img-thumbnail border-secondary" width="75px" height="75px">
                                                @elseif($ofns->accept==1)
                                                    <img src="images/emoji/sad.jpg" class="rounded img-thumbnail border-secondary" width="75px" height="75px">
                                                @elseif($ofns->accept==2)
                                                    <img src="images/emoji/hpy.jpg" class="rounded img-thumbnail border-secondary" width="75px" height="75px">
                                                @endif
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
                                                <p class="mb-1">{{$user->name}}</p>
                                                <small>{{$user->address}}</small>
                                            </div>
                                            <div class="col-md-1"></div>
                                        </div>
                                    </button>
                                    <div class="modal fade text-body" id="ab{{$ofns->id}}" data-backdrop="static">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">About Offense</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div><div class="container"></div>
                                                        <div class="modal-body">

                                                            @if($user && $ofns)

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
                                                                            <label >Court Officer Discription</label>
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
                        <h4 >All OFFense</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        @if(count($offense)>0)
                            @foreach($offense as $ofns)
                                @if($ofns->userId==$user->id)
                                    <button data-toggle="modal" data-target="#abc{{$ofns->id}}" class="col-md-12 btn  border-primary @if($ofns->accept==0)btn-outline-success @elseif($ofns->accept==1)btn-outline-danger @elseif($ofns->accept==2) btn-outline-primary @endif">

                                        <div class="row">
                                            <div class="col-md-3">
                                                <h6 class="mb-1 d-flex">{{$ofns->id}} </h6>
                                                @if($ofns->accept==0)
                                                    <img src="images/emoji/cofuse.jpg" class="rounded img-thumbnail border-secondary" width="75px" height="75px">
                                                @elseif($ofns->accept==1)
                                                    <img src="images/emoji/sad.jpg" class="rounded img-thumbnail border-secondary" width="75px" height="75px">
                                                @elseif($ofns->accept==2)
                                                    <img src="images/emoji/hpy.jpg" class="rounded img-thumbnail border-secondary" width="75px" height="75px">
                                                @endif
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
                                                <p class="mb-1">{{$user->name}}</p>
                                                <small>{{$user->address}}</small>
                                            </div>
                                            <div class="col-md-1"></div>
                                        </div>
                                    </button><br>
                                    <div class="modal fade text-body" id="abc{{$ofns->id}}" data-backdrop="static">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">About Offense</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                </div><div class="container"></div>
                                                <div class="modal-body">

                                                    @if($user && $ofns)

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
                                                                    <label >Court Officer Discription</label>
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
                        @endif
                    </div>
                    <div class="modal-footer">
                        <a href="#" data-dismiss="modal" class="btn">Close</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!--form end-->
@endsection