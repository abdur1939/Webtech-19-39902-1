<html>
<head>
<style>
* {
  box-sizing: border-box;
}

.row {
  display: flex;
}

.column {
  flex: 50%;
  padding: 10px;
  height: 50%; 
}
</style>
</head>
<body>



<span style = "display:inline-block; width:100%;text-align:left; height: 60%;">


<?php 
require_once ("controller/Change Password.php");

if (isset($_SESSION['uname'])) {
	
	echo '<div class="row">';
	  echo '<span style = "display:inline-block; width:36%; height:100%; text-align:left">';
	  echo '<div class="column" >';
	     include 'Account.php';
	  echo '</div>';
	  echo '</span>';
	  echo '<div class="column" >';
	  echo '<form method= "post"';
	  echo '<b>CHANGE PASSWORD </b><br><br>';
    echo '<span style ="color:red"';
     if(isset($error))  
        {      
          echo '<span style ="color:red">';
          echo $error; 
          echo '</span>';
 
        }  
    echo '</span>';
    echo '<br><br><form method="post" >';
      echo '<label style = "display:inline-block; width:160px;text-align:right;">Current Password : </label>';
      echo '<input type="Password" name="currentPassword" class="form-control" /><br /><br>';
      echo '<label style = "display:inline-block; width:160px;text-align:right;">New Password : </label>';
      echo '<input type="Password" name="newPassword" class="form-control" /><br /><br>';
      echo '<label style = "display:inline-block; width:160px;text-align:right;">Retype New Password : </label>';
      echo '<input type="Password" name="reNewPassword" class="form-control" /><br /><br>';
      echo '<br>';
      echo '<span style = "display:inline-block; width:335px;text-align:right;"><input type="submit" value="Submit" name="submit"> </span><br>';
      if(isset($message))  
                     {  
                          echo $message;  
                     }  
    echo '</form>';
	  echo '</div>';
	echo '</div>';
	

}
else{
		$msg="error";
		header("location:Login.php");
		// echo "<script>location.href='login.php'</script>";
	}

 ?>
</span>
<?php include 'Footer.php';?>

</body>
</html>