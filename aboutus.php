<!DOCTYPE html>
<html>
  <head>
    <title>UST-CICS SWDB About</title>
    <meta charset = "UTF-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1">
    <script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>
    <script src="https://code.iconify.design/2/2.1.2/iconify.min.js"></script>
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!-- ICONS  -->
    <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel='stylesheet' href='hti tps://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css' />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <!-- FONTS  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Darker+Grotesque:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700;900&display=swap" rel="stylesheet">
    <link rel = "stylesheet" href = "https://fonts.googleapis.com/css2?family=Montserrat&display=swap">
    <link href='https://fonts.googleapis.com/css?family=Playfair Display' rel='stylesheet'>

    <link rel="icon" type="image/x-icon" href="/images/logo.ico">

    <link rel = "stylesheet" href = "style.css">
    <link rel = "stylesheet" href = "style-2.css">
  </head>
  <body>
    <?php
    session_start();
    if (!isset($_SESSION['user_name'])) {
    ?>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
      <a class="navbar-brand" href="index.php"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <a href="index.php"><img src="ustlogo.png" style="width:80px;height:75px;margin-left:20%;" class="logo_enable"></a>
        <a href="index.php"><img src="cicslogo.png" style="width:70px;height:60px;margin-left:20%;" class="logo_enable"></a>

        <div class="text" style="color:white; margin-right:15%; width:100%; line-height: 0.6;">
        <strong style="margin-left:10%; width:100%;">UST - College of Information and Computing Sciences</strong>
        <hr style="background:white; height:3px; margin-left:10%; width:90%;">
        <strong style="margin-left:10%; width:100%;">Student Welfare and Development Board</strong>
      </div>
     
        <ul class="navbar-nav ml-auto">
          <li class="d-lg-none">
              <a href="index.php" class="text d-lg-none">Home</a>
              <hr class="d-lg-none" />
            </li>
          <li class="nav-item d-none d-lg-block"><a class="nav-link" href="index.php">Home</a></li>
          
          <li class="nav-item d-none d-lg-block"><a class="nav-link" href="aboutus.php">AboutUs</a></li>
         
          <li class="nav-item d-none d-lg-block"><a class="nav-link" href="contactus.php">ContactUs</a></li>
         
          <li class="nav-item d-none d-lg-block"><a class="nav-link" href="FAQ.php">FAQ</a></li>
          <li class="d-lg-none">
           
        </ul>
      </div>
    </nav>
  <?php
  } elseif (isset($_SESSION['user_name'])) {
  ?>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
      <a class="navbar-brand" href="index.php"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <a href="index.php"><img src="images/logo.png" style="width:80px;height:42px;margin-left:20%;" class="logo_enable"></a>
        <ul class="navbar-nav ml-auto">
          <li class="d-lg-none">
              <a href="index.php" class="text d-lg-none">Home</a>
              <hr class="d-lg-none" />
            </li>
          <li class="nav-item d-none d-lg-block"><a class="nav-link" href="index.php">Home</a></li>
          <li class="d-lg-none">
              <a href="about.php" class="text d-lg-none">About</a>
              <hr class="d-lg-none" />
            </li>
          <li class="nav-item d-none d-lg-block"><a class="nav-link" href="about.php">About</a></li>
          <li class="d-lg-none">
              <a href="products.php" class="text d-lg-none">Products</a>
              <hr class="d-lg-none" />
            </li>
          <li class="nav-item d-none d-lg-block"><a class="nav-link" href="products.php">Products</a></li>
          <li class="d-lg-none">
              <a href="faq.php" class="text d-lg-none">FAQ</a>
              <hr class="d-lg-none" />
            </li>
          <li class="nav-item d-none d-lg-block"><a class="nav-link" href="faq.php">FAQ</a></li>
          
            </div>
          </div>
        </ul>
      </div>
    </nav>
  <?php
  }
  ?>
 
<div class="container-fluid" style=" background-color: #990000; height:100px; width:100%; margin-top: 100px;" >
<h3 style="padding-top: 40px; color: white; line-height:10%; text-indent: 10px;">About Us</h3>
<hr style="color: white;  width:40%; border-top: 2px solid white; float: left;">
</div>



