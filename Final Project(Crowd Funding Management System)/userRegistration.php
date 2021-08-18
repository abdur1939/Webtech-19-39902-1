<?php
include 'dbconnection.php';



if(isset($_REQUEST['signup'])){
      if(($_REQUEST['name'] == "") || ($_REQUEST['username'] == "") || ($_REQUEST['email'] == "") || ($_REQUEST['gender'] == "") || ($_REQUEST['password'] == "")){
          $regmsg = '<div class="alert alert-warning mt-2" role="alert"> All Fields are Required </div>';
      }else{
            $ename=$_POST['name'];
            $eusername=$_POST['username'];
            $eemail=$_POST['email'];
            $egender=$_POST['gender'];
            $epassword=$_POST['password'];

            $sql = "insert into user(uName,uUsername,uEmail,uGender,uPassword)
            values('{$ename}','{$eusername}','{$eemail}','{$egender}','{$epassword}')";

            $result = mysqli_query($conn,$sql) or die("Sql unsuccessful");
            $regmsg = '<div class="alert alert-success mt-2" role="alert"> Account Succefully Created </div>';

      }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title></title>
  <link rel="stylesheet" href="css/manage.css">
   
</head>
<body>
    <div id="wrapper">
        <div id="header">
            <h1>User</h1>
        </div>
        
<div id="main-content">
    <h2 style="text-align:center;">User Registration</h2>
    <form name="regForm" class="post-form" action="" method="post">
        <!-- action=savedate.php controller/userRegistationSave.php -->
        <div class="form-group">
            <label>Full Name</label>
            <input  type="text" name="FullName" id="FullName" onkeyup="checkname()" onblur="checkname()" placeholder="FullName"> 
            <span id="FullNameErr"></span>   
        </div>
<div class="form-group">

        <label>Username</label>
        <input  type="text" name="Username" id="Username" onkeyup="checkUname()"  onblur=" checkUname()" placeholder="Username"> 
        
        <span id="UsernameErr"></span> 
           
</div>
        <div class="form-group">
        <label>Email</label>     
        <input class="textBox" type="text" name="Email" id="Email" onkeyup="checkEmail()" onblur="checkEmail()" placeholder="Email"> 
        <span id="EmailErr"></span>   
        
        </div>
      
         <div class="form-group">
            <label>Gender</label>
            <select name="gender">

                <option selected disabled>Select Gender</option>
                <option value="Male">Male</option> 
                <option value="Female">Female</option>                 

            </select>
        </div>


        <div class="form-group">
            <label>Password</label>
            <input class="textBox" type="Password" name="Password" id="Password" onkeyup="checkPassword()" onblur="checkPassword()" placeholder="Password"> 
            <span id="PassErr"></span>   
        </div>
        <div class="form-group">
            <label>Confirm Password</label>
            <input class="textBox" type="Password" name="ConfirmPassword" id="ConfirmPassword" onkeyup="checkConPassword()" onblur="checkConPassword()" placeholder="Retype Password">
            <span id="ConPassErr"></span>   
        </div>


        <input class="submit" name="signup" style="width:80px;" type="submit" value="Submit"/>
        <input class="submit" style="width:80px;" type="reset" value="Reset"/>
        <?php if(isset($regmsg)) {echo $regmsg; } ?>
    </form>
</div>
</div>
<script type="text/javascript" src="js/userRegistration.js"></script>  
</body>
</html>
