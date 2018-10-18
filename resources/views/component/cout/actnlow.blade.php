@extends('layout.cout')

@section('cout')
    <style>
        @import url(http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css);
        body{margin-top:20px; background-color: white;}

        .fa-fw {width: 2em;}


        .list-group {

            margin:auto;
            float:left;
            padding-top:20px;
        }





    </style>
    <script>
        $(document).ready(function()
        {
            var navItems = $('.admin-menu div > button');
            var navListItems = $('.admin-menu div');
            var allWells = $('.admin-content');
            var allWellsExceptFirst = $('.admin-content:not(:first)');

            allWellsExceptFirst.hide();
            navItems.click(function(e)
            {
                e.preventDefault();
                navListItems.removeClass('active');
                $(this).closest('button').addClass('active');

                allWells.hide();
                var target = $(this).attr('data-target-id');
                $('#' + target).show();
            });
        });


        $(document).ready(function() {


            $('.list-group-item').click(function(e) {
                e.preventDefault();
                $('.list-group-item').removeClass('active');
                $(this).addClass('active');
            });
        });





    </script>

    <div class=" container ">
        <div class="row container admin-menu  ">
            <div class="col-md-4"> <button type="button" class="active list-group-item btn col-md-12  border border-light btn-md " data-target-id="1">English</button></div>
            <div class="col-md-4"><button type="button" class="active list-group-item btn col-md-12  border border-light btn-md " data-target-id="2">සිංහල</button></div>
            <div class="col-md-4"><button type="button" class="active list-group-item btn  col-md-12 border border-light btn-md " data-target-id="3" >தமிழ்</button></div>
        </div>

        <div class="row col-md-12">
            <div class="container  border border-light py-2 my-2 rounded d-flex justify-content-left">
                <div class="col-md-12 well admin-content" id="1">
                    <object data="pdf/english.pdf" type="application/pdf" class="col-md-12" height="1000px" ></object>
                </div>
                <div class="col-md-12 well admin-content" id="2">
                    <object data="pdf/sinhala.pdf" type="application/pdf" class="col-md-12" height="1000px"></object>
                </div>
                <div class="col-md-12 well admin-content" id="3">
                    <object data="pdf/tamil.pdf" type="application/pdf" class="col-md-12" height="1000px" ></object>
                </div>
            </div>
        </div>
    </div>




@endsection