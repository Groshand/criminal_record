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
        <div class="canvas-content">

            @yield('body')



            @if(View::hasSection('police') || View::hasSection('cout') || View::hasSection('user') || View::hasSection('nic') || View::hasSection('admin'))
                <!--footer starts from here-->
                    <footer class="footer">
                        <div class="container bottom_border">
                            <div class="row">
                                <div class=" col-sm-4 col-md col-sm-4  col-12 col">
                                    <h5 class="headin5_amrc col_white_amrc pt2">Find us</h5>
                                    <!--headin5_amrc-->
                                    <p class="mb10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                    <p><i class="fa fa-location-arrow"></i> 9878/25 sec 9 rohini 35 </p>
                                    <p><i class="fa fa-phone"></i>  +91-9999878398  </p>
                                    <p><i class="fa fa fa-envelope"></i> info@example.com  </p>


                                </div>


                                <div class=" col-sm-4 col-md  col-6 col">
                                    <h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
                                    <!--headin5_amrc-->
                                    <ul class="footer_ul_amrc">
                                        <li><a href="http://kalarikendramdelhi.com">Image Rectoucing</a></li>
                                        <li><a href="http://kalarikendramdelhi.com">Clipping Path</a></li>
                                        <li><a href="http://kalarikendramdelhi.com">Hollow Man Montage</a></li>
                                        <li><a href="http://kalarikendramdelhi.com">Ebay & Amazon</a></li>
                                        <li><a href="http://kalarikendramdelhi.com">Hair Masking/Clipping</a></li>
                                        <li><a href="http://kalarikendramdelhi.com">Image Cropping</a></li>
                                    </ul>
                                    <!--footer_ul_amrc ends here-->
                                </div>


                                <div class=" col-sm-4 col-md  col-6 col">
                                    <h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
                                    <!--headin5_amrc-->
                                    <ul class="footer_ul_amrc">
                                        <li><a href="http://kalarikendramdelhi.com">Remove Background</a></li>
                                        <li><a href="http://kalarikendramdelhi.com">Shadows & Mirror Reflection</a></li>
                                        <li><a href="http://kalarikendramdelhi.com">Logo Design</a></li>
                                        <li><a href="http://kalarikendramdelhi.com">Vectorization</a></li>
                                        <li><a href="http://kalarikendramdelhi.com">Hair Masking/Clipping</a></li>
                                        <li><a href="http://kalarikendramdelhi.com">Image Cropping</a></li>
                                    </ul>
                                    <!--footer_ul_amrc ends here-->
                                </div>


                                <div class=" col-sm-4 col-md  col-12 col">
                                    <h5 class="headin5_amrc col_white_amrc pt2">Follow us</h5>
                                    <!--headin5_amrc ends here-->

                                    <ul class="footer_ul2_amrc">
                                        <li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a><p>Lorem Ipsum is simply dummy text of the printing...<a href="#">https://www.lipsum.com/</a></p></li>
                                        <li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a><p>Lorem Ipsum is simply dummy text of the printing...<a href="#">https://www.lipsum.com/</a></p></li>
                                        <li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a><p>Lorem Ipsum is simply dummy text of the printing...<a href="#">https://www.lipsum.com/</a></p></li>
                                    </ul>
                                    <!--footer_ul2_amrc ends here-->
                                </div>
                            </div>
                        </div>


                        <div class="container">
                            <h4 class="foote_bottom_ul_amrc">FIND THE CRIMINAL</h4>

                            <!--foote_bottom_ul_amrc ends here-->
                            <p class="text-center">Copyright @2018 | Designed With by <a href="#">grdarshana@std.appsc.sab.ac.lk</a></p>


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