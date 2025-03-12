<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>ELRF</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/venobox/venobox.css" rel="stylesheet">
 <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/css/bootstrap.min.css">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: TheEvent
    Theme URL: https://bootstrapmade.com/theevent-conference-event-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
    Header
  ============================-->

  <style>
    #logo img {
  width: 100%;
  height: 100%;
  object-fit: contain; /* Or use 'cover' if you want it to fill completely */
}
#logo {
  width: 200px;
  height: auto;
}

    </style>
  <header id="header" class='header-fixed'>
    <div class="container">

      <div id="logos" class="pull-left" style="height:80px; width:200px; margin:-15px; padding:5px;">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
        <a href="#intro" class="scrollto">
  <img src="img/ekl.png" alt="ekl" title="" style="width: 100%; height: 100%;  margin:0px; padding:5px;"></img>
</a>

      </div>
      <div>

      <?php
include('nav.php');
      ?>
    </div>
  </header>

  <style>
.sticky-icon  {
	z-index: 1;
	position: fixed;
	top: 15%;
	right: 0%;
	width: 220px;
	display: flex;
	flex-direction: column;
}  

.sticky-icon a  {
	transform: translate(160px, 0px);
	border-radius: 50px 0px 0px 50px;
	text-align: left;
	margin: 2px;
	text-decoration: none;
	text-transform: uppercase;
	padding: 10px;
	font-size: 22px;
	font-family: 'Oswald', sans-serif;
	transition: all 0.8s;
}

.sticky-icon a:hover  {
	color: #FFF;
	transform: translate(0px, 0px);
}	

.sticky-icon a:hover i  {
	transform: rotate(360deg);
}

.Facebook  { background-color: #2C80D3; color: #FFF; }
.Youtube   { background-color: #fa0910; color: #FFF; }
.Whatsapp  { background-color: #25d366; color: #FFF; }
.Twitter   { background-color: #53c5ff; color: #FFF; }
.Instagram { background-color: #e1306c; color: #FFF; }
.Google    { background-color: #d34836; color: #FFF; }						
	
.sticky-icon a i {
	background-color: #FFF;
	height: 40px;
	width: 40px;
	color: #000;
	text-align: center;
	line-height: 40px;
	border-radius: 50%;
	margin-right: 20px;
	transition: all 0.5s;
	font-size: 20px;
}

/* Individual Icon Colors */
.sticky-icon a i.fa-facebook-f  { color: #2C80D3; }
.sticky-icon a i.fa-google-plus-g  { color: #d34836; }
.sticky-icon a i.fa-instagram  { color: #FD1D1D; }
.sticky-icon a i.fa-youtube  { color: #fa0910; }
.sticky-icon a i.fa-twitter  { color: #53c5ff; }

/* Back to Top Button */
#myBtn {
	height: 50px;
	display: none;
	position: fixed;
	bottom: 20px;
	right: 30px;
	z-index: 99;
	text-align: center;
	padding: 10px;
	line-height: 40px;
	border: none;
	outline: none;
	background-color: #1e88e5;
	color: white;
	cursor: pointer;
	border-radius: 50%;
}

.fa-arrow-circle-up  {
	font-size: 30px;
}

#myBtn:hover {
	background-color: #555;
}

/* 📱 Responsive Styling for Mobile */
@media (max-width: 768px) {
	.sticky-icon  {
		width: 180px;
	}

	.sticky-icon a  {
		transform: translate(140px, 0px);
		font-size: 16px;
		padding: 8px;
	}

	.sticky-icon a:hover  {
		transform: translate(0px, 0px);
	}

	.sticky-icon a i {
		height: 30px;
		width: 30px;
		line-height: 30px;
		font-size: 16px;
		margin-right: 10px;
	}

	#myBtn {
		height: 40px;
		width: 40px;
		line-height: 30px;
		bottom: 15px;
		right: 15px;
	}

	.fa-arrow-circle-up  {
		font-size: 24px;
	}
}

/* Extra Small Screens */
@media (max-width: 480px) {
	.sticky-icon {
		width: 160px;
	}

	.sticky-icon a {
		transform: translate(120px, 0px);
		font-size: 14px;
		padding: 6px;
	}

	.sticky-icon a i {
		height: 30px;
		width: 30px;
		line-height: 30px;
		font-size: 17px;
		margin-right: 8px;
	}

	#myBtn {
		height: 35px;
		width: 35px;
		line-height: 25px;
		bottom: 10px;
		right: 10px;
	}

	.fa-arrow-circle-up {
		font-size: 20px;
	}
}

</style>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> 

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<!--Start Sticky Icon--> 
<div class="sticky-icon" style="margin-top:150px;">
   <a href="https://www.instagram.com/?hl=en" class="Instagram"><i class="fab fa-instagram"></i> Instagram </a>
   <a href="https://www.facebook.com/profile.php?id=61573753274747" class="Facebook"><i class="fab fa-facebook-f"> </i> Facebook </a>
   <a href="https://youtube.com/@eklavyaresearchfoundation-elrf" class="Youtube"><i class="fab fa-youtube"></i> Youtube </a>
   <a href="https://api.whatsapp.com/send?phone=919951636990&text=Hello%20ELRF." class="Whatsapp">
  <i class="fab fa-whatsapp"></i> Whatsapp
</a>

</div>
  <!-- #header -->
