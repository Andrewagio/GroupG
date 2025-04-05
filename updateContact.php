<!DOCTYPE html>
<html lang="en">

<!-- auth-reset-password.html  Tue, 07 Jan 2020 03:39:48 GMT -->
<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
<title>Update Contact</title>

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
                            <h4>Update Contact Information</h4>
                        </div>
                        <div class="card-body">
            <?php

require('connection.php');
if(isset($_POST['UpdateInfo'])){

$email=$_POST['email'];
 $contact = $_POST['contact'];
 $id = $_POST['id'];

	
$change = "UPDATE users SET email = '$email', contact = '$contact'  WHERE id = '$id' ";
$result=mysqli_query($db_link,$change);
if($result==true){
	echo "     <div class='alert alert-success alert-dismissible'>
	 
      Update Successful
		      <a href='dashboard.php' class='btn btn-primary btn-block'> Dashboard</a>
                    </div>";
}

}

	?>
                            <form method="POST" action="updateContact.php">
                                <div class="form-group">
                                    <label for="contact">Contact</label>

								  <?php 
					include('connection.php');
					$me = $_SESSION['username'];
					$view = "SELECT * FROM users WHERE username = '$me'";
					$result = $db_link->query($view);
					$row = $result->fetch_assoc();
		
					?>
					                                    <input  type="text" class="form-control" name="contact" tabindex="1" value="<?php echo $row['contact'];?>" required autofocus>
									<input name="id" type="hidden" class="form-control" value="<?php echo $row['id'];?>" /> 
								
								</div>
                         <div class="form-group">
                                    <label for="email">Email</label>
                                    <input  type="text" class="form-control" value="<?php echo $row['email'];?>"  name="email" tabindex="1" required autofocus>
								  <?php 
					include('connection.php');
					$me = $_SESSION['username'];
					$view = "SELECT * FROM users WHERE username = '$me'";
					$result = $db_link->query($view);
					$row = $result->fetch_assoc();
		
					?>
									
								</div>
                                <div class="form-group">
                                    <button type="submit" name="UpdateInfo" class="btn btn-primary btn-lg btn-block" tabindex="4">Update Now</button>
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