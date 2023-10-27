<?php
ob_start();
    session_start();
    
    if(!isset($_SESSION["login"]))
      header("location:index.php");
ob_end_flush(); // Envoie la sortie mise en mémoire tampon
      
    ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <!--To ensure proper rendering and touch zooming for all devices-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative&display=swap" rel="stylesheet">
    <title>Hello, world!</title>
    
  </head >

<body >
  <div id="page-container">
    <div id="content-wrap">
<header id="hed">
      
    <!------------------to show menu------------------------------------->
    <nav class="navbar bg-degrad" style="padding: 10px;" >
      <div class="container-fluid" >
        
        
        <!--dark-white-------------------------------------->
        <div style="margin: 5px;" >
          <input type="checkbox" class="checkbox" id="checkbox">
        <label for="checkbox" class="label">
          <i class='fas fa-sun'></i>
          <i class="fas fa-moon"></i>
          <div class='ball'>
        </label>
      </div> 
                 
      </div>

      <!------------------logo menu------------------------------------->
      <img src="images/logo3-3.png" alt=""  height="20" class="d-inline-block align-text-top " >
        
    </nav>

</header>
     
      

<main>

    <!--______________________________tempiratur________________-->
    <div class="  zon-list-valu" style="margin-top: 20px;">
<!--     hi name logout -->    
                  <section class="row1 justify-content-start" >
                  <button type="button" class="btn btn-primary position-relative glow-on-hover" style="height: 35px;  font-size: 15px;">
                    <?="Hi ".$_SESSION["nomPrenom"]?>
                      <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle" >
                      </span>
                  </button>
                          <a href="deconnexion.php"><button class="glow-on-hover" style=" width: 150px;height: 35px; font-size: 15px;">Log out</button></a>
                          <p style="margin-top: 10px"><a href="home.php">Home</a><?= ($_SESSION["goTo"] == "tempiratur") ? " / Tempiratur converter" : ($_SESSION["goTo"] == "date" ? " / Time converter" : ($_SESSION["goTo"] == "destance" ? " / Distance converter" : ($_SESSION["goTo"] == "volume" ? " / Volume converter" : " / Pressure converter"))) ?> <p>
                  </section>

      <div class="row justify-content-evenly" >
        <div class="col-1 form-outline form-select-lg " style="width: 20rem;" >
          <label class="form-label " for="typeNumber">Number input from:</label>
          <input type="number" max="100000000000000000000" min="-100000000000000000000" step="1" value="0"  id="typeNumber" class="number-input"    />
        </div>
      </div>
      

      <div class="row justify-content-around justify-content-evenly" >
      <?php
      if($_SESSION["goTo"]=="date"){
      ?>
          <div class="col-6" style="width: 280px;">
          <div class="card-body" >
            <br><label class="form-label " for="typeNumber">Unit from:</label>
            <select class="form-select form-select-lg color3" aria-label=".form-select-lg example" id="from">
              <option value="fs"> Femtoseconde (fs)</option>
              <option value="ps"> La picoseconde (ps)</option>
              <option value="ns"> Nanoseconde (ns)</option>
              <option value="µs">Microseconde (µs)</option>
              <option  value="ms" >Milliseconde (ms)</option>
              <option  value="s" >Seconde (s)</option>
              <option value="min"> Minute (min)</option>
              <option value="h">  Hour (h)</option>
              <option value="d">Day (day)</option>
              <option value="w">Week (w)</option>
              <option value="m">Month(30 days) (m)</option>
              <option value="sem">semester (sem)</option>
              <option value="y"> Year (y)</option>
              <option value="dec"> Decade (dec)</option>
              <option value="cen"> Century (cen)</option>
              <option value="mil"> Millennium (mil)</option>
            </select>
        </div>
      </div>

      <div class="col-6" style="width: 280px;">
          <div class="card-body ">
            <br><label class="form-label " for="typeNumber">Unit to:</label>
            <select class="form-select form-select-lg color3" aria-label=".form-select-lg example"  id="to" >
              <option value="fs"> Femtoseconde (fs)</option>
              <option value="ps"> La picoseconde (ps)</option>
              <option value="ns"> Nanoseconde (ns)</option>
              <option value="µs">Microseconde (µs)</option>
              <option  value="ms" >Milliseconde (ms)</option>
              <option  value="s" >Seconde (s)</option>
              <option value="min"> Minute (min)</option>
              <option value="h">  Hour (h)</option>
              <option value="d">Day (day)</option>
              <option value="w">Week (w)</option>
              <option value="m">Month(30 days) (m)</option>
              <option value="sem">semester (sem)</option>
              <option value="y"> Year (y)</option>
              <option value="dec"> Decade (dec)</option>
              <option value="cen"> Century (cen)</option>
              <option value="mil"> Millennium (mil)</option>
            </select>
        </div>
      </div>
      <?php
      }if($_SESSION["goTo"]=="tempiratur"){
      ?>
        <div class="col-6" style="width: 280px;">
          <div class="card-body" >
            <br><label class="form-label " for="typeNumber">Unit from:</label>
            <select class="form-select form-select-lg color3" aria-label=".form-select-lg example" id="from">
                <option  value="f" >Fahrenheit (°F)</option>
                <option value="c">Celsius (°C)</option>
                <option value="k">Kelvin (K)</option>
            </select>
        </div>
      </div>

      <div class="col-6" style="width: 280px;">
          <div class="card-body ">
            <br><label class="form-label " for="typeNumber">Unit to:</label>
            <select class="form-select form-select-lg color3" aria-label=".form-select-lg example"  id="to" >
                <option  value="f" >Fahrenheit (°F)</option>
                <option value="c">Celsius (°C)</option>
                <option value="k">Kelvin (K)</option>
            </select>
        </div>
      </div>
      <?php
      }if($_SESSION["goTo"]=="destance"){
      ?>
                  <div class="col-6" style="width: 280px;">
                <div class="card-body">
                    <br><label class="form-label" for="typeNumber">Unit from:</label>
                    <select class="form-select form-select-lg color3" aria-label=".form-select-lg example" id="from">
                        <option value="m">Meters (m)</option>
                        <option value="km">Kilometers (km)</option>
                        <option value="mi">Miles (mi)</option>
                        <option value="cm">Centimeters (cm)</option>
                        <option value="mm">Millimeters (mm)</option>
                        <option value="in">Inches (in)</option>
                        <option value="ft">Feet (ft)</option>
                        <option value="yd">Yards (yd)</option>
                    </select>
                </div>
            </div>

            <div class="col-6" style="width: 280px;">
                <div class="card-body">
                    <br><label class="form-label" for="typeNumber">Unit to:</label>
                    <select class="form-select form-select-lg color3" aria-label=".form-select-lg example" id="to">
                        <option value="m">Meters (m)</option>
                        <option value="km">Kilometers (km)</option>
                        <option value="mi">Miles (mi)</option>
                        <option value="cm">Centimeters (cm)</option>
                        <option value="mm">Millimeters (mm)</option>
                        <option value="in">Inches (in)</option>
                        <option value="ft">Feet (ft)</option>
                        <option value="yd">Yards (yd)</option>
                    </select>
                </div>
            </div>
      <?php
      }if($_SESSION["goTo"]=="volume"){
      ?>
                <div class="col-6" style="width: 280px;">
            <div class="card-body">
                <br><label class="form-label" for="typeNumber">Unit from:</label>
                <select class="form-select form-select-lg color3" aria-label=".form-select-lg example" id="from">
                    <option value="m3">Cubic Meters (m³)</option>
                    <option value="L">Liters (L)</option>
                    <option value="gal">Gallons (gal)</option>
                    <option value="ft3">Cubic Feet (ft³)</option>
                    <option value="in3">Cubic Inches (in³)</option>
                </select>
            </div>
        </div>
        <div class="col-6" style="width: 280px;">
            <div class="card-body">
                <br><label class="form-label" for="typeNumber">Unit to:</label>
                <select class="form-select form-select-lg color3" aria-label=".form-select-lg example" id="to">
                    <option value="m3">Cubic Meters (m³)</option>
                    <option value="L">Liters (L)</option>
                    <option value="gal">Gallons (gal)</option>
                    <option value="ft3">Cubic Feet (ft³)</option>
                    <option value="in3">Cubic Inches (in³)</option>
                </select>
            </div>
        </div>
      <?php
      }if($_SESSION["goTo"]=="pression"){
      ?>
      
        <div class="col-6" style="width: 280px;">
          <div class="card-body">
              <br><label class="form-label" for="typeNumber">Unit from:</label>
              <select class="form-select form-select-lg color3" aria-label=".form-select-lg example" id="from">
                  <option value="Pa">Pascals (Pa)</option>
                  <option value="kPa">Kilopascals (kPa)</option>
                  <option value="bar">Bars (bar)</option>
                  <option value="psi">Pounds per Square Inch (psi)</option>
                  <option value="mmHg">Millimeters of Mercury (mmHg)</option>
              </select>
          </div>
      </div>
      <div class="col-6" style="width: 280px;">
          <div class="card-body">
              <br><label class="form-label" for="typeNumber">Unit to:</label>
              <select class="form-select form-select-lg color3" aria-label=".form-select-lg example" id="to">
                  <option value="Pa">Pascals (Pa)</option>
                  <option value="kPa">Kilopascals (kPa)</option>
                  <option value="bar">Bars (bar)</option>
                  <option value="psi">Pounds per Square Inch (psi)</option>
                  <option value="mmHg">Millimeters of Mercury (mmHg)</option>
              </select>
          </div>
      </div>
    <?php
      }
      ?>
      </div>
    </div>


