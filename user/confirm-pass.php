<!DOCTYPE html>
<html lang="en">

<!-- auth-login.html  Tue, 07 Jan 2020 03:39:47 GMT -->
<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
<title>CONFIRM PASSWORD</title>

<!-- General CSS Files -->
<link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css">

<!-- CSS Libraries -->
<link rel="stylesheet" href="assets/modules/bootstrap-social/bootstrap-social.css">

<!-- Template CSS -->
<link rel="stylesheet" href="assets/css/style.min.css">
<link rel="stylesheet" href="assets/css/components.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

</head>

<body class="layout-4" style="background: rgb(6,76,165);
background: linear-gradient(90deg, rgba(6,76,165,1) 0%, rgba(7,141,168,1) 70%);">

<div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                    <div class="login-brand">
                        <img src="assets/img/crilogo.png" alt="logo" width="100" class="rounded-circle">
						
                    </div>
						<hr style="border:2px solid white">
					     <h4 class="text-muted"style="color:white;text-align:center">CREATE NEW PASSWORD</h4>
			
                    <div class="card card-primary"style="background:inherit">
                       <?php

require('connection.php');


$email=$_POST['email'];
$CAGD_CODE=$_POST['CAGD_CODE'];
$password=$_POST['password'];

$login="SELECT * FROM profile WHERE CAGD_CODE='$CAGD_CODE' AND email = '$email'";
$result_login=mysqli_query($db_link, $login); 

	if (@mysqli_num_rows($result_login)==0){
	echo " <div class='alert alert-danger'>
                      <div class='alert-title'>WARNING</div>
                   Staff ID and Email does not match. Try again
				    <div class='col-12'>
		 <br>
            <a href='index.php' class='btn btn-primary btn-block'>Back To Login</a>
          </div>
                    </div>";
}else {
	
echo"

<div class='alert alert-success'>
                      <div class='alert-title'>SUCCESS ALERT</div>
                Staff ID and Email Successfully Found in Database
                    </div>
<div class='card'>
    <div class='card-body login-card-body'>
  <form action='new-password.php' method='POST'>
        <div class='input-group mb-3'>
          <input type='hidden' class='form-control' name='email' value='$_POST[email]' required>
          
        </div>
		<div class='input-group mb-3'>
          <input type='hidden' class='form-control' name='CAGD_CODE'value='$_POST[CAGD_CODE]' required>
        
        </div>

		 <input type='hidden' name='password' class='form-control' value='$_POST[password]' required>
        <div class='row'>
          <div class='col-12'>
            <input type='submit' class='btn btn-danger btn-block' name='set-pass' value='CONTINUE'>
          </div>
		 
		   <div class='col-12'>
		    <br>
            <a href='index.php' class='btn btn-primary btn-block'>Back To Login</a>
          </div>
          <!-- /.col -->
        </div>
      </form>
	  </div>
	  </div>

";}
?>
                    </div>
                    <div class="mt-5 text-muted text-center">
             
                    </div>
                    <div class="simple-footer" style="color:white">
                        Copyright &copy; STAFF INFORMATION SYSTEM UNIT | CROPS RESEARCH INSTITUTE
                    </div>
                </div>
            </div>
        </div>
    </section>
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

<!-- auth-login.html  Tue, 07 Jan 2020 03:39:47 GMT -->
</html>