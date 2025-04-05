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
 <?php
require 'db.php'; // File to handle DB connection

if(isset($_POST['sendMessage'])) {
    $subject = trim($_POST['subject']);
		     $messagefrom = trim($_POST['messagefrom']);
				      $messageto = trim($_POST['messageto']);
					     $message = trim($_POST['message']);
					      $user = trim($_POST['user']);
						   
				 
    $query = "INSERT INTO message (subject,messagefrom,messageto,message,user) VALUES (?,?,?,?,?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('sssss', $subject,$messagefrom,$messageto,$message,$user);
    $stmt->execute();
if($stmt == true){
        echo "<div class ='alert alert-success'><h3>Reply sent to user</h3></div>
			
	";
					}else{
						
					echo "<div class='alert alert-danger'>Failed to send message</div>";	
					}
 
}

?>
      <div class="main-panel">
        <div class="content-wrapper">

        <div class="card-body">
                 <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
               
                         <th>From</th>
						   <th>To</th>
                         <th>Message</th>
					 <th>Date</th>
					  <th>Action</th>
                   
                  </tr>
                  </thead>
                  <tbody>
				      <?php
require('db.php');
$view = "SELECT * FROM message";
$result = $conn->query($view);
if($result->num_rows > 0){
while($row = $result->fetch_array()){?>
                  <tr>
                
                    <td><?php echo $row['user']; ?></td>
					<td><?php echo $row['messageto']; ?></td>
                        <td><?php echo $row['message']; ?></td>
                           <td><?php echo $row['date']; ?></td>
                        
                    <td><a href="reply.php?id=<?php echo md5($row['id']);?>">Reply</a></td>
                    
                  </tr>
               
                        <?php
					
							}

						}else{
							echo " <div class='alert alert-success alert-dismissible'>
	       <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                     
             No certificate record found
                    </div>";
						}
					
				$conn->close();
				?>
                  </tbody>
          
                </table>
              </div>
         

        </div>
    

      </div>

    </div>
 
  </div>
 

  <script src="assets/js/dashboard.js"></script>
</body>
</html>

