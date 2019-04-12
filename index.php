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

    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
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

    <section class="mac13-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="mac13-header">
              <h2>13-inch MacBook Pro</h2>
              <p>We’re here to help. <a href="">Contact us</a>.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="container text-left">
        <div class="row">
          <div class="col-sm-4">
            <div class="13-no-bar-spacegrey 13-no-bar-spacegrey1" style="display:''; text-align:center; padding:40px 0;">
              <img class="img-fluid"src="img/13-no-bar.png" alt="macbook 13 space gray">
            </div>
            <div class="13-no-bar-silver 13-no-bar-silver1" style="display:none; text-align:center; padding:40px 0;">
              <img class="img-fluid" src="img/13-no-bar-silver.png" alt="">
            </div>
            <div class="color-buttons">
              <ul>
                <li class="spacegrey-button spacegrey-button1"><a><img src="img/spacegrey.jpg" alt=""></a></li>
                <li class="silver-button silver-button1"><a><img src="img/silver.jpg" alt=""></a></li>
              </ul>
            </div>

              <?
                $sql = "SELECT * FROM macbook WHERE id=1";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                      ?>
                        <h3 class="productHeader" style="padding-bottom:15px;"><?=$row['Title']?></h3>
                        <p><?=$row['Processor']?></p>
                          <p><?=$row['Turbo']?></p>
                        <p><?=$row['GPU']?></p>
                        <p><?=$row['RAM']?></p>
                        <p><?=$row['SSD']?></p>
                        <p><?=$row['DisplayType']?></p>
                        <? if($row['TouchBar'] !=='none'){
                          ?><p><?=$row['TouchBar']?></p><?
                        } ?>
                        <p><?=$row['Ports']?></p>
                        <p class="productPrice"><?=$row['Price']?></p>
                      <?
                          }
                      } else {
                          echo "0 results";
                      }
                      // mysqli_close($conn);// CLOSE CONTECTTEELKJ:GHIO:L
                      ?>
              <img class="img-fluid" src="img/finance.png" alt="">

          </div>
          <div class="col-lg-4">
            <div class="13-no-bar-spacegrey 13-no-bar-spacegrey1" style="display:''; text-align:center; padding:40px 0;">
              <img class="img-fluid" src="img/13-no-bar.png" alt="macbook 13 space gray">
            </div>
            <div class="13-no-bar-silver 13-no-bar-silver2" style="display:none; text-align:center; padding:40px 0;">
              <img class="img-fluid" src="img/13-no-bar-silver.png" alt="">
            </div>
            <div class="color-buttons">
              <ul>
                <li class="spacegrey-button spacegrey-button2"><a><img src="img/spacegrey.jpg" alt=""></a></li>
                <li class="silver-button silver-button2"><a><img src="img/silver.jpg" alt=""></a></li>
              </ul>
            </div>

              <?
                $sql = "SELECT * FROM macbook WHERE id=2";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                      ?>
                        <h3 class="productHeader" style="padding-bottom:15px;"><?=$row['Title']?></h3>
                        <p><?=$row['Processor']?></p>
                          <p><?=$row['Turbo']?></p>
                        <p><?=$row['GPU']?></p>
                        <p><?=$row['RAM']?></p>
                        <p><?=$row['SSD']?></p>
                        <p><?=$row['DisplayType']?></p>
                        <? if($row['TouchBar'] !=='none'){
                          ?><p><?=$row['TouchBar']?></p><?
                        } ?>
                        <p><?=$row['Ports']?></p>
                        <p class="productPrice"><?=$row['Price']?></p>
                      <?
                          }
                      } else {
                          echo "0 results";
                      }
                      // mysqli_close($conn);// CLOSE CONTECTTEELKJ:GHIO:L
                      ?>
              <img class="img-fluid" src="img/finance.png" alt="">

          </div>
          <div class="col-lg-4">
            <div class="13-no-bar-spacegrey 13-no-bar-spacegrey1" style="display:''; text-align:center; padding:40px 0;">
              <img class="img-fluid" src="img/13-with-bar.png" alt="macbook 13 space gray">
            </div>
            <div class="13-with-bar-silver 13-wit-bar-silver3" style="display:none; text-align:center; padding:40px 0;">
              <img class="img-fluid" src="img/13-with-bar-silver.png" alt="">
            </div>
            <div class="color-buttons">
              <ul>
                <li class="spacegrey-button spacegrey-button3"><a><img src="img/spacegrey.jpg" alt=""></a></li>
                <li class="silver-button silver-button3"><a><img src="img/silver.jpg" alt=""></a></li>
              </ul>
            </div>

              <?
                $sql = "SELECT * FROM macbook WHERE id=3";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                      ?>
                        <h3 class="productHeader" style="padding-bottom:15px;"><?=$row['Title']?></h3>
                        <p><?=$row['Processor']?></p>
                          <p><?=$row['Turbo']?></p>
                        <p><?=$row['GPU']?></p>
                        <p><?=$row['RAM']?></p>
                        <p><?=$row['SSD']?></p>
                        <p><?=$row['DisplayType']?></p>
                        <? if($row['TouchBar'] !=='none'){
                          ?><p><?=$row['TouchBar']?></p><?
                        } ?>
                        <p><?=$row['Ports']?></p>
                        <p class="productPrice"><?=$row['Price']?></p>
                      <?
                          }
                      } else {
                          echo "0 results";
                      }
                      // mysqli_close($conn);// CLOSE CONTECTTEELKJ:GHIO:L
                      ?>
              <img class="img-fluid" src="img/finance.png" alt="">

          </div>
        </div>
      <div class="container text-left">
        <div class="row">
          <div class="col-lg-4">
            <div class="13-no-bar-spacegrey 13-no-bar-spacegrey1" style="display:''; text-align:center; padding:40px 0;">
              <img class="img-fluid" src="img/13-with-bar.png" alt="macbook 13 space gray">
            </div>
            <div class="13-with-bar-silver 13-wit-bar-silver3" style="display:none; text-align:center; padding:40px 0;">
              <img class="img-fluid" src="img/13-with-bar-silver.png" alt="">
            </div>
            <div class="color-buttons">
              <ul>
                <li class="spacegrey-button spacegrey-button3"><a><img src="img/spacegrey.jpg" alt=""></a></li>
                <li class="silver-button silver-button3"><a><img src="img/silver.jpg" alt=""></a></li>
              </ul>
            </div>

              <?
                $sql = "SELECT * FROM macbook WHERE id=4";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                      ?>
                        <h3 class="productHeader" style="padding-bottom:15px;"><?=$row['Title']?></h3>
                        <p><?=$row['Processor']?></p>
                          <p><?=$row['Turbo']?></p>
                        <p><?=$row['GPU']?></p>
                        <p><?=$row['RAM']?></p>
                        <p><?=$row['SSD']?></p>
                        <p><?=$row['DisplayType']?></p>
                        <? if($row['TouchBar'] !=='none'){
                          ?><p><?=$row['TouchBar']?></p><?
                        } ?>
                        <p><?=$row['Ports']?></p>
                        <p class="productPrice"><?=$row['Price']?></p>
                      <?
                          }
                      } else {
                          echo "0 results";
                      }
                      // mysqli_close($conn);// CLOSE CONTECTTEELKJ:GHIO:L
                      ?>
              <img class="img-fluid" src="img/finance.png" alt="">

          </div>
        </div>
      </div>

      </div>


    </section>

    <section class="mac15-section" style="display:none;">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="mac13-header">
              <h2>15-inch MacBook Pro</h2>
              <p>We’re here to help. <a href="">Contact us</a>.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="container text-left" >
        <div class="row">
          <div class="col-lg-6">
            <div class="13-no-bar-spacegrey 13-no-bar-spacegrey5" style="display:''; text-align:center; padding:40px 0;">
              <img class="img-fluid" src=  "img/15-with-bar.png" alt="macbook 15 space gray">
            </div>
            <div class="15-silver 15-silver5" style="display:none; text-align:center; padding:40px 0;">
              <img class="img-fluid" src="img/15-silver.png" alt="">
            </div>
            <div class="color-buttons">
              <ul>
                <li class="spacegrey-button spacegrey-button5"><a><img src="img/spacegrey.jpg" alt=""></a></li>
                <li class="silver-button silver-button5"><a><img src="img/silver.jpg" alt=""></a></li>
              </ul>
            </div>

              <?
                $sql = "SELECT * FROM macbook WHERE id=5";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                      ?>
                        <h3 class="productHeader" style="padding-bottom:15px;"><?=$row['Title']?></h3>
                        <p><?=$row['Processor']?></p>
                          <p><?=$row['Turbo']?></p>
                        <p><?=$row['GPU']?></p>
                        <p><?=$row['RAM']?></p>
                        <p><?=$row['SSD']?></p>
                        <p><?=$row['DisplayType']?></p>
                        <? if($row['TouchBar'] !=='none'){
                          ?><p><?=$row['TouchBar']?></p><?
                        } ?>
                        <p><?=$row['Ports']?></p>
                        <p class="productPrice"><?=$row['Price']?></p>
                      <?
                          }
                      } else {
                          echo "0 results";
                      }
                      // mysqli_close($conn);// CLOSE CONTECTTEELKJ:GHIO:L
                      ?>
              <img class="img-fluid" src="img/finance.png" alt="">

          </div>
          <div class="col-lg-6">
            <div class="13-no-bar-spacegrey 13-no-bar-spacegrey1" style="display:''; text-align:center; padding:40px 0;">
              <img class="img-fluid" src="img/15-with-bar.png" alt="macbook 13 space gray">
            </div>
            <div class="15-silver 15-silver6" style="display:none; text-align:center; padding:40px 0;">
              <img class="img-fluid" src="img/13-no-bar-silver.png" alt="">
            </div>
            <div class="color-buttons">
              <ul>
                <li class="spacegrey-button spacegrey-button6"><a><img src="img/spacegrey.jpg" alt=""></a></li>
                <li class="silver-button silver-button6"><a><img src="img/silver.jpg" alt=""></a></li>
              </ul>
            </div>

              <?
                $sql = "SELECT * FROM macbook WHERE id=6";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                      ?>
                        <h3 class="productHeader" style="padding-bottom:15px;"><?=$row['Title']?></h3>
                        <p><?=$row['Processor']?></p>
                          <p><?=$row['Turbo']?></p>
                        <p><?=$row['GPU']?></p>
                        <p><?=$row['RAM']?></p>
                        <p><?=$row['SSD']?></p>
                        <p><?=$row['DisplayType']?></p>
                        <? if($row['TouchBar'] !=='none'){
                          ?><p><?=$row['TouchBar']?></p><?
                        } ?>
                        <p><?=$row['Ports']?></p>
                        <p class="productPrice"><?=$row['Price']?></p>
                      <?
                          }
                      } else {
                          echo "0 results";
                      }
                      // mysqli_close($conn);// CLOSE CONTECTTEELKJ:GHIO:L
                      ?>
              <img class="img-fluid" src="img/finance.png" alt="">

          </div>
        </div>
      </div>
    </section>

    <section class="section4">
      <div class="container-fluid compare-mac-models">
        <div class="row">
          <div class="col-lg-12">
            <h1 class="section4-header"><span>Compare Mac models.</span></h1>
            <p><a href="#">Find the best Mac for you ></a></p>
            <div class="compare-picture">
              <img class="img-fluid" src="img/compare.png" alt="">
          </div>
        </div>
        </div>
      </div>
    </section>

    <section class="section5">
      <div class="container compare-mac-models">
        <div class="row">
          <div class="col-lg-12">
            <div class="compare-picture">
              <img class="img-fluid" src="img/applecare.png" alt="">
          </div>
            <h1 class="section5-header"><span>AppleCare+ for Mac</span></h1>
            <p>Every Mac comes with a <a>one-year limited warranty</a> and up to 90 days of <a>complimentary technical support</a>. AppleCare+ for Mac extends your coverage to three years from your AppleCare+ purchase date and adds up to two incidents of accidental damage coverage, each subject to a service fee of $99 for screen damage or external enclosure damage, or $299 for other damage, plus applicable tax. In addition, you'll get 24/7 priority access to Apple experts via chat or phone.</p>
            <p><a href="#">Find the best Mac for you ></a></p>

        </div>
        </div>
      </div>
    </section>

    <section class="section6">
      <div class="container-fluid school">
              <img class="img-fluid" src="img/school.png" alt="" >
      </div>
    </section>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="footerMessage">
              <p>1GB = 1 billion bytes and 1TB = 1 trillion bytes; actual formatted capacity less.
                * Trade-in values vary based on condition, year, and configuration of your trade-in device, are subject to change, and may require Mac purchase. You must be 18 years or older. In-store trade-in requires presentation of a valid, government-issued photo ID (local law may require saving this information). Additional terms from Apple or Apple’s trade-in partners may apply.

                †† We approximate your location from your Internet IP address by matching it to a geographic region or from the location entered during your previous visit to Apple.</p>
              <hr>
            </div>
            <img class="img-fluid" src="img/footer.PNG" alt="" >
          </div>
        </div>
      </div>
    </footer>

    <script
      src="https://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous">

    </script>
    <script src="JS/script.js"></script>

  </body>
</html>
