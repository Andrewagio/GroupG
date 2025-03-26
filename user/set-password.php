<!DOCTYPE html>
<html lang="en">

<!-- auth-login.html  Tue, 07 Jan 2020 03:39:47 GMT -->
<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
<title>CREATE NEW PASSWORD</title>

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
                        <div class="card-header">
                            <h4 style="color:white">Please enter your staff ID and email to recieve password</h4>
                        </div>
                        <div class="card-body" >
                            <form method="POST" action="confirm-pass.php" class="needs-validation" novalidate="">
                                <div class="form-group">
                                    <label for="email" style="color:white">Email</label>
                                    <input id="email" type="text" class="form-control" name="email" tabindex="1" required autofocus>
                                    <div class="invalid-feedback">
                                        Please enter your Email
                                    </div>
                                </div>
									<?php 
		$random = rand(7987567,5109);
		
		?>
		 <input type="hidden" name="password"class="form-control" value="<?php echo $random;?>" required>
                                <div class="form-group">
                                    <div class="d-block">
                                        <label for="password" class="control-label" style="color:white">Staff ID</label>
                                    
                                    </div>
                                    <input id="password" type="password" class="form-control" name="CAGD_CODE" tabindex="2" required>
                                    <div class="invalid-feedback">
                                        please enter staff ID
                                    </div>
                                </div>
                                   <a href="sms-recovery.php" style="color:white">I don't have email. i want to use phone number</a>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                    SET PASSWORD
                                    </button>
										 <a href="index.php" class="btn btn-danger btn-lg btn-block">
   Back to login 
        </a>
                                </div>
                            </form>
                    
                        </div>
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