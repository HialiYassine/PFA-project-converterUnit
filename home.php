<?php
ob_start();

    session_start();
    if(!isset($_SESSION["login"]))
      header("location:index.php");
  

    if(count($_POST)>0){
      foreach ($_POST as $key=>$value){
          ${$key}=$value;
      }
  }


    if(isset($btn_temp)){
      $_SESSION["goTo"]="tempiratur";
      header("location:operation-index.php");}
    if(isset($btn_time)){
      $_SESSION["goTo"]="date";
      header("location:operation-index.php");}
    if(isset($btn_destance)){
      $_SESSION["goTo"]="destance";
      header("location:operation-index.php");}
    if(isset($btn_volume)){
      $_SESSION["goTo"]="volume";
      header("location:operation-index.php");}
    if(isset($btn_pression)){
      $_SESSION["goTo"]="pression";
      header("location:operation-index.php");}

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
    <!--__________________menu list______________________________-->
    

        <!------------------to show menu------------------------------------->
        <nav class="navbar bg-degrad" style="padding: 10px;" >
      <div class="container-fluid" >

      <!--dark-white-------------------------------------->
      <div style="margin: 5px;" >
          <input type="checkbox" class="checkbox" id="checkbox">
        <label for="checkbox" class="label">
          <i class='fas fa-sun'></i>
          <i class="fas fa-moon"></i>
          <div class='ball'></div>
        </label>
      </div>  

        


        <!------------------logo menu------------------------------------->
        <img src="images/logo3-3.png" alt=""  height="20" class="d-inline-block align-text-top " >
        
        <!-- hi nime and log out  -->
        <section class="row1 justify-content-start" >
            <button type="button" class="btn btn-primary position-relative glow-on-hover" style="width: 160px;height: 30px;  font-size: 15px;">
              <?="Hi ".$_SESSION["nomPrenom"]?>
                <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle" >
                </span>
            </button>

            <a href="deconnexion.php"><button class="glow-on-hover" style=" width: 100px;height: 30px;  font-size: 15px;">Log out</button></a>
            <a href="changeinfo.php"><button class="glow-on-hover" style=" width: 110px;height: 30px;  font-size: 15px;">Change info</button></a>
        </section>
                  
      </div>
    </nav>
      
    


      </header>
      <main>
        
      <!--______________________________pass image________________________________________________________________________-->
      

      <div id="carouselExampleCaptions" class="carousel slide " data-bs-ride="carousel" style="margin: 20px;">
        

        <div class="carousel-inner rounded-3">
          <div class="carousel-item active">
            <img src="./images/1.png" class="d-block w-100" alt="...">
            
          </div>
          <div class="carousel-item">
            <img src="./images/2.png" class="d-block w-100" alt="...">
           
          </div>
          <div class="carousel-item">
            <img src="./images/3.png" class="d-block w-100" alt="...">
            
          </div>
          <div class="carousel-item">
            <img src="./images/4.png" class="d-block w-100" alt="...">
           
          </div>
          <div class="carousel-item">
            <img src="./images/5.png" class="d-block w-100" alt="...">
           
          </div>
        </div>

        <!--------------------button to pass image----------->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
