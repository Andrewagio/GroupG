<!DOCTYPE html>
<html lang="en">

<!-- auth-reset-password.html  Tue, 07 Jan 2020 03:39:48 GMT -->
<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
<title>Change Password</title>

<!-- General CSS Files -->
<link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css">

<!-- CSS Libraries -->

<!-- Template CSS -->
<link rel="stylesheet" href="assets/css/style.min.css">
<link rel="stylesheet" href="assets/css/components.min.css">
</head>

<body class="layout-4" style="background: radial-gradient(circle, rgba(2,124,156,1) 0%, rgba(160,189,232,1) 100%);r>
<?php
session_start();
if(!isset($_SESSION['username'])){

	}
?>
<div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                    <div class="login-brand">
                        <img src="xbaylogo.jpeg" alt="logo" width="100" class="shadow-light rounded-circle">
                    </div>
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Change Password</h4>
                        </div>
                        <div class="card-body">
            <?php

require('connection.php');
if(isset($_POST['changePassword'])){

$email=$_POST['email'];
 $password = md5($_POST['password']);

$login="SELECT * FROM users WHERE email ='$email'";
$result_login=mysqli_query($db_link, $login); 

	if (@mysqli_num_rows($result_login)==0){
	echo " <div class='alert alert-danger'>
                      <div class='alert-title'>WARNING</div>
                   Email does not match. Try again
				    <div class='col-12'>
		 <br>
            <a href='index.php' class='btn btn-primary btn-block'>Back To Login</a>
          </div>
                    </div>";
	}else{
	
$change = "UPDATE users SET password = '$password'  WHERE email = '$email' ";
$result=mysqli_query($db_link,$change);
if($result==true){
	echo "     <div class='alert alert-success alert-dismissible'>
	       <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
      
         Password changed successfully
		      <a href='../index.php' class='btn btn-primary btn-block'> Login</a>
                    </div>";
}


}
		

}



	?>
                            <form method="POST" action="newPassword.php">
                                <div class="form-group">
                                    <label for="email">Enter New Password</label>
                                    <input  type="text" class="form-control" name="password" tabindex="1" required autofocus>
								  <?php 
					include('connection.php');
					$me = $_SESSION['username'];
					$view = "SELECT * FROM users WHERE username = '$me'";
					$result = $db_link->query($view);
					$row = $result->fetch_assoc();
		
					?>
									<input name="email" type="hidden" class="form-control" value="<?php echo $row['email'];?>" /> 
								
								</div>
                       
                                <div class="form-group">
                                    <button type="submit" name="changePassword" class="btn btn-primary btn-lg btn-block" tabindex="4">Change Password</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="simple-footer">
                        Copyright &copy; Group G church 2025
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
</div>
<!-- General JS Scripts -->
<script src="assets/bundles/lib.vendor.bundle.js"></script>
<script src="js/CodiePie.js"></script>

<!-- JS Libraies -->

<!-- Page Specific JS File -->

<!-- Template JS File -->
<script src="js/scripts.js"></script>
<script src="js/custom.js"></script>
</body>

<!-- auth-reset-password.html  Tue, 07 Jan 2020 03:39:48 GMT -->
</html>