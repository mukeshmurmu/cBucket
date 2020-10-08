<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/icon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/signin.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
    <title>Cloud Bucket - Cloud in your pocket</title>

    <?php
        include 'signin.php';
        include 'signup.php';
    ?>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <a class="navbar-brand home" href="index.php">cBucket<br><h6>Cloud in your pocket</h6></a>
  <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu" >
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarMenu">
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a class="active nav-link" href="index.php">HOME</a>
    </li>
    <li class="nav-item">
      <a class="nav-link about" href="about.php">ABOUT</a>
    </li>
    <li class="nav-item">
      <a class="nav-link contact" href="contact.php">CONTACT US</a>
    </li>
    <li class="nav-item">
      <a class="nav-link sign-up" onclick="signup_show()" data-target="#signup-form" data-toggle="modal"href="#">SIGN UP</a>
    </li>
    <li class="nav-item">
      <a class="nav-link sign-in" onclick="form_show()" href="#" data-target="#form" data-toggle="modal">LOGIN</a>
    </li>
  </ul>
  </div>
</nav>


<div class="sidebar">
<button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu" >
    <span class="navbar-toggler-icon"></span>
  </button>
    <ul>
        <li><a href="#"><i class="fas fa fa-user-circle-o"></i>Profile</a></li>
        <li><a href="#"><i class="fas fa fa-qrcode"></i>Dashboard</a></li>
        <li><a href="#"><i class="fas fa fa-area-chart"></i>Library</a></li>
        <li><a href="#"><i class="fas fa fa-file-photo-o"></i>Photos</a></li>
        <li><a href="#"><i class="fas fa fa-archive"></i>Archive</a></li>
        <li><a href="#"><i class="fas fa fa-trash"></i>Trash</a></li>
    </ul>


</div>






<!--
<input type="button" class="btn btn-light" value="Click me" onclick="form_show()" data-target="#form" data-toggle="modal;"/>
<input type="button" class="btn btn-danger" value="Off me" onclick="form_close()" data-target="#form" data-toggle="modal"/>
-->






<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
</body>
</html>