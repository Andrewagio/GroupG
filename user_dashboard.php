<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>USER DASHBOARD</title>

  <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['access'] != 'User') {
    header("Location: index.php");
    exit();
}
?>


  <div class="container-scroller">

    <nav class="navbar-breadcrumb col-xl-12 col-12 d-flex flex-row p-0">
<h5>You are Welcome <span style="color:red"><?php echo $_SESSION['username'];?></span></h5>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav me-lg-2">
          <li class="nav-item ms-0">
            <h4 class="mb-0">User Dashboard</h4>
          </li>
		   <li class="nav-item ms-0">
            <h4 class="mb-0"><a href="resetPassword.php" style="text-decoration:none;color:white">Reset Password</a></h4>
          </li>
		   <li class="nav-item ms-0">
            <h4 class="mb-0"><a href="attendance.php" style="text-decoration:none;color:white">Attendance</a></h4>
          </li>
    
        </ul>
  
      </div>
    </nav>
    <div class="container-fluid page-body-wrapper">      

 
      <div class="main-panel">
        <div class="content-wrapper">

        <div class="card-body">
                 
				 <img src="welcome-images-for-ppt.jpg" class="img-fluid"/>
				 
				 
				 
				 
              </div>
         

        </div>
    

      </div>

    </div>
 
  </div>

  <script src="assets/js/dashboard.js"></script>
</body>

</html>

