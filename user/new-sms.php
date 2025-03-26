<!DOCTYPE html>
<html lang="en">

<!-- auth-login.html  Tue, 07 Jan 2020 03:39:47 GMT -->
<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
<title>CONFIRM SMS</title>

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


$contact=$_POST['contact'];
$CAGD_CODE=$_POST['CAGD_CODE'];
$password=$_POST['password'];
$body = $_POST['body'];
$change = "UPDATE profile SET password = '$password'  WHERE CAGD_CODE = '$CAGD_CODE' ";
$result=mysqli_query($db_link,$change);
if($result==true){
	echo "     <div class='alert alert-success alert-dismissible'>
	       <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
      
               A password has been sent to your contact $_POST[contact]. Thank you
                    </div>";
}
include_once (__DIR__.'/Zenoph/Notify/AutoLoader.php');
    
    use Zenoph\Notify\Enums\AuthModel;
    use Zenoph\Notify\Enums\TextMessageType;
    use Zenoph\Notify\Request\NotifyRequest;
    use Zenoph\Notify\Request\SMSRequest;
    
    try {
        /**
         * Replace [messaging_website_domain] with the website domain on which account exists
         * 
         * Eg, if website domain is thewebsite.com, then set host as: api.thewebsite.com
         * 
         * For further information, read the documentation for what you should set as the host
         */
        NotifyRequest::setHost('api.smsonlinegh.com');
        
    
        /* By default, HTTPS connection is used to send requests. If you want to disable the use of HTTPS
         * and rather use HTTP connection, comment out the call to useSecureConnection below below this comment
         * block and pass false as argument to the function call.
         * 
         * When testing on local machine on which https connection does not work, you may encounter 
         * request submit error with status value zero (0). If you want to use HTTPS connection on local machine, 
         * then you can instruct that the Certificate Authority file (cacert.pem) which accompanies the SDK be 
         * used to be able to use HTTPS from your local machine by setting the second argument of the function call to 'true'.
         * That is:
         *         NotifyRequest::useSecureConnection(true, true);
         * 
         * You can download the current Certificates Authority file (cacert.pem) file from https://curl.se/docs/caextract.html
         * to replace the one in the main root directory of the SDK. Please maintain the file name as cacert.pem
         */
        // NotifyRequest::useSecureConnection(true);
        
        // create request subject
        $smsReq = new SMSRequest();
        $smsReq->setAuthModel(AuthModel::API_KEY);
        $smsReq->setAuthApiKey('1f0e7a9f9a8466839499a0ffc81f6c82de3bf84fef10607e325380f27491ecc6');
        
        // set message properties
	
        $smsReq->setMessage($body);
        $smsReq->setMessageType(TextMessageType::TEXT);
        
        // message sender Id must be requested from account to be used
        $smsReq->setSender('CRI-SISU');
        
        // add message destinations. 
        $smsReq->adddestination($contact);
        
        // an array of destinations to be added
  
        
        // add phone numbers in an array
     
        
        // submit message for response
        $msgResp = $smsReq->submit();
    } 
    
    catch (\Exception $ex) {
        die ($ex->getMessage());
    }
	?>
                    </div>
					<div class="row">
		   <div class="col-12">
		    <br>
            <a href="sms-recovery.php" class="btn btn-primary btn-block">LOGIN HERE</a>
          </div>
          <!-- /.col -->
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