<!--___________________to place page_____________________-->


      <!------------------text1----------------->
      <div id="Why do you need this website?" class="card text-center color4" style="margin: 20px;">
        <div class="card-header color3" style="margin: 20px;">
          <h5>Why do you need this website?</h5>
        </div>
        <div class="card-body ">
          <h5 class="card-title">Welcome to our site!</h5>
          <p class="card-text " style="text-align: justify;text-indent: 2rem;"> We are dedicated to providing a user-friendly and accurate service for converting various units of measurement, including units of capacity, length, and area. Our site is easy to navigate and offers quick and accurate conversions. Whether you're a student, a professional, or just someone who needs to make a conversion, our site has you covered. Thank you for choosing our site, and we hope you find it useful!</p>
        </div>
      </div>
      <!--___________________text2____________________-->
      <section  class="row justify-content-around" style="margin: 20px;">

        <div class="card mb-3 col-5 card mb-3 text-dark bg-degrad2 " style="width: 700px;padding: 20px;">
          <img src="./images/father-kids.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Are you a father or a child?</h5>
            <p class="card-text text-break" style="text-align: justify;text-indent: 2rem;">
              Our site is designed with young learners in mind, with a user-friendly interface and simple explanations for each unit of measurement. With our tools, children can easily convert between different units, such as meters to feet or liters to gallons, and gain a deeper understanding of measurement concepts. Our site is also a great resource for parents and teachers looking for educational materials to supplement their children's learning.<br> We believe that our site will be of great benefit to you and your child and we invite you to explore and try it out today.              </div>
          </div>
        

        <div class=" card mb-3 col-5 card mb-3 text-dark bg-degrad2 " style="width:700px;padding: 20px;">
          <img src="./images/teacher-student-1.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Are you a student, professor...?</h5>
            <p class="card-text" style="text-align: justify;text-indent: 2rem;">
              Our site offers a wide range of conversion options, from basic units such as length, weight and volume to more complex units such as pressure, temperature and energy. Our user-friendly interface and detailed explanations make it easy for users of all levels to quickly and easily convert between units. Whether you're a student needing help with a science project, a professor preparing a lesson plan, or an employee working on a technical project, our site has the tools you need to get the job done.<br> We believe that our site will be of great benefit to you and we invite you to explore and try it out today.
          </div>
        </div>
        
      </section>
      <!--______________________________________text3______________-->
      <div id="how you can use our site" class="card text-center text-white  marge-top-30px color4" style="margin: 20px;">
        <div class="card-header text-dark color3 " style="margin: 20px;">
          <h5>This is how you can use our site</h5>
        </div>
        <div class="card-body text-dark">
          <p class="card-text " style="text-align: justify;text-indent: 2rem;">

            Our website is easy to use and allows you to quickly and accurately convert units of measurement, including units of length, area, weight, volume and more. To use our website, simply select the unit of measurement you want to convert from and the unit of measurement you want to convert to. Then, enter the value you want to convert and press the convert button. The result will be displayed in a clear and easy-to-read format.
                              
            We have tested our converter with a variety of inputs to ensure that it provides accurate and consistent results. 
            
            Thank you for choosing our website, and we hope you find it useful!        
          </div>
      </div>
    </section>
    <!-------------------------------chose one cart____________-->
    <div id="Choose the unit" class="alert alert-success text-dark " role="alert" style="margin: 20px;color:#EEEEEE ;">
      <h4 class="alert-heading">Are you done!</h4>
      <p>
        I hope my explanation was clear and you have a better understanding of how our website specializes in converting units. Please let us know which unit you would like to convert and we'll be happy to assist you.</p>
      <hr>
      <p class="mb-0 ">
        Please choose one of the following options to begin converting your unit:      </p>
    </div>
    <!--______________________dive-chose________________________________________________________________________________-->
    <form method="post" action="">
      <section class= " row1 justify-content-around container overflow-hidden  marge-top-30px" > 
        
      
        <div class="card mb-3 col-5  border-primary border-1 filters " style="min-width: 310px;">
          <img src="./images/1.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Temperature Converter</h5>
            <p class="card-text">
            Effortlessly toggle between temperature scales—Celsius, Fahrenheit, and Kelvin—with our Temperature Converter.
             Your key to quick and accurate temperature translations.
            <p class="card-text"><small class="text-muted">  </small></p>
            <button class="glow-on-hover" style="width: 250px;height: 40px;font-size: 15px;" type="submit" name="btn_temp">Let's convert </button>

          </div>
        </div>

        <div class="card mb-3 col-5  border-primary border-1 filters " style="min-width: 310px;">
          <img src="./images/2.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Time Converter</h5>
            <p class="card-text">
            Master the art of time manipulation with our Time Converter. Instantly switch between time units, making seconds feel like hours and days shrink to minutes.</p>
            </p>
            <p class="card-text"><small class="text-muted"> </small></p>
            <button class="glow-on-hover" style="width: 250px;height: 40px;font-size: 15px;" type="submit" name="btn_time">Let's convert </button> 


          </div>
        </div>

        <div class="card mb-3 col-5  border-primary border-1 filters " style="min-width: 310px;">
          <img src="./images/3.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Distance Converter</h5>
            <p class="card-text">
            Navigate distances with ease using our Distance Converter. Effortlessly switch between units, transforming miles into meters and more.           </p>
            <p class="card-text"><small class="text-muted"> </small></p>
            <button class="glow-on-hover" style="width: 250px;height: 40px;font-size: 15px;" type="submit" name="btn_destance">Let's convert </button>


          </div>
        </div>

        <div class="card mb-3 col-5  border-primary border-1 filters " style="min-width: 310px;">
          <img src="./images/5.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Volume Converter</h5>
            <p class="card-text">
            Explore volumes like never before with our Volume Converter. Swiftly switch between units, from milliliters to liters, and navigate fluid conversions effortlessly.            </p>
            <p class="card-text"><small class="text-muted"></small></p>
            <button class="glow-on-hover" style="width: 250px;height: 40px;font-size: 15px;"  type="submit" name="btn_volume">Let's convert </button>


          </div>
        </div>

        <div class="card mb-3 col-5  border-primary border-1 filters " style="min-width: 310px;">
          <img src="./images/4.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Pressure Converter</h5>
            <p class="card-text">
            Elevate your pressure conversions with our Pressure Converter. Swiftly switch between pressure units, simplifying calculations and measurements.            </p>
            <p class="card-text"><small class="text-muted"></small></p>
            <button class="glow-on-hover" style="width: 250px;height: 40px;font-size: 15px;" type="submit" name="btn_pression">Let's convert </button> 


          </div>
        </div>

        <div class="card mb-3 col-5  border-primary border-1 filters " style="min-width: 310px;">
          <img src="./images/6.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">More...</h5>
            <p class="card-text">
            Stay tuned for more exciting updates coming soon. We're constantly working to enhance your experience and bring you new features. Keep an eye out for what's next!</p>
            <p class="card-text"><small class="text-muted ">.  </small></p>
            <button type="submit"  class="glow-on-hover" style="width: 250px;height: 40px;font-size: 15px;">More...</button> 

          </div>
        </div>
      </section>
      </form>

      


  </main>
      </div>
      <footer id="footer">
        <!--_______________________to up___________-->
        <div class="row1 justify-content-center  marge-top-30px ba-white" >
          <a href="" class="col-auto"><i class="fa-solid fa-angles-up fa-solid fa-bounce"></i></a>
        </div>
    <div class="border-top border-primary bg-dark">
      <div  class=" row1 justify-content-between align-items-center  " style="padding: 10px;font-size: 10px;"  >
        <div class="col-auto" style="margin-left: 5px;" >
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
  <!------------------------------------------>
 
</html>