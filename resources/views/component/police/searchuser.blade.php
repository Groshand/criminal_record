@extends('layout.police')

@section('police')
    <div class=" container  border border-light py-5 rounded">
        @if(session()->has('message1'))
            <div class="alert-primary alert">
                {{session()->get('message1')}}
            </div>
        @endif
        <h4>Search Person By FingerPrint Or NIC</h4>
        @if(session()->has('message'))
            <div class="alert-danger alert">
                {{session()->get('message')}}
            </div>
        @endif

        <form method="post" action="{{route('searchuserfrompolice')}}">
            {{csrf_field()}}
            <div class="form-group">
                <label >Search By NIC</label>
                <input type="text" class="form-control" name="nic" placeholder="Enter NIC">
            </div>
            <button type="submit" class="btn btn-primary col-md-2 mx-auto">Search</button>
        </form>

        <form method="post" action="{{route('searchbyfingerprint')}}" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <label >Search By Finger Print</label>
                <input class="form-control" type="file" id="im" name="im" >
            </div>
            <button type="submit" class="btn btn-primary col-md-2 mx-auto">Search</button>
        </form>

    </div>

@endsection