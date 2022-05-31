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
    <form class="post-form" action="controller/userRegistationSave.php" method="post">
        <!-- action=savedate.php -->
        <div class="form-group">
            <label>Full Name</label>
            <input type="text" name="name" />
        </div>


        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" />
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" />
        </div>
      
         <div class="form-group">
            <label>Gender</label>
            <select name="gender">

                <option value="0" selected disabled>Select Gender</option>
                <option value="1">Male</option> 
                <option value="2">Female</option>                 


            </select>
        </div>


        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" />
        </div>
        <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" name="cpassword" />
        </div>


        <input class="submit" style="width:80px;" type="submit" value="Submit"/>
        <input class="submit" style="width:80px;" type="reset" value="Reset"/>
    </form>
</div>
</div>
</body>
</html>
