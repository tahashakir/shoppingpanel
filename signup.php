<?php 
 require 'connection.php';


?>




<!doctype html>
<html class="no-js" lang="">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Gift Shop| Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="fonts/flaticon.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Modernize js -->
    <script src="js/modernizr-3.6.0.min.js"></script>
</head>
<style>
    .full{

background: url(img/back1.jpg) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    }
    .col{
   color: white;
 

    }


</style>
<body class="full">
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <!-- Login Page Start Here -->
   <div class="container">
    <div class="row justify-content-center" style="margin:100px 0;">
        <div class="col-md-4">
           <img src="img/gift1.jpg" alt="logo">
            <p class="message"></p>
            <form method="post" action="user_registration_script.php">
              <div class="form-group">
                <label for="name" class="col">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Name" required="true">
              </div>
              <div class="form-group">
                <label for="email" class="col">Email address</label>
                <input type="email" class="form-control" name="email" placeholder="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                <label for="password" class="col">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password(min. 6 characters)" required="true" pattern=".{6,}">
              </div>
              <div class="form-group">
                <label for="name" class="col">City</label>
                <input type="text" class="form-control" name="city" placeholder="City" required="true">
              </div>
               <div class="form-group">
                <label for="name" class="col">Contact No</label>
                <input type="tel" class="form-control" name="mobile" placeholder="Contact No" required="true">
              </div>
              <div class="form-group">
                <label for="name" class="col">Address</label>
                <input type="text" class="form-control" name="address" placeholder="Address" required="true">
              </div>
              <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Sign Up">
                                 <div class="panel-footer">Already have an account yet? <a href="login.php">Back to login</div>
                            </div>
            </form>
        </div>
    </div>
</div>




    <!-- Login Page End Here -->
    <!-- jquery-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Scroll Up Js -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- Custom Js -->
    <script src="js/main.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

</body>


</html>