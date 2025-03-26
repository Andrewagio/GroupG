<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>LOGIN PAGE | CHURCH MANAGEMENT SYSTEM</title>


 
  <link rel="stylesheet" href="assets/css/style.css">
 

</head>

<body >
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0"style="background: radial-gradient(circle, rgba(2,124,156,1) 0%, rgba(160,189,232,1) 100%);r">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-start py-5 px-4 px-sm-5" style="background:inherit">
              <div class="login-brand text-center">
                        <img src="user/xbaylogo.jpeg" alt="logo" width="100" class="shadow-light rounded-circle">
                    </div>
					<hr>
              <h3 style="color:white;text-align:center">Welcome to Our Church Attendance System</h3>
              <h6 class="fw-light text-center" style="color:white">Sign in to continue.</h6>
			  <hr>
			  
			  <?php

require('db.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['changePassword'])){

$email=$_POST['email'];
  $password = md5($_POST['password']);

$login="SELECT * FROM users WHERE email ='$email'";
$result_login=mysqli_query($conn, $login); 

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
$result=mysqli_query($conn,$change);
if($result==true){
	echo "     <div class='alert alert-success alert-dismissible'>
	       <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
      
               A password has been sent to your email. Thank you
                    </div>";
}
require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'cropsresearch.org';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               
    $mail->Username = 'sisu@cropsresearch.org';                 
    $mail->Password = '@sisu0553388214';                           
    $mail->SMTPSecure = 'ssl';                            
    $mail->Port = 465;                                    
    $mail->setFrom('sisu@cropsresearch.org', 'XBAY ALERTS');
    $mail->addAddress($_POST['email'], $_POST['email']);     
 
$body = '<p><br>Dear User,Your New Password is
. :<br>
Password: '.$_POST['password'].'<br> You are please adviced to change your password from your account dashboard<br> after logging in<br>Best Regards<br> Group G church
</p>';
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'NEW PASSWORD';
    $mail->Body    = $body;
    $mail->AltBody = strip_tags($body);

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
} 

}
		

}



	?>
			  
              <form method="POST" action="loginprocess.php" class="pt-3" style="color:black">
                <div class="form-group">
				<label>Username</label>
                  <input type="text" name="username" class="form-control form-control-lg"  placeholder="Username" required>
                </div>
                <div class="form-group">
				<label>Password</label>
                  <input type="password" name="password"class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" required>
                </div>
			  <div class="form-group">
                                    <div class="d-block">
                                        <label for="password" class="control-label">Password</label>
                                        <div class="float-right">
                                            <a href="user/auth-reset-password.php" class="text-small" style="color:white;text-align:right;float:right">
                                            Forgot Password?
                                            </a>
                                        </div>
                                    </div>
									<hr>
                <div class="mt-3 d-grid gap-2">
                  <button type="submit" class="btn btn-block btn-primary btn-lg fw-medium auth-form-btn">SIGN IN</button>
                </div>
          
           
                <div class="text-center mt-4 fw-light" style="color:white">
                  Don't have an account? <a href="register.php" class="" style="color:white">Register</a>
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
