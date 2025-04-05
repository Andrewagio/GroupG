<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>ADMIN DASHBOARD</title>
  <link rel="stylesheet" href="assets/css/style.css">

</head>
<body style="margin:0px;padding:0px">
<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['access'] != 'Admin') {
    header("Location: index.php");
    exit();
}
?>
  <div class="container-scroller">
    <nav class="navbar-breadcrumb col-xl-12 col-12 d-flex flex-row p-0">
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav me-lg-2">
          <li class="nav-item ms-0">
            <h4 class="mb-0">Welcome:<?php echo $_SESSION['username']; ?></h4>
          </li>
    
        </ul>
      </div>
    </nav>
    <div class="container-fluid page-body-wrapper">      
      <nav class="sidebar sidebar-offcanvas" id="sidebar" style="background:radial-gradient(circle, rgba(68,165,208,1) 7%, rgba(4,65,62,1) 100%)">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="admin_dashboard.php" style="color:white">
              <i class="typcn typcn-device-desktop menu-icon"></i>
              <span class="menu-title">Dashboard</span>
             
            </a>
          </li>          
   <li class="nav-item">
            <a class="nav-link" href="attendance.php"style="color:white">
              <i class="typcn typcn-device-desktop menu-icon"></i>
              <span class="menu-title">Attendance</span>
             
            </a>
          </li> 
		    <li class="nav-item">
            <a class="nav-link" href="admin_dashboard.php"style="color:white">
              <i class="typcn typcn-device-desktop menu-icon"></i>
              <span class="menu-title">Users</span>
             
            </a>
          </li> 
		    <li class="nav-item">
            <a class="nav-link" href="messages.php"style="color:white">
              <i class="typcn typcn-device-desktop menu-icon"></i>
              <span class="menu-title">Messages</span>
             
            </a>
          </li> 
		    <li class="nav-item">
            <a class="nav-link" href="logout.php"style="color:white">
              <i class="typcn typcn-device-desktop menu-icon"></i>
              <span class="menu-title">Logout</span>
             
            </a>
          </li> 
        </ul>
      </nav>
 
      <div class="main-panel">
        <div class="content-wrapper">
                	<?php
require 'db.php'; // File to handle DB connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = trim($_POST['name']);
	 $username = trim($_POST['username']);
	     $password = md5($_POST['password']);
		 $confirm = md5($_POST['confirm']);
		     $contact = trim($_POST['contact']);
		
				      $email = trim($_POST['email']);
		
					       $access = trim($_POST['access']);
						   
					if($password == $confirm){ 
    $query = "INSERT INTO users (name,username,password,contact,email,access) VALUES (?,?,?,?,?,?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('ssssss', $name,$username,$password,$contact,$email,$access);
    $stmt->execute();

        echo "<div class ='alert alert-success'><h3>Registration Successful</h3>	<span><a href='index.php'>Login</a></span></div>
		<img class='img-fluid'src='registration-successful-account-successfully-created-concept_183665-1512.avif'/> 	
	";
					}else{
						
					echo "<div class='alert alert-danger'>Could not create account</div>";	
					}
 
}

?>
        <div class="card-body">
		<div class="alert alert-success">Create New Admin</div>
		<form action="newadmin.php" method="POST">
		
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
                  <input type="password" name="password" class="form-control form-control-lg"  placeholder="Password" required>
                </div>
				   <div class="form-group">
					<label>Password</label>
                  <input type="password" name="confirm" class="form-control form-control-lg"  placeholder="Password" required>
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
				<label>Access</label>
                  <select name="access"class="form-select form-select-lg form-select" required>
                    <option style="color:black">Please select</option>
                    <option style="color:black">User</option>
                    <option style="color:black"> Admin</option>
                    
                  </select>
                </div>
            
                <div class="mt-3 d-grid gap-2">
                  <button class="btn btn-block btn-primary btn-lg fw-medium auth-form-btn" name="register" type="submit">Create User</button>
                </div>
               
              </form>
              </div>
         

        </div>
    

      </div>

    </div>
 
  </div>
 

  <script src="assets/js/dashboard.js"></script>
</body>
</html>

