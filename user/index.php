<?php
	session_start();

error_reporting(1);
require_once('../inc/config/constant.php');

$username=$_SESSION['username'];
$sql = "select * from user where username='$username'"; 
$result = $conn->query($sql);
$rowaccess= mysqli_fetch_array($result);


if(isset($_POST['btnupdate']))
{

$phone = $_POST['txtphone'];
$fullname = $_POST['txtfullname'];

$sql = " update user set fullname='$fullname',phone='$phone' where username='$username'";
if (mysqli_query($conn, $sql)) {

header( "refresh:2;url= index.php" );
$message = ' <div class="alert alert-success">Update was successfull</div> ';
//header("Location: index.php");

}else{
$message = ' <div class="alert alert-danger">Editing Was Not Successful</div> ';

}
}
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from brandio.io/envato/iofrm/html/login15.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 May 2022 19:01:51 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Update Student Record| Design and Implementation of a Product Expiry Alert Management System</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-theme15.css">
	  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $favicon; ?>">

</head>
<body>
    <div class="form-body">
        <div class="website-logo">
            <a href="index.php">
                <div class="logos"></div>
          </a>
      </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <h3>&nbsp;</h3>
              </div>
            </div>
           <div class="form-holder">
                <div class="form-content">
                    <div class="form-items"><h4 ><?php echo $message; ?></h4>
                      <h3>Update User Records</h3>
                        <p>&nbsp;</p>
                        <p> </p>
                        <div class="page-links">
                            <a href="../index.php" class="active">Dashboard</a>
                        </div>
                       		             <form  action="" method="POST"  class="registration-form">
                            <input class="form-control" type="text" name="txtfullname" value="<?php echo $rowaccess['fullName']; ?>" required>
                            <input class="form-control" type="text" name="txtphone" value="<?php echo $rowaccess['phone']; ?>" required>
                        
                            <div class="form-button">
                                <button id="submit" name="btnupdate" type="submit" class="ibtn">Update</button> 
                            </div>
                        </form>
                        
                    </div>
                </div>
          </div>
        </div>
    </div>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>

<!-- Mirrored from brandio.io/envato/iofrm/html/login15.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 May 2022 19:01:53 GMT -->
</html>