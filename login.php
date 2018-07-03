     <?php
$page="signup";
include"header.php";

?>

  <div id="breadcrumb">
    <div class="container">
      <div class="breadcrumb">
        <li><a href="index.php">Home</a></li>
        <li>Contact</li>
      </div>
      </div>
  </div>
  
<div class="container">
<h2 id="registerh2" style="margin-left: 409px;margin-bottom: 35px;">Register Here</h2><hr>
<div id="signupform">

<form class="form-horizontal"id="loginform" action="">
   
    <div class="form-group">
        <label class="control-label col-md-4" id="loginlabel" for="email">Email:</label>
        <div class="col-md-8">
            <input type="email" class="form-control" id="email" name="email" placeholder="email">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-4" id="loginlabel" for="password">Password:</label>
        <div class="col-md-8">
            <input type="text" class="form-control" id="pasword1" name="password" placeholder="password">
        </div>
    </div>
  
    <div class="form-group"> 
    <div class="col-md-offset-10 col-md-2" id="">
	Already User Please<a href="login.php" style="
    margin-right: -300px;
    margin-top: 32px"> <b>Login Here</b></a>
      <button type="submit" class="btn btn-default regbtn ">Register</button>
    </div>
    </div>
</form>
</div></div>
    
    
    
    
    
    
</div>


 <!--/#footer-->
 
 
 <?php

include"footer.php";

?>
 <!--/#footer-->

 

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery-2.1.1.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.prettyPhoto.js"></script>
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY">
  </script>
  <script src="js/functions.js"></script>
  <script src="contactform/contactform.js"></script>

</body>

</html>
