<!DOCTYPE html>
<html lang="en">

<!--   Tue, 07 Jan 2020 03:33:27 GMT -->
<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
<title>Church management system</title>

<!-- General CSS Files -->
<link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css">

<!-- CSS Libraries -->
<link rel="stylesheet" href="assets/modules/jqvmap/dist/jqvmap.min.css">
<link rel="stylesheet" href="assets/modules/summernote/summernote-bs4.css">
<link rel="stylesheet" href="assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css">
<link rel="stylesheet" href="assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css">

<!-- Template CSS -->
<link rel="stylesheet" href="assets/css/style.min.css">
<link rel="stylesheet" href="assets/css/components.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body class="layout-4" style="background:white">
<?php
session_start();
if(!isset($_SESSION['username'])){

	}
?>
<!-- Page Loader -->


<div id="app">
    <div class="main-wrapper main-wrapper-1">
    
        <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Register your presence</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     <div class="form-group">
	  <?php 
					include('connection.php');
					$me = $_SESSION['username'];
					$view = "SELECT * FROM users WHERE username = '$me'";
					$result = $db_link->query($view);
					$row = $result->fetch_assoc();
		
					?>
					<form method="POST" action="dashboard.php">
                                        <label>Name</label>
                                        <input type="text" name="name" class="form-control" value="<?php echo $row['name']; ?>" readonly>
										  <input type="hidden" name="memberID" value="<?php echo $row['memberID']; ?>" class="form-control">
                                    </div>
                                   <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" name="contact" value="<?php echo $row['contact']; ?>"class="form-control phone-number" readonly>
                                    </div>
									 <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email"value="<?php echo $row['email']; ?>"class="form-control phone-number" readonly>
                                    </div>
									 <div class="form-group">
                                        <label>Program attended</label>
                                      <select type="text" name="program" class="form-control">
									  <option>Please select program</option>
									    <option>Sunday Service</option>
										  <option>Youth Meeting</option>
										    <option>Mid Week</option>
											  <option>Women Ministry</option>
											    <option>Friday Miracle and Annointing Service</option>
									  </select>
                                    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="attend">Attend</button>
      </div>
    </div>
	</form>
  </div>
</div>
        <!-- Start app top navbar -->
<?php include("navbar.php");?>

        <!-- Start main left sidebar menu -->
   <?php include("sidebar.php");?>

        <!-- Start app main Content -->
        <div class="main-content">
            <section class="section">
            

                <div class="row row-deck">
                    <div class="col-md-12">
                        <div class="card"style="background:#fefbfb ">
                           <div class="card-header" style="">
                <h3 class="card-title" style="color:black">
            
Attendance History
                </h3>
             
              </div>
				        	<?php
require 'connection.php'; // File to handle DB connection

if(isset($_POST['attend'])) {
    $name = trim($_POST['name']);
		     $contact = trim($_POST['contact']);
				      $email = trim($_POST['email']);
					     $memberID = trim($_POST['memberID']);
					       $program = trim($_POST['program']);
						   
				 
    $query = "INSERT INTO attendance (name,contact,email,memberID,program) VALUES (?,?,?,?,?)";
    $stmt = $db_link->prepare($query);
    $stmt->bind_param('sssss', $name,$contact,$email,$memberID,$program);
    $stmt->execute();
if($stmt == true){
        echo "<div class ='alert alert-success'><h3>Attendace Marked Successfully</h3></div>
			
	";
					}else{
						
					echo "<div class='alert alert-danger'>Attendance Failed</div>";	
					}
 
}

?>
         		  <div class="row"style="">
			 
          				  <table class="table table-striped table-bordered">
						  <thead>
						  <th>Program</th>
						   <th>Date</th>
						  </thead>
						  <tbody>
										      <?php
require('connection.php');
$me = $_SESSION['username'];
$view = "SELECT * FROM users WHERE username = '$me'";
					$result = $db_link->query($view);
					$row = $result->fetch_assoc();
					
		$xbay = $row['memberID'];			
$view = "SELECT * FROM attendance WHERE memberID = '$xbay' ORDER BY id desc";
$result = $db_link->query($view);
if($result->num_rows > 0){
while($row = $result->fetch_array()){?>  
						  <tr>
						  <td><?php echo $row['program']; ?></td>
						  <td><?php echo $row['date']; ?></td>
						  </tr>
	     <?php
					
							}

						}else{
							echo " <div class='alert alert-success alert-dismissible'>
	       <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                     
             No records
                    </div>";
						}
					
				$db_link->close();
				?>
						  </tbody>
						  
						  
						  
						  
						  </table>
</div>
						
                    </div>
                 
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- Start app Footer part -->
    
    </div>
</div>

<!-- General JS Scripts -->
<script src="assets/bundles/lib.vendor.bundle.js"></script>
<script src="js/CodiePie.js"></script>

<!-- JS Libraies -->
<script src="assets/modules/jquery.sparkline.min.js"></script>
<script src="assets/modules/chart.min.js"></script>
<script src="assets/modules/owlcarousel2/dist/owl.carousel.min.js"></script>
<script src="assets/modules/summernote/summernote-bs4.js"></script>
<script src="assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

<!-- Page Specific JS File -->
<script src="js/page/index.js"></script>

<!-- Template JS File -->
<script src="js/scripts.js"></script>
<script src="js/custom.js"></script>
</body>

<!--   Tue, 07 Jan 2020 03:35:12 GMT -->
</html>