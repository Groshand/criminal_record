@extends('layout.cout')

@section('cout')
    <div class=" container ">
        @if(session()->has('message'))
            <div class="alert-danger alert">
                {{session()->get('message')}}
            </div>
        @endif

        <div class="row ">
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
                                <img src="images/cover/4.jpg" >
                            </div>
                            <div class="carousel-item">
                                <img src="images/cover/5.jpg" >
                            </div>
                            <div class="carousel-item">
                                <img src="images/cover/6.jpg" >
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
                        <span class="post" style="color: white">Towards Speedy Development by Expeditious and Proper Administration of Justice</span>
                        <div class="d-sm-none d-md-block ">
                            <a href="#" class="a1 d-none d-sm-block">
                                <span data-text="C">C</span>
                                <span data-text="O">O</span>
                                <span data-text="U">U</span>
                                <span data-text="R">R</span>
                                <span data-text="T">T</span>
                            </a>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        <div class=" container  border  border-light py-5 rounded ">
            <center>
                <img class="img-fluid" src="images/cover/cout_logo.png" alt="Chania" style="max-height: 230px;max-width: 170px;">
                <h4>Our Mission </h4>
                <p>Accelerating the Development of the Nation by Ensuring Prompt and Equal Protection of the Law to Every Citizen through providing Infrastructure Services required for Administration of Justice, safeguarding the Independence of Judges and maintaining proper Human Resources Management in the support staffs in Courts.</p>
                <h4>Judial Hierarchy</h4>
            </center>
            <h5>The Supreme Court</h5>
            <p>The Supreme  Court of the Republic of Sri Lanka skill be the highest and final superior Court of record.
                The Supreme Court shall consist of the Chief Justice and of not less than six and not more than ten other judges.
            </p>
            <h6>Powers of the Supreme Court</h6>
            <ul>
                <li>Appellate Jurisdiction</li>
                <li>Constitutional Jurisdiction</li>
                <li>Protection of fundamental rights.</li>
                <li>Jurisdiction in respect of the breaches of Parliamentary privileges.</li>
            </ul>
            <br>
            <h5>The Court of Appeal</h5>
            <p>The Court of Appeal consists of the President of the Court of Appeal and not less than six and not more than eleven other Judges.

                Next to the Supreme Court, the Court of Appeal shall be the highest and final superior court of record.

            </p>
            <h6>Powers of the Court of Appeal</h6>
            <ul>
                <li>Appellate Jurisdiction</li>
                <li>Jurisdiction for correction</li>
                <li>Cognizance of matters and things of Courts of First Instance May call for case records and examine them</li>
                <li>Powers to impose punishment for contempt of Court</li>
                <li>Power to issue writs</li>
            </ul>
            <br>
            <h5>The High Court</h5>
            <p>The High Court is the only Court which exercise the jurisdiction of the Court of First Instance and the appellate jurisdiction.

                It exercises the civil jurisdiction as well as the criminal jurisdiction.</p>
            <ul>
                <li>The High Court of Civil Appeal</li>
                <li>High Court And The Provincial High Court</li>
                <li>Commercial High Court</li>
            </ul>
            <br>
            <h5>The District Court</h5>
            <p>Cases over which the District Court has jurisdiction to take cognizance of, within its jurisdiction, all civil income and insolvency testamentary cases marital disputes, family jurisdiction over divorce and nullity of marriage cases, guardianship of idiots and persons of unsound  mind and guardianship of their property, testamentary cases of person deceased without leaving a last will, care of minors and their property.

            </p><br>
            <h5>The Magistrate Court</h5>
            <ul>
                <li>Jurisdiction over the criminal cases filed under the Penal Code and other laws within its jurisdiction.</li>
                <li>First mortem examinations.</li>
                <li>Post mortem examinations.</li>
                <li>Issue of Warrants of Judicial orders to arrest and produce suspected persons.</li>
                <li>Issue of search warrants.</li>
                <li>Ordering persons to enter into bonds of good conduct and preventive jurisdiction on public nuisance.</li>

            </ul>
            <br>
            <h5>The Primary Court</h5>
            <ul>
                <li>The Primary Court exercise civil and criminal jurisdiction within its area or jurisdiction.</li>
                <li> The value of claim for compensation should not exceed Rs. 1500/-.</li>
                <li>Cases under Section 66 of the Primary Court Procedure Act.</li>
                <li>Hearing of land disputes involving threat to or breach of peace.</li>
            </ul>
        </div>
    </div>

@endsection



