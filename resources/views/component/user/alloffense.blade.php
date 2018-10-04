@extends('layout.user')
@section('user')
    <div class="container border border-light px-5 pt-2 pb-5 rounded mt-md-3">
        <h3>ALL Offenses</h3>
        @if(count($offense)>0)
            @foreach($offense as $ofns)
                @if($ofns->userId==$user->id)
                    <button data-toggle="modal" data-target="#ab{{$ofns->id}}" class="col-md-12 btn border-secondary  @if($ofns->accept==0)btn-success @elseif($ofns->accept==1)btn-danger @elseif($ofns->accept==2) btn-primary @endif" style="border-style:solid;
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
                                @if($ofns->accept==0)
                                    <h3>Processing Offense</h3>
                                @elseif($ofns->accept==1)
                                    <h3>Accepted Offense</h3>
                                @elseif($ofns->accept==2)
                                    <h3>Rejected Offense</h3>
                                @endif
                                <h6 class="text-right">Added At : {{$ofns->created_at}}</h6>

                            </div>
                            <div class="col-md-1"></div>
                        </div>
                    </button><br><br>
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
        @else
            <div class="bg-success">
                <h6>Your Have No Offenses</h6>
            </div>
        @endif
    </div>
@endsection