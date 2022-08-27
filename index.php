<!DOCTYPE html>
<html>
  <head>
    <title>UST-CICS SWDB Homepage</title>
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
        <a href="index.php"><img src="cicslogo.png" style="width:80px;height:70px;margin-left:20%;" class="logo_enable"></a>
        
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
 
 
 <div class="container-fluid" id="containerhome" style="margin-top: 150px; color: white;">
<h2>CICS - Student Welfare and Development Board</h2>
<br/> 

<div class="container " style="background-color:red; height:350px; width:400px; opacity:0.9; color:white; margin-right:5%;">
  <h3 style="text-align:center; padding-top:20px;">Student Login</h3> <br/>
  <label for="studentnumber"  style="padding-left:10%;">Student Number :</label> <br/>
  <input type="number" id="studentnumber" name="studentnumber" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
    maxlength="10" style="width:80%; margin-left:10%;"><br/><br/>
  <label for="password" style="padding-left:10%;">Password :</label> <br/>
  <input type="text" id="password" name="password" style="width:80%; margin-left:10%;"><br/><br/>
  <button type="button" class="btn btn-secondary " style="margin-left:155px">Login</button>
  </div>
  
<div style = "line-height: 0.8; text-indent: 50px; display:absolute;">
  <p>Sample Text Sample Text Sample TextTextSample TextSample Text TextSample TextSample Text</p>
  <p>Sample Text Sample Text Sample Text TextSample TextSample Text</p>  
  <p>Sample Text Sample Text Sample Text TextSample TextSample Text</p>
  <p>Sample Text Sample Text Sample TextTextSample TextSample Text</p>
  <p>Sample Text Sample Text Sample Text Sample TextSample TextSample Text</p>
  <p>Sample Text Sample Text Sample Text Sample TextSample TextSample Text</p>
  <p>Sample Text Sample Text Sample Text Sample TextSample TextSample Text</p>
  <p>Sample Text Sample Text Sample Text Sample TextSample TextSample Text</p>
  <button type="button" class="btn btn-danger" style = "margin-left:15%; width:150px;">See More</button>
 </div>

 </div>
 <br/>

 


  <!-- Footer Bar -->
  <footer class="container-fluid" id="socials_section" style="position: absolute;">
    <div class="row" >
      <div class="col-sm-4" style="line-height: 0.8;">
        <h3 style="font-family: Darker Grotesque, sans-serif;">Contacts:</h3>
        <p>Sample Text Sample Text Sample Text Sample Text Sample </p>
        <p>Sample Text Sample Text Sample Text Sample Text Sample Text</p>
        <p>Sample Text Sample Text Sample Text Sample Text Sample </p>
        <button type="button" class="btn btn-secondary"><b>View More</b></button>
      </div>
    </div>
  </footer>


  
</body>
</html>