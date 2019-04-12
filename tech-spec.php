<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="CSS/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">




    <?php
    $servername = "localhost";
    $username = "schupp";
    $password = "W53ZoOVSXmQk";
    $dbname = "apple";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    ?>

  </head>

  <body>
    <header>
      <!--Nav-->
<nav class="navbar navbar-expand-sm navbar-dark bg-dark
justify-content-center py-0">
<div class="container">
<button class="navbar-toggler" type="button" data-toggle="collapse"
data-target="#navbar10">
<span class="navbar-toggler-icon"></span>
</button>
<div class="navbar-collapse collapse" id="navbar10">
<ul class="navbar-nav nav-fill w-100">
<li class="nav-item">
<a class="nav-link" href="#" style="color:white;font-family: Arial
Narrow;"><i class="fab fa-apple fa-1x" style="font-size:21px;"></i></a>
</li>
<li class="nav-item">
<a class="nav-link" href="#" style="color:white;font-family: Arial
Narrow;">Mac</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#" style="color:white;font-family: Arial
Narrow;">iPad</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#" style="color:white;font-family: Arial
Narrow;">iPhone</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#" style="color:white;font-family: Arial
Narrow;">Watch</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#" style="color:white;font-family: Arial
Narrow;">TV</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#" style="color:white;font-family: Arial
Narrow;">Music</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#" style="color:white;font-family: Arial
Narrow;">Support</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#" style="color:white;font-family: Arial
Narrow;"><i class="fas fa-search fa-1x"></i></a>
</li>
<li class="nav-item">
<a class="nav-link" href="#" style="color:white;font-family: Arial
Narrow;"><i class="fas fa-shopping-bag"></i></a>
</li>
</ul>
</div>
</div>
</nav>
<!--/Nav-->
    </header>

    <section class="section1">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h4 class="section1-header">Macbook Pro</h4>
          </div>
          <div class="col-lg-6 section1-list-container">
            <ul class="section1-list">
              <li><a>Overview</a></li>
              <li><a>macOS</a></li>
              <li><a href='tech-spec.php'>Tech Spec</a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section class="section2">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 section2-col">
            <hr>
            <h2 class="section2-header">Add a trade-in</h2>
            <p class="section2-p">Get a refund of up to $1100 when you trade in an eligible computer, or recycle it for free.*</p>
            <a href="#">Get Started</a>
            <hr>
          </div>
        </div>
      </div>
    </section>

    <section class="section3">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h1 class="section3-header"><span>Choose your new MacBookPro<br>and select a finish.</span></h1>
            <div class="mac-buttons">
              <button type="button" name="button" class="macbookButton mac-13-inch-button">13-inch</button>
              <button type="button" name="button" class="macbookButton mac-15-inch-button">15-inch</button>
            </div>
          </div>

        </div>
      </div>
    </section>
