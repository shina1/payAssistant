
<?php 
require_once('server.php');
  if (isset($_POST['submit'])) {
  	
      $email = $_POST['email'];
      $_SESSION['email'] = $email;

  	$checkQuery = "SELECT * FROM notify_tbl WHERE email='$email'";
  	$res_email = mysqli_query($conn, $checkQuery);

    if(mysqli_num_rows($res_email) > 0){
        $email_error = "Sorry... email already taken";
        header("Location:../index.php");	
  	}else{
        $insert = "INSERT INTO notify_tbl (email) VALUES('$email')";
           $results = mysqli_query($conn, $insert);
           header("Location:index.php");
           exit();
  	}
  }
?>