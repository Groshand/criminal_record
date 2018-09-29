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