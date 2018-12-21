<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/canves.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/footer.css">

    <style>
        @yield('style')


    </style>


    <title> @yield('title') </title>

</head>
<body>
<div class="container-fluid">
    <section class="canvas-wrap">
        <div class="canvas-content" >

            @yield('body')



            @if(View::hasSection('police') || View::hasSection('cout') || View::hasSection('user') || View::hasSection('nic') || View::hasSection('admin'))
                <!--footer starts from here-->
                    <footer class="footer">
                        <div class="container bottom_border">
                            <div class="row">


                                <div class=" col-sm-4 col-md  col-12 col">
                                    <h5 class="headin5_amrc col_white_amrc pt2">NIC Department</h5>
                                    <!--headin5_amrc-->
                                    <ul class="footer_ul_amrc">
                                        <li><a target="http://www.drp.gov.lk/Templates/home.page.english.Department-for-Registration-of-Persons.html" href="http://www.drp.gov.lk/Templates/home.page.english.Department-for-Registration-of-Persons.html">Official Site</a></li>
                                        <li><a href="http://www.drp.gov.lk/Templates/Contact.us.english.Department-for-Registration-of-Persons.html" target="http://www.drp.gov.lk/Templates/Contact.us.english.Department-for-Registration-of-Persons.html">Contact</a></li>

                                    </ul>
                                    <!--footer_ul_amrc ends here-->
                                </div>
                                <div class=" col-sm-4 col-md  col-6 col">
                                    <h5 class="headin5_amrc col_white_amrc pt2">Police Department</h5>
                                    <!--headin5_amrc-->
                                    <ul class="footer_ul_amrc">
                                        <li><a href="https://www.police.lk/" target="https://www.police.lk/">Official Site</a></li>
                                        <li><a href="https://www.police.lk/index.php/tourist-police/1678-police-stations-telephone-directory" target="https://www.police.lk/index.php/tourist-police/1678-police-stations-telephone-directory">Contact No</a></li>
                                    </ul>
                                    <!--footer_ul_amrc ends here-->
                                </div>


                                <div class=" col-sm-4 col-md  col-16 col">
                                    <h5 class="headin5_amrc col_white_amrc pt2">News</h5>
                                    <!--headin5_amrc-->
                                    <ul class="footer_ul_amrc">
                                        <li><a  href="https://www.newsfirst.lk/latest-news/" target="https://www.newsfirst.lk/latest-news/">Lates News</a></li>
                                        <li><a  href="https://www.w3newspapers.com/srilanka/" target="https://www.w3newspapers.com/srilanka/">News Papers</a></li>
                                        <li><a href="https://archives.dailynews.lk/2001/pix/gov_gazette.html" target="https://archives.dailynews.lk/2001/pix/gov_gazette.html">Gazette</a></li>
                                    </ul>
                                    <!--footer_ul_amrc ends here-->
                                </div>
                                <div class=" col-sm-4 col-md  col-12 col">
                                    <h5 class="headin5_amrc col_white_amrc pt2">About Find The Criminal</h5>
                                    <!--headin5_amrc-->
                                    <ul class="footer_ul_amrc">
                                        This System maintain individual peopls Criminal Records
                                    </ul>
                                    <!--footer_ul_amrc ends here-->
                                </div>



                            </div>
                        </div>


                        <div class="container">
                            <h4 class="foote_bottom_ul_amrc">FIND THE CRIMINAL</h4>

                            <!--foote_bottom_ul_amrc ends here-->
                            <p class="text-center">Copyright @2018 | Designed by <a href="#">find.criminal.sl@gmail.com</a></p>


                            <!--social_footer_ul ends here-->
                        </div>

                    </footer>
            @endif




        </div>
            <div id="canvas" class="gradient">


            </div>

    </section>
</div>
    <!-- Main library -->
    <script src="js/three.min.js"></script>

    <!-- Helpers -->
    <script src="js/projector.js"></script>
    <script src="js/canvas-renderer.js"></script>

    <!-- Visualitzation adjustments -->
    <script src="js/3d-lines-animation.js"></script>

    <!-- Animated background color -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="js/color.js"></script>

</body>
</html>