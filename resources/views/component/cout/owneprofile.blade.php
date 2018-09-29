@extends('layout.cout')

@section('cout')
    <h3>{{$user->name}}</h3>
    <!--form start-->
    <div class="container">
        <div class="row">
            <button type="button" class="btn btn-info btn-lg btn-group" data-toggle="modal" data-target="#myModal1">Your Added All Offenses</button>
            <button type="button" class="btn btn-info btn-lg btn-group" data-toggle="modal" data-target="#myModal2">Accept Offenses</button>
            <button type="button" class="btn btn-info btn-lg btn-group" data-toggle="modal" data-target="#myModal3">Reject Offenses</button>

            <div class="modal fade" id="myModal1" role="dialog">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">All OFFense</h4>
                        </div>
                        <div class="modal-body">
                            @if(count($offense)>0)
                                @foreach($offense as $ofns)
                                    @if($ofns->coutOId==Auth::user()->id)
                                        <div >
                                            <h4>{{$ofns->id}}</h4><br>
                                            <label>{{$ofns->pDiscription}}</label>
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
            <div class="modal fade" id="myModal2" role="dialog">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Accept Offense</h4>
                        </div>
                        <div class="modal-body">
                            @if(count($offense)>0)
                                @foreach($offense as $ofns)
                                    @if($ofns->coutOId==Auth::user()->id && $ofns->accept==1)
                                        <div>
                                            <h4>{{$ofns->id}}</h4><br>
                                            <label>{{$ofns->pDiscription}}</label>
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
            <div class="modal fade" id="myModal3" role="dialog">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Reject Offense</h4>
                        </div>
                        <div class="modal-body">
                            @if(count($offense)>0)
                                @foreach($offense as $ofns)
                                    @if($ofns->coutOId==Auth::user()->id && $ofns->accept==2)
                                        <div>
                                            <h4>{{$ofns->id}}</h4><br>
                                            <label>{{$ofns->pDiscription}}</label>
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
        <div class="row">
            <div class="col-md-8">
                @if($user)
                    <div class="form-group row">
                        <label class="col-md-4">Cout ID </label>
                        <input type="text" class="form-control col-md-8" value="{{$cout->id}}" placeholder="{{$cout->id}}"></input>
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
                        <label class="col-md-4">Cout Officer Area </label>
                        <input type="text" class="form-control col-md-8" value="{{$cout->policeStation}}" placeholder="{{$cout->policeStation}}"></input>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4">Start Service</label>
                        <input type="text" class="form-control col-md-8" value="{{$cout->created_at}}" placeholder="{{$cout->created_at}}"></input>
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

    <!--form end-->
@endsection