<!--_____________________________result___________________-->
    <svg  xmlns="http://www.w3.org/2000/svg" style="display: none;" >
      <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
      </symbol>
    </svg>

    <div class="row1 justify-content-center">
      <div class="alert alert-success d-flex align-items-center row justify-content-center col-auto" role="alert" style="width: 90%;">
        <svg class="bi flex-shrink-0 me-2 mb-3" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
        <h6 id="resulte" class="text-center">The result</h6>
        <div >
        </div>
      </div>
      
    </div>

        <!--------------------botton convert---------------------->
        <div class="row1 justify-content-center  ">
          <button class="glow-on-hover col-auto"  style="width: 300px;"  onclick="convert('<?=$_SESSION['goTo']?>')" >Convert</button>
        </div>

    <!-------------------------------help____________-->
    <div class="alert alert-success" role="alert" style="margin: 20px;">
      <h4 class="alert-heading">This is how you can use our site!</h4>
      <p>
        Our website is easy to use and allows you to quickly and accurately convert units of measurement, including units of length, area, weight, volume and more. To use our website, simply select the unit of measurement you want to convert from and the unit of measurement you want to convert to. Then, enter the value you want to convert and press the convert button. The result will be displayed in a clear and easy-to-read format.
                              
        We have tested our converter with a variety of inputs to ensure that it provides accurate and consistent results. 
        
        Thank you for choosing our website, and we hope you find it useful!        
        <hr>
      </div>

