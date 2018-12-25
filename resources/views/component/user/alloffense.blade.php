@extends('layout.user')
@section('user')
    <div class="container border border-light px-5 pt-2 pb-5 rounded mt-md-3">
        <h3>ALL Notifications</h3>
        <!--shapes-->
        <div class="row p-3">
            <div class="form-group col-md-3">
                <h5 class="">Rejected Offenses</h5>
                <div class="" style="height: 50px;width: 50px;background-color: #007bff; border-radius: 50%"></div>
            </div>
            <div class="form-group col-md-3">
                <h5 class="">Prossing Offenses</h5>
                <div class="" style="height: 50px;width: 50px;background-color: #28a745; border-radius: 50%"></div>
            </div>
            <div class="form-group col-md-3">
                <h5 class="">Accepted Offenses</h5>
                <div class="" style="height: 50px;width: 50px;background-color: #dc3545; border-radius: 50%"></div>
            </div>
        </div>
        @if(count($offense)>0)
            @foreach($offense as $ofns)
                @if($ofns->userId==$user->id && $ofns->notification==1)
                    <button data-toggle="modal" data-target="#ab{{$ofns->id}}" class="col-md-12 btn border-secondary  @if($ofns->accept==0)btn-outline-success @elseif($ofns->accept==1)btn-outline-danger @elseif($ofns->accept==2) btn-outline-primary @endif" style="border-style:solid;
    border-width:thick;">
                        <div class="row ">
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
        @else
            <div class="bg-success">
                <h6>Your Have No notifications</h6>
            </div>
        @endif
    </div>
@endsection