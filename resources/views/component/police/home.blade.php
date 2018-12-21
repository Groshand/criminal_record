@extends('layout.police')

@section('police')
    <div class=" container ">
        @if(session()->has('message'))
            <div class="alert-danger alert">
                {{session()->get('message')}}
            </div>
        @endif

            <div class="row mt-2 h-50 ">
                <div class="col-md-12 ">
                    <div class="box14">

                        <div id="demo" class="carousel slide" data-ride="carousel">

                            <!-- Indicators -->
                            <ul class="carousel-indicators">
                                <li data-target="#demo" data-slide-to="0" class="active"></li>
                                <li data-target="#demo" data-slide-to="1"></li>
                                <li data-target="#demo" data-slide-to="2"></li>
                            </ul>

                            <!-- The slideshow -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="images/cover/1.jpg" >
                                </div>
                                <div class="carousel-item">
                                    <img src="images/cover/2.jpg" >
                                </div>
                                <div class="carousel-item">
                                    <img src="images/cover/3.jpg" >
                                </div>
                            </div>

                            <!-- Left and right controls -->
                            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </a>
                            <a class="carousel-control-next" href="#demo" data-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </a>
                        </div>
                        <div class="box-content">
                            <h3 class="title">Wellcome To Your Profile</h3>
                            <span class="post">Towards a Peaceful environment to live with confidence, without fear of Crime and Violence.</span>
                            <div class="d-sm-none d-md-block ">
                                <a href="#" class="a1 d-none d-sm-block">
                                    <span data-text="P">P</span>
                                    <span data-text="O">O</span>
                                    <span data-text="L">L</span>
                                    <span data-text="I">I</span>
                                    <span data-text="C">C</span>
                                    <span data-text="E">E</span>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        <div class=" container  border border-light py-2 mt-4 rounded ">
            <center>
                <img class="img-fluid" src="images/cover/Sri_Lanka_Police_logo.png" alt="Chania" style="max-height: 230px;max-width: 170px;">
                <h4>Our Mission </h4>
                <p>Sri Lanka Police is committed and confident to uphold and enforce the law of the land, to preserve the public order, prevent crime and Terrorism with prejudice to none – equity to all.</p>
                <h4>Definition of Police</h4>
                <p>The civil force of a national or local government, responsible for the prevention and detection of crime and the maintenance of public order</p>
                <h4>Each letter that makes the word “POLICE” comprises different interpretations.</h4>
                <h5>P - <i>Politeness</i></h5>
                <h5>O - <i>Obedience</i></h5>
                <h5>L - <i>Loyalty</i></h5>
                <h5>I - <i>Intelligence</i></h5>
                <h5>C - <i>Courtesy</i></h5>
                <h5>E - <i>Efficiency</i></h5>

            </center>

        </div>
    </div>

@endsection