</main>



<footer id="footer">
        <!--_______________________to up___________-->
        <div class="row1 justify-content-center  marge-top-30px ba-white" >
          <a href="" class="col-auto"><i class="fa-solid fa-angles-up fa-solid fa-bounce"></i></a>
        </div>
      <div class="border-top border-primary bg-dark">
      <div  class=" row1 justify-content-between align-items-center  " style="padding: 10px;font-size: 10px;"  >
        <div class="col-auto" style="margin-left: 1px;" >
          <p class="text-muted ">Copyright © 2023 HILALI YASSINE ®</p>
        </div>

        <div class="col-2"  >
          <div class="row1 justify-content-around text-muted"  >
            <a href="" style="margin-right: 2px;"><i class="fa-brands fa-github "></i></a>
            <a href="" style="margin-right: 2px;"><i class="fa-brands fa-youtube "></i></a>
            <a href="" style="margin-right: 2px;"><i class="fa-solid fa-envelope"></i></a>
            <a href="" style="margin-right: 2px;"><i class="fa-brands fa-telegram"></i></a>
          </div>
        </div>
      </div>

      <div  class="row1 justify-content-center"  >
        <a class="col-auto  fa-solid  fa-fade" href="" ><img  src="./images/logo3-3.png"  height="15" alt="" ></a>
          </div>
        </div>
</footer>
</div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/jav-scr.js"></script>
    <script src="https://kit.fontawesome.com/7d1cbdb6a5.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>

</html>