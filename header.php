<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Company-HTML Bootstrap theme</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link href="css/prettyPhoto.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
 <style>
         .error {color: #FF0000;}
      </style>
</head>

<body>
  <header>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
            <div class="navbar-brand">
              <a href="index.php"><h1><span><font style="font-family: 'Josefin Sans', sans-serif; text-shadow: 1px 2px 2px black; color:navy">V&amp;C</font> </span></h1></a>
            </div>
          </div>
  <div class="navbar-collapse collapse">
            <div class="menu">
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation"><a href="index.php" class="<?php if($page=="home") echo'active'?>">Home</a></li>
              <li role="presentation"><a href="about.php" class="<?php if($page=="about") echo'active'?>">About Us</a></li>
             <li role="presentation"><a href="services.php" class="<?php if($page=="services") echo'active'?>">Services</a></li>
          <li role="presentation"><a href="portfolio.php" class="<?php if($page=="portfolio") echo'active'?>">Portfolio</a></li>
         <li role="presentation"><a href="blog.php" class="<?php if($page=="blog") echo'active'?>">Blog</a></li>
                  <li role="presentation"><a href="signup.php" class="<?php if($page=="signup") echo'active'?>">signup</a></li>
         <li role="presentation"><a href="contact.php" class="<?php if($page=="contact") echo'active'?>">Contact</a></li>
                
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>