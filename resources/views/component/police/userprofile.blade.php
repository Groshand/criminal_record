@extends('layout.police')
@section('police')
    <h3>{{$user->name}}</h3>
    <!--form start-->
    <div class="bg-light container">
        <!-- Trigger the modal with a button -->
        <button type="button" class="btn btn-info btn-lg btn-group" data-toggle="modal" data-target="#myModal1">Profile</button>
        <button type="button" class="btn btn-info btn-lg btn-group" data-toggle="modal" data-target="#myModal2">Offense</button>
        <button type="button" class="btn btn-info btn-lg btn-group" data-toggle="modal" data-target="#myModal3">Add Offense</button>

        <div class="modal fade" id="myModal1" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-md-8">
                                <form>

                                    @if($user)

                                        <div class="form-group">
                                            <label for="nic">NIC No </label>
                                            <input type="text" class="form-control" id=""  placeholder="" value="{{$user->id}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Full Name</label>
                                            <input type="text" class="form-control" id=""  value="{{$user->name}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="oname">Other Names</label>
                                            <input type="text" class="form-control" id=""  value="{{$user->otherName}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="gender">Gender</label>
                                            <div class="form-control">
                                                <div class="form-check-inline">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input" name="gender" value="male" @if($user->gender=='male')
                                                        checked
                                                                @endif>Male
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input" name="gender" value="female" @if($user->gender=='female')
                                                        checked
                                                                @endif>Female
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="birthday">Birthday</label>
                                            <input type="date" class="form-control" value="{{$user->bDay}}" >
                                        </div>
                                        <div class="form-group">
                                            <label for="address">Address</label>
                                            <input type="text" class="form-control" value="{{$user->address}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="phoneno">Phone No</label>
                                            <input type="text" class="form-control" value="{{$user->phoneNo}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$user->email}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="job">Job</label>
                                            <input type="text" class="form-control" value="{{$user->job}}">
                                        </div>

                                        <button type="submit" class="btn btn-outline-success my-2 my-sm-0">Submit</button>

                                    @endif
                                </form>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="nic">Image </label>
                                    <img src="images/user/{{$user->profileImage}}" alt="" width="100%" height="100%" class="img-thumbnail">
                                </div>
                            </div>
                        </div>

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
                        <h4 class="modal-title">ADD OFFENSE</h4>

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