<div class="container-fluid" style="height:auto; width:50%; background-color: white;  float:right;">
 <br/>
 <h2  style="text-indent: 30px;">About UST-CICS SWDB</h2>
<p style="text-indent: 30px;">Sample Text Sample Text Sample Text Sample Text Sample </p>
<p style="text-indent: 30px;"> Sample Text Sample Text Sample Text Sample Text Sample Text</p>
<p style="text-indent: 30px;">Sample Text Sample Text Sample Text Sample Text Sample </p>
<br/>
<hr style=" border: none; border-top: 2px solid black">
<br/>
<h2 style="text-align: center;">Meet the Administrators and Staff</h2>
<br/>
<img src="profile.jpeg" style="display: block; margin-left: auto; margin-right: auto; width: 20%;" class="logo_enable">
<p style="text-align: center;">Sample Text Sample <br/> Sample Text Sample</p>
<div class="row" style="margin-left:50px;">
  <div class="column">
    <img src="profile.jpeg" alt="profile" style="width:65%;">
    <p style="text-align:center; padding-right: 70px;">Sample Text <br/> Sample Text </p>
  </div>
  <div class="column">
    <img src="profile.jpeg" alt="profile" style="width:65%;">
    <p style="text-align:center; padding-right: 70px;">Sample Text  <br/> Sample Text </p>
  </div>
  <div class="column">
    <img src="profile.jpeg" alt="profile" style="width:65%;">
    <p style="text-align:center; padding-right: 70px;">Sample Text  <br/> Sample Text </p>
  </div>
</div>
<br/>
<br/>
</div>

<div class="container-fluid" style = "height:auto; width:50%; margin-right: 50%; text-align:center; background: rgba(128, 128, 128, 0.8); ">
  <br/>
  <h4 style="color:white;"><b>Mission</b></h4>
  <p style="color:white;">Sample Text Sample Text Sample Text</p>
  <p style="color:white;">Sample Text Sample Text Sample Text</p>
  <p style="color:white;">Sample Text Sample Text Sample Text</p>

  <h4 style="color:white;"><b>Vision</b></h4>
  <p style="color:white;">Sample Text Sample Text Sample Text</p>
  <p style="color:white;">Sample Text Sample Text Sample Text</p>
  <p style="color:white;">Sample Text Sample Text Sample Text</p>

  <h4 style="color:white;"><b>Motto</b></h4>
  <p style="color:white;">Sample Text Sample Text Sample Text</p>
  <p style="color:white;">Sample Text Sample Text Sample Text</p>
  <p style="color:white;">Sample Text Sample Text Sample Text</p>

  <h4 style="color:white;"><b>Thomasian Core Value</b></h4>
  <p style="color:white;">Sample Text Sample Text Sample Text</p>
  <p style="color:white;">Sample Text Sample Text Sample Text</p>
  <p style="color:white;">Sample Text Sample Text Sample Text</p>
  <p style="color:white;">Sample Text Sample Text Sample Text</p>

  <h4 style="color:white;"><b>Student Handbook</b></h4>
  <p style="color:white;">Sample Text Sample Text Sample Text</p>
<br/>

</div>


  <!-- Footer Bar -->
  <footer class="container-fluid" id="socials_section" style=" position: absolute;">
    <div class="row" >
      <div class="col-sm-4" style="line-height: 0.8;">
        <h3 style="font-family: Darker Grotesque, sans-serif;">Contacts:</h3>
        <p>Sample Text Sample Text Sample Text Sample Text Sample </p>
        <p>Sample Text Sample Text Sample Text Sample Text Sample Text</p>
        <p>Sample Text Sample Text Sample Text Sample Text Sample </p>
        <button type="button" class="btn btn-secondary"><b><a href="contactus.php" style="color: white;">View More</a></b></button>
      </div>
      <p style="padding-left:35%;">Photo: facebook/UST-College of Information and Computing Sciences</p>    </div>
  </footer>

  
</body>
</html>