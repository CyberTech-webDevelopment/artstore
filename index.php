<?php include "header.php"; ?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Document</title>
	<link rel="icon" href="images/logo.png">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
   --><!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
	
  <!-- <link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
	<link rel="stylesheet" type="text/css" href="css/subnav.css"> -->
	<link rel="stylesheet" href="carusel/css/owl.carousel.min.css" >
  <link rel="stylesheet" href="carusel/css/style.css" >
  <link rel="stylesheet" href="css/sections.css">
  <!-- <link rel="stylesheet" href="css/footer.css"> -->
  <link rel="stylesheet" href="carusel-vertical/carusel-vertical.css">


 <!--  <script src='https://kit.fontawesome.com/a076d05399.js'></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Amiri&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
 -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->
 
 <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>

<?php
      include "nav-group.php"; 
      include "mobile-navbar.php"; 
      include "carusel/carusel.php";
      include "sections/section-new-arrivals.php";
      include "sections/section-hot-offers.php";
      include "sections/bestseller.php";
      include "sections/gifts.php";
      include "sections/latest-products.php";
      include "sections/from-our-blog.php";
      include "footer.php";
// =================== Modal ========================
      include "register-login-modals.php";
?>

<!-- ======= Carusel ======= -->
    
	  <script src="carusel/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="carusel/js/main.js"></script>
    <script src='carusel-vertical/carusel-vertical.js'></script>
    
    <?php include "footer-script.php"; ?>

</body>
</html>