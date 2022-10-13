<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to dashboard page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: dashboard.php");
    exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$studentnumber = $password = "";
$studentnumber_err = $password_err = $login_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if studentnumber is empty
    if(empty(trim($_POST["studentnumber"]))){
        $studentnumber_err = "Please enter your student number.";
    } else{
        $studentnumber = trim($_POST["studentnumber"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($studentnumber_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, studentnumber, password FROM students WHERE studentnumber = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_studentnumber);
            
            // Set parameters
            $param_studentnumber = $studentnumber;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if studentnumber exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $studentnumber, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["studentnumber"] = $studentnumber;                            
                            
                            // Redirect user to dashboard page
                            header("location: dashboard.php");
                        } else{
                            // Password is not valid, display a generic error message
                            $login_err = "Invalid student number or password.";
                        }
                    }
                } else{
                    // student number doesn't exist, display a generic error message
                    $login_err = "Invalid student number or password.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 

<!DOCTYPE html>
<html>

<head>
  <title>UST-CICS SWDB Homepage</title>
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

        <ul class="navbar-nav ml-auto" style="font-size:20px;">
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

  <br />
  <div class="container-fluid" id="containerhome" style=" width:55%; margin-top: 150px; margin-left: 40px; color: white;  background: rgba(128, 128, 128, 0.9); float: left;">
    <h2 style="margin-top:10px;">CICS - Student Welfare and Development Board</h2>
    <br />

    <div style="line-height: 0.8; text-indent: 50px; display:absolute;">
      <p>The SWDB under the supervision of the Office for Student Affairs provides services, </p>
      <p>programs, and facilities that gears toward students' success and future positive </p>
      <p>contributions to the society.</p><br/>
      <p>The University of Santo Tomas is responsible for the students'holistic development</p>
      <p>with emphasis on moral and character-building through the SWDB office.</p><br/>
      <p>The SWDC of each College is composed of at least three faculty members with the</p>
      <p>primary function of investigating and recommending to the Dean and Regent</p>
      <p>of the College the appropriate actions in disciplinary cases.</p>
       <p style="float:right; padding-top:20px;"><i>http://education.ust.edu.ph/</i></p>
      <button type="button" class="btn btn-danger" style="margin-left:40%; width:150px;"><a href="aboutus.php" style="color: white;">See More</a></button>
      <br /><br />
    </div>
  </div>


     

  <div class="container" style="background: rgba(153, 0, 0, 0.8); height:auto; width:400px; color:white; margin-right:5%; margin-top:9%;">
    <h3 style="text-align:center; padding-top:20px;">Student Login</h3> <br />
  
    <?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>

  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
  <div class="form-group" >
    <label for="studentnumber" style="padding-left:10%;">Student Number :</label> <br />
    <input type="number" id="studentnumber" name="studentnumber" class="form-control <?php echo (!empty($studentnumber_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $studentnumber; ?>" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10" style="width:80%; margin-left:10%;">
    <span class="invalid-feedback"><?php echo $studentnumber_err; ?></span>
  </div>
  <div class="form-group" >
    <label for="password" style=" padding-left:10%;">Password :</label> <br />
    <input type="password" id="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" style=" width:80%; margin-left:10%;"><br />
    <span class="invalid-feedback"><?php echo $password_err; ?></span>
  </div> 

  <div class="form-group">
    <input type="checkbox" onclick="myFunction()" style="margin-left:10%;">Show Password <br /><br />
    <input type="submit" class="btn btn-secondary " style="margin-left:155px;" value="Login">
  </div>
  </form>
  <br />
  </div>
  <br />

  <script>
    function myFunction() {
      var x = document.getElementById("password");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }
  </script>


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