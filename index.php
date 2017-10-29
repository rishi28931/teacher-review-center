<?php?>
<!doctype html>
<html lang="en">
  <head>
    <title>Hello, world!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel ="stylesheet" type="text/css" href="index.css">
  </head>
  <body>
    <div class="container-fluid">
        <?php
         include("navbar.php");
         ?>


        <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="biet_1.jpg" alt="main buildings">
    </div>

    <div class="item">
      <img src="biet_2.jpg" alt="pathway">
    </div>

    <div class="item">
      <img src="biet_3.jpg" alt="library">

  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <h3 class="text-primary text-center">MATHS3</h3>
          <h5 class="text-primary text-center">Mr.Ajay </h5>
        </div>
        <div class="col-md-2">
          <h3 class="text-primary text-center">ITIM</h3>
          <h5 class="text-primary text-center">Mr.Umakant</h5>
        </div>
        <div class="col-md-2">
          <h3 class="text-primary text-center">OOPS</h3>
          <h5 class="text-primary text-center">Ms.Shweta</h5>
        </div>
        <div class="col-md-2">
          <h3 class="text-primary text-center">DLD</h3>
          <h5 class="text-primary text-center">Mr.Roshan</h5>
        </div>
        <div class="col-md-2">
          <h3 class="text-primary text-center">SOCIOLOGY</h3>
          <h5 class="text-primary text-center">Mr.Unknown</h5>
        </div>
        <div class="col-md-2">
          <h3 class="text-primary text-center">DATA STRUCTURE</h3>
          <h5 class="text-primary text-center">Mr.Hament</h5>
        </div>

      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>
