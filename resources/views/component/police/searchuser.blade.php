@extends('layout.police')

@section('police')
    @if(session()->has('message'))
        <div>
            {{session()->get('message')}}
        </div>
    @endif
    <form method="post" action="{{route('searchuserfrompolice')}}">
        {{csrf_field()}}
        <div class="form-group">
            <label >NIC</label>
            <input type="text" class="form-control" name="nic" placeholder="Enter NIC">
        </div>
        <button type="submit" class="btn btn-primary col-md-2 mx-auto">Search</button>
    </form>

    <a href="#" title="Header" data-toggle="popover" data-content="Some content" >Click Me</a><br>
    <a href="#" title="Header" data-toggle="popover" data-trigger="hover" data-content="Some content">Hover over me</a>

    <script>
        $(document).ready(function(){
            $('[data-toggle="popover"]').popover();
        });
    </script>

@endsection