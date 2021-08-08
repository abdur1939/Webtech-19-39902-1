<?php 
session_start();
require_once 'model/model.php';

if(isset($_POST["submit"]))  
 {  
      if (isset($_POST["submit"])) {
            $data['uname'] = $_POST['uname'];
            $data['email'] = $_POST['email'];
            $data['phone'] = $_POST['phone'];
            $data['address'] = $_POST['address'];  
           // $data['gender'] = $_POST['gender'];    
           // $data['dateOfBirth'] = $_POST['dateOfBirth'];         

            if (updateinfo($_SESSION['uname'], $data)) {
              echo 'Successfully updated!!';
            }
       
            }
             else {
              echo 'You are not allowed to access this page.';
            }

            
  }
?>