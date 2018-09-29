@extends('layout.user')

@section('user')
    <div class="container  bg-dark" >
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label >Offense Added Date </label>
                    <label class="form-control" >{{$offense->created_at}}</label>
                </div>
                <div class="form-group">
                    <label >Police Officer ID</label>
                    <label class="form-control" >{{$offense->updated_at}}</label>
                </div>
                <div class="form-group">
                    <label for="gender">Catogory of Offense</label>
                    @foreach($data as $data1)
                        @if($data1->id==$offense->pOffenseId)
                            <label class="form-control" >{{$data1->type}}</label>
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
                    @if($offense->cDiscription)
                        <p class="" >{{$offense->cDiscription}}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection