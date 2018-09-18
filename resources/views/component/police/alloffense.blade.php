@extends('layout.police')
@section('police')
    <div class="panel-body">
        @if(count($offense)>0)
            @foreach($offense as $ofns)
                        <div class=" @if($ofns->accept==2) bg-warning @elseif($ofns->accept==1) bg-danger  @endif">
                            <h6>{{$ofns->id}}</h6>
                            <label >{{$ofns->pDiscription}}</label>
                        </div>
            @endforeach
        @else
            <div class="bg-success">
                <h6>Your Have No Offenses</h6>
            </div>
        @endif
    </div>
@endsection