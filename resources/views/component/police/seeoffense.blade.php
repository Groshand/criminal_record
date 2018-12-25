@extends('layout.police')
@section('police')


        <div class="container border border-light px-5 pt-2 pb-5 rounded mt-md-3">
            @if(session()->has('message'))
                <div>
                    {{session()->get('message')}}
                </div>
            @endif
            @if($user && $offense)
                <h3>{{$user->name}}</h3>
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
                            <label >Offense Added Date </label>
                            <label class="form-control" >{{$offense->created_at}}</label>
                        </div>
                        <div class="form-group">
                            <label >Police Officer ID</label>
                            <label class="form-control" >{{$offense->policeId}}</label>
                        </div>
                        <div class="form-group">
                            <label for="gender">Catogory of Offense</label>
                            @foreach($data as $data1)
                                @if($data1->id==$offense->pOffenseId)
                                    <label class="form-control">{{$data1->type}}</label>
                                @endif
                            @endforeach
                        </div>


                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label >Police Officer Discription</label>
                            <p class="" >{{$offense->pDiscription}}</p>
                        </div>
                        <div class="form-group">@if($offense->cDiscription)
                            <label >Court Officer Discription</label>
                            <p class="">{{$offense->cDiscription}}</p>@endif
                        </div>
                    </div>
                </div>
            </div>
            @endif

        </div>
@endsection




