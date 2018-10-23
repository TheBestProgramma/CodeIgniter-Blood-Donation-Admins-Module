<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Blood Bank and Donation System</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="/codeigniter/css/bootstrap.min.css">
    <!-- Font Awesome & Pixeden Icon Stroke icon font-->
    <link rel="stylesheet" href="/codeigniter/css/font-awesome.min.css">
    <link rel="stylesheet" href="/codeigniter/css/pe-icon-7-stroke.css">
    <!-- Google fonts - Roboto Condensed & Roboto-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:700|Roboto:300,400">
    <!-- lightbox-->
    <link rel="stylesheet" href="/codeigniter/css/lightbox.min.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="/codeigniter/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="/codeigniter/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="/codeigniter/favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

button:hover {
    opacity:4;

}

/* Extra styles for the cancel button */


/* Float cancel and signup buttons and add an equal width */
 .signupbtn {
  float: left;
  width: 10%;
  color: white;
  background-color: black;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
</style>
  <body class="home">
    <!-- navbar-->
    <header class="header" style="background-color: black">
      <div role="navigation" class="navbar navbar-default">
        <div class="container">
          <div class="navbar-header"><a href="index.html" class="navbar-brand">Blood Bank & Donation System</a>
          <div class="navbar-buttons">
            <button type="button" data-toggle="collapse" data-target=".navbar-collapse" class="navbar-toggle navbar-btn">Menu<i class="fa fa-align-justify"></i></button>
          </div>
        </div>
        <div id="navigation" class="collapse navbar-collapse navbar-right">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index">Home</a></li>
            <li><a href="text.html">News</a></li>
            <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Blood Banks <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">Nairobi</a></li>
              <li><a href="#">Kisumu</a></li>
              <li><a href="#">Mombasa</a></li>
              <li><a href="#">Eldoret</a></li>
              <li><a href="#">Kitui</a></li>
              <li><a href="#">Namanga</a></li>
              <li><a href="#">Garissa</a></li>
            </ul>
          </li>
          <li><a href="contact.html">Contact Us</a></li>
        </div>
      </div>
    </div>
  </header>
  <!-- *** LOGIN MODAL ***_________________________________________________________
  -->
  <form action="action_page.php" style="border:1px solid #ccc">
    <div class="container">
      <h3>Sign Up</h3>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="email"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="email" required>
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
      <label for="psw-repeat"><b>Confirm Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
      <div class="clearfix">
        <button type="submit" class="signupbtn">Sign Up</button>
      </div>
    </div>
  </form>
  <!-- *** LOGIN MODAL END ***-->
  <!-- portfolio-->
  
  <footer class="footer">
    <div class="footer__copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <p>&copy;2018 Blood Banking & Donation System</p>
          </div>
          <div class="col-md-6">
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- Javascript files-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="/codeigniter/js/bootstrap.min.js"></script>
  <script src="/codeigniter/js/jquery.cookie.js"> </script>
  <script src="/codeigniter/js/lightbox.min.js"></script>
  <script src="/codeigniter/js/front.js"></script><!-- substitute:livereload -->
  <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
  <!---->
  <script>
  (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
  function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
  e=o.createElement(i);r=o.getElementsByTagName(i)[0];
  e.src='//www.google-analytics.com/analytics.js';
  r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
  ga('create','UA-XXXXX-X');ga('send','pageview');
  </script>
</body>