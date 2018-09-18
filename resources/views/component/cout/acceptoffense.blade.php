@extends('layout.cout')
@section('cout')
    @if(session()->has('message'))
        <div>
            {{session()->get('message')}}
        </div>
    @endif
    @if($user && $offense)
        <h3>{{$user->name}}</h3>

        <div class="bg-light container">
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
            <form action="{{route('acceptoffense',['id'=>$offense->id])}}" method="post">{{csrf_field()}}
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
                                    <div class="form-control">
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="types" value="{{$data1->id}}" @if($data1->type=='Antisocial behaviour')
                                                checked
                                                        @endif>Antisocial behaviour
                                            </label>
                                        </div>
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="types" value="{{$data1->id}}" @if($data1->type=='Arson')
                                                checked
                                                        @endif>Arson
                                            </label>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>


                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label >Police Officer Discription</label>
                            <p class="" >{{$offense->pDiscription}}</p>
                        </div>
                        <div class="form-group">
                            <label >Cout Officer Discription</label>
                            <textarea class="form-control" name="discription" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                </div>
                <div>
                <div class="form-group" >
                    <label >Offense Accept Or Reject</label>
                    <div class="form-control">
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="accept" value="1">Accept
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="accept" value="2">Reject
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary col-md-2 mx-auto">Update</button>
                </div>
            </div>
            </form>
        </div>
    @endif
@endsection




