<!DOCTYPE html>
<html>

<head>
  <title>UST-CICS SWDB About</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>
  <script src="https://code.iconify.design/2/2.1.2/iconify.min.js"></script>
  <script src="https://code.iconify.design/iconify-icon/1.0.0/iconify-icon.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <!-- ICONS  -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel='stylesheet' href='hti tps://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css' />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

  <!-- FONTS  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Darker+Grotesque:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap">
  <link href='https://fonts.googleapis.com/css?family=Playfair Display' rel='stylesheet'>

  <link rel="icon" type="image/x-icon" href="/images/logo.ico">

  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="style-2.css">
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

        <ul class="navbar-nav ml-auto"  style="font-size:20px;">
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

  <div class="container-fluid" style=" background-color: #990000; height:100px; width:100%; margin-top: 100px;">
    <h3 style="padding-top: 40px; color: white; line-height:10%; text-indent: 10px;">About Us</h3>
    <hr style="color: white;  width:40%; border-top: 2px solid white; float: left;">
  </div>



  <div class="container-fluid" style="height:auto; width:50%; background-color: white;  float:right;">
    <br />
    <h2 style="text-indent: 30px; padding-bottom:10px;">About UST-CICS SWDB</h2>
    <p style="text-indent: 30px;">The Student Welfare and Development Coordinator serves as the enforcement   </p>
    <p style="text-indent: 30px;">arm of the Office for Student Affairs (OSA) </p>
    <p style="text-indent: 30px;">in terms of: </p>
    <p style="text-indent: 30px;">(1) maintaining order and discipline, preventing offenses, investigating student  </p>
    <p style="text-indent: 30px;">violations of University rules and policies as provided in the Student Handbook. </p>
    <p style="text-indent: 30px;">or other laws. </p>
    <p style="text-indent: 30px;">(2) monitoring and evaluating the implementation of the co-curricular and </p>
    <p style="text-indent: 30px;">extra-curricular activities of Student Organizations. </p>
    <p style="text-indent: 30px;">(3) ensuring the safety, security, welfare and development of students.</p>
    <p style="float:right;  font-size: 14px;"><i>https://www.ust.edu.ph/</i></p>


    <br />
    

    <p style="text-indent: 30px; margin-top:20px;">The Student Welfare and Development Board (SWDB) is a collegial body,</p>
    <p style="text-indent: 30px;">tasked to formulate and recommend to the Assistant to the Rector for</p>
    <p style="text-indent: 30px;">Student Affairs policies affecting student welfare and student </p>
    <p style="text-indent: 30px;">discipline; and for purposes of achieving uniformity in sanctions </p>
    <p style="text-indent: 30px;">imposed in disciplinary cases, review and modify the sanctions imposed</p>
    <p style="text-indent: 30px;">by the College.</p>


    <p style="text-indent: 30px;">The SWDB collaborates with the Assistant to the Rector for Student </p>
    <p style="text-indent: 30px;">Affairs in the mobilization of students for university wide activities </p>
    <p style="text-indent: 30px;">aimed at promoting Thomasian culture and identity.</p>

    <p style="float:right; font-size: 14px;"><i>http://education.ust.edu.ph/</i></p>

    <br />
    <hr style=" border: none; border-top: 2px solid black">
  
    <h3 style="text-align: center;">Meet the Administrator and Board Members</h3>
    <br />
    <img src="Asst. Prof. Maria Lourdes L. Edang, MS.jpg" style="display: block; margin-left: auto; margin-right: auto; width: 20%;" class="logo_enable">
    <p style="text-align: center;">Asst. Prof. Maria Lourdes L. Edang, MS <br /> Coordinator</p>
    <div class="row" style="margin-left:50px;">
      <div class="column">
        <img src="profile.jpeg" alt="profile" style="width:65%;">
        <p style="text-align:center; padding-right: 70px;">Sample Text <br />Board Member </p>
      </div>
      <div class="column">
        <img src="profile.jpeg" alt="profile" style="width:65%;">
        <p style="text-align:center; padding-right: 70px;">Sample Text <br />Board Member </p>
      </div>
      <div class="column">
        <img src="profile.jpeg" alt="profile" style="width:65%;">
        <p style="text-align:center; padding-right: 70px;">Sample Text <br /> Board Member</p>
      </div>
    </div>
    <hr style=" border: none; border-top: 2px solid black">
    <br />
    <br />
  </div>

  <div class="container-fluid" style="height:auto; width:50%; margin-right: 50%; text-align:center; background: rgba(128, 128, 128, 0.8); ">
    <br />
    <h4 style="color:white;"><b>Mission</b></h4>
    <p style="color:white;">The Institute of Information and Computing Sciences </p>
    <p style="color:white;">of the University of Santo Tomas, under the inspiration of its model,</p>
    <p style="color:white;">Saint Thomas Aquinas, and its patron, Saint Vincent Ferrer, declares </p>
    <p style="color:white;">its commitment to the its commitment to the pursuit of truth and </p>
    <p style="color:white;">the formation of technically competent ITE professionals endowed with a  </p>
    <p style="color:white;">strong commitment to lifelong learning, social responsibility and a desire for  </p>
    <p style="color:white;">leadership in the spirit of service in their respective fields of specialization.</p>
    <br />

    


    <h4 style="color:white;"><b>Vision</b></h4>
    <p style="color:white;">The Institute of Information and Computing Sciences</p>
    <p style="color:white;">envisions itself as a premier and innovative institution in</p>
    <p style="color:white;">Information Technology Education and research in the Asia-Pacific Region.</p>
    <br />

    <h4 style="color:white;"><b>Motto</b></h4>
    <p style="color:white;">Truth in Charity</p>
    <br />
    

    <h4 style="color:white;"><b>Thomasian Core Value</b></h4>
    <p style="color:white; font-weight: bold;"><i>Competence</i></p>
    <p style="color:white;">Every Thomasian should manifest competence. Our life and work  </p>
    <p style="color:white;">should always be an example of adherence to truth and </p>
    <p style="color:white;">intellectual creativity. We are all expected to be specialists </p>
    <p style="color:white;">in our chosen field of discipline. </p>

    <p style="color:white; font-weight: bold;"><i>Compassion</i></p>
    <p style="color:white;">Every Thomasian lives not only for oneself but also for the people  </p>
    <p style="color:white;">in one's family, community and country. his means that   </p>
    <p style="color:white;">you and I should also look into the concerns of others.</p>
    <p style="color:white;">Compassion is passion that is directed towards people in need.</p>
   
    <p style="color:white; font-weight: bold;"><i>Commitment</i></p>
    <p style="color:white;">Every Thomasian is expected to exercise one's work, profession,</p>
    <p style="color:white;">or mission in life with deep commitment. You and I are called </p>
    <p style="color:white;">to give ourselves fully to the ideals that we, Thomasians,</p>
    <p style="color:white;">hold dear as we make our presence felt in the world. </p>
    <br />



    <h4 style="color:white;"><b>Student Handbook</b></h4>
    <p style="color:white;"><a href="UST-Student-Handbook.pdf" style="color: white;">Click Here</a></p>

    <br />

  </div>


  <!-- Footer Bar -->
  <footer class="container-fluid" id="socials_section" style=" position: absolute;">
    <div class="row">
      <div class="col-sm-4" style="line-height: 0.8;">
        <h3 style="font-family: Darker Grotesque, sans-serif;"><iconify-icon inline icon="ant-design:contacts-outlined"></iconify-icon>Contacts:</h3>
        <p>Address:</p>
        <p>Telephone:</p>
        <p>Email:</p>
        <button type="button" class="btn btn-secondary"><b><a href="contactus.php" style="color: white;">View More</a></b></button>
      </div>
      <p style="padding-left:53%;">Photo: wallpaperflare.com</p>
    </div>
  </footer>


</body>

</html>