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
        </ul>
      </nav>
 
      <div class="main-panel">
        <div class="content-wrapper">
 	
        <div class="card-body">
                  <?php 
					include('db.php');
					$id = $_GET['id'];
					$view = "SELECT * FROM message WHERE md5(id) = '$id'";
					$result = $conn->query($view);
					$row = $result->fetch_assoc();
					?>
				<form action="messages.php" method="POST">
						<input type="hidden" name="messagefrom" class="form-control" value="Admin" />
						<input type="hidden" name="user" class="form-control" value="Admin" />
				
						<div class="form-group">
                                    <label for="email">To</label>
                                    <input  type="text" class="form-control"  value="<?php echo $row['user'];?>" name="messageto" tabindex="1" required autofocus>
						
									
								</div>
						
						<div class="form-group">
                                    <label for="email">Subject</label>
                                    <input  type="text" class="form-control" value="<?php echo $row['subject'];?>"name="subject" tabindex="1" required autofocus>
						
	
								</div>
							
							
						<textarea  name="message" style="width:800px;height:400px">
						Please Write your Message to Admin here
						
						</textarea>
						</div>
						 <div class="form-group">
                                    <button type="submit" name="sendMessage" class="btn btn-primary btn-lg btn-block" tabindex="4">Send Message</button>
                                </div>
						</form>
				
				
				
				
				</form>
              </div>
         

        </div>
    

      </div>

    </div>
 
  </div>
 

  <script src="assets/js/dashboard.js"></script>
</body>
</html>

