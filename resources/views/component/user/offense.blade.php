@extends('layout.user')

@section('user')
    <div class="container border border-light px-5 py-3 rounded mt-md-3 " >
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
                    <div class="card text-body">
                        <div class="card-body rounded border border-light">{{$offense->pDiscription}}</div>
                    </div>
                </div>
                <div class="form-group ">
                    @if($offense->cDiscription)
                        <label >Court Officer Discription</label>
                        <div class="card text-body">
                            <div class="card-body rounded border border-light">{{$offense->cDiscription}}</div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection