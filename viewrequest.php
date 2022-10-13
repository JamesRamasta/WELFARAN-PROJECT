<!DOCTYPE html>
<html>

<head>
    <title>UST-CICS SWDB View Request Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>
    <script src="https://code.iconify.design/2/2.1.2/iconify.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.0/iconify-icon.min.js"></script>
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
                        <hr class="d-lg-none" />w
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

    <br />
    <div class="container-fluid" id="containerviewreq" style=" height:auto; width:100%; margin-top: 75px;  color: white;  background: rgba(128, 128, 128, 0.9);">
        <a href="dashboard.php" style="color: white;">
            <iconify-icon icon="entypo:arrow-left" style="color: crimson; float: left; padding-top:20px;" width="60" height="60"> </iconify-icon>
            <p style="float: left; padding-top:35px; color:black;">Go Back</p>
        </a>

        <br /><br />
        <h4 style="color:black; margin-right: 100px; margin-top:40px; float: left;">All Request</h4>
        <h4 style="color:black; margin-left: 100px; padding-right: 120px; margin-top:40px; float: right; "><a href="request.php" style="color: black;">Create New Request</a></h4>

        <br /><br />
        <div style="text-align:center; margin: 0 auto; line-height: 0.8; height:auto; width:85%; margin-top:25px; color:black; background-color:white;">
            <div class="container-fluid" style="padding-top: 20px;">
                <img src="profile.jpeg" style="display: block; margin-right: auto; height:100px; width:100px; float:left;" class="logo_enable"><br />
                <p style="padding-right: 71%; padding-top: 20px;">Organization Paper <br /><br />
                </p>
                <p style="padding-right: 56%; ">
                    Date of Request: _________ Status: _________
                </p>
                <hr style=" border: none; border-top: 3px solid black; margin-top:0%;">
                <br />
            </div>
            <div class="container-fluid" style="padding-top: 20px;">
                <img src="profile.jpeg" style="display: block; margin-right: auto; height:100px; width:100px; float:left;" class="logo_enable"><br />
                <p style="padding-right: 50%; padding-top: 20px;">ID Processing & Certificate of Good Moral Character <br /><br />
                </p>
                <p style="padding-right: 56%; ">
                    Date of Request: _________ Status: _________
                </p>
                <hr style=" border: none; border-top: 3px solid black; margin-top:0%;">
                <br />
            </div>
            <div class="container-fluid" style="padding-top: 20px;">
                <img src="profile.jpeg" style="display: block; margin-right: auto; height:100px; width:100px; float:left;" class="logo_enable"><br />
                <p style="padding-right: 60%; padding-top: 20px;">Certificate of Good Moral Character <br /><br />
                </p>
                <p style="padding-right: 56%; ">
                    Date of Request: _________ Status: _________
                </p>
                <hr style=" border: none; border-top: 3px solid black; margin-top:0%;">
                <br />
            </div>
        </div>
        <br /><br />
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