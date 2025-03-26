<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Sign Up Page</title>
  <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0" style="background: radial-gradient(circle, rgba(2,124,156,1) 0%, rgba(160,189,232,1) 100%);r">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-start py-5 px-4 px-sm-5" style="background:inherit">
            
              <h3 style="color:white">Welcome to Our Church Attendance System</h3>
              <h6 class="fw-light text-center" style="color:white">Signing up is easy. It only takes a few steps</h6>
              <form action="registeraction.php" method="POST">
			    <div class="form-group">
				<?php 
				$randomID = rand(9999, 1111);
				
				?>
				<label>Membership ID</label>
                  <input type="text" name="memberID"class="form-control form-control-lg" id="exampleInputUsername1" value="XCH<?php echo $randomID?>" readonly>
                </div>
                <div class="form-group">
				<label>Name</label>
                  <input type="text" name="name"class="form-control form-control-lg" id="exampleInputUsername1" placeholder="name" required>
                </div>
                <div class="form-group">
					<label>Username</label>
                  <input type="text" name="username" class="form-control form-control-lg"  placeholder="username" required>
                </div>
				   <div class="form-group">
					<label>Password</label>
                  <input type="text" name="password" class="form-control form-control-lg"  placeholder="Password" required>
                </div>
				  <div class="form-group">
					<label>Confirm Password</label>
                  <input type="text" name="confirm" class="form-control form-control-lg"  placeholder="Password" required>
                </div>
                <div class="form-group">
				<label>Gender</label>
                  <select name="gender"class="form-select form-select-lg form-select" required>
                    <option style="color:black">Please select</option>
                    <option style="color:black">Male</option>
                    <option style="color:black"> Female</option>
                    
                  </select>
                </div>
				<div class="form-group">
					<label>Date of birth</label>
                  <input type="date" name="dob" class="form-control form-control-lg"  placeholder="address"required>
                </div>
                 <div class="form-group">
					<label>Email</label>
                  <input type="email" name="email"class="form-control form-control-lg"  placeholder="Email" required>
                </div>
				 <div class="form-group">
					<label>Contact</label>
                  <input type="text" name="contact"class="form-control form-control-lg"  placeholder="contact"required>
                </div>
				 <div class="form-group">
					<label>Address</label>
                  <input type="text" name="address"class="form-control form-control-lg" placeholder="address"required>
                </div>
				<div class="form-group">
				<label>Access</label>
                  <select name="access"class="form-select form-select-lg form-select" required>
                    <option style="color:black">Please select</option>
                    <option style="color:black">User</option>
                    <option style="color:black"> Admin</option>
                    
                  </select>
                </div>
            
                <div class="mt-3 d-grid gap-2">
                  <button class="btn btn-block btn-primary btn-lg fw-medium auth-form-btn" name="register" type="submit">SIGN UP</button>
                </div>
                <div class="text-center mt-4 fw-light">
                  Already have an account? <a href="index.php" class="" style="color:white">Login</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

</body>

</html>
