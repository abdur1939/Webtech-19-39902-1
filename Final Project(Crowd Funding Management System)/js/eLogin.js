function validateform(){ 
   

    var FullName= document.regForm.FullName.value;
    var Username= document.regForm.username.value;
    var Email= document.regForm.Email.value;
    var Gender= document.regForm.Gender.value;
    var Password=document.regForm.Password.value;
    var ConfirmPassword= document.regForm.ConfirmPassword.value;  


   
   
    if (FullName==null || FullName==""){  
        alert("Name can't be blank");  
        return false;  
      }

      if (Username==null || Username==""){  
        alert("Name can't be blank");  
        return false;  
      }
      else if (Email==null || Email==""){  
        alert("Email can't be blank");  
        return false;   
      }
     
      else if (Gender==null || Gender==""){  
        alert("Gender can't be blank");  
        return false;   
      }
      
      else if (Password==null || Password==""){  
        alert("Password can't be blank");  
        return false;   
      }
      else if (ConfirmPassword==null || ConfirmPassword==""){  
        alert("Conform Password can't be blank");  
        return false; 
      }





}


function checkname() {
    if (document.getElementById("FullName").value == "") {
          document.getElementById("FullNameErr").innerHTML = "Enter  Name";
          document.getElementById("FullNameErr").style.color = "red";
          document.getElementById("FullName").style.borderColor = "red";
    }else{
          document.getElementById("FullNameErr").innerHTML = "";
        document.getElementById("FullName").style.borderColor = "black";
    }
    
}

 function checkUname() {
			if (document.getElementById("Username").value == "") {
			  	document.getElementById("UsernameErr").innerHTML = "Enter a Username";
			  	document.getElementById("UsernameErr").style.color = "red";
			  	document.getElementById("Username").style.borderColor = "red";
			}else{
				if (!/^[a-zA-Z0-9-._]*$/.test(document.getElementById("Username").value)) {
					document.getElementById("UsernameErr").innerHTML = "For usernname only letters, numbers,  period and dash  allowed";
				  	document.getElementById("UsernameErr").style.color = "red";
				  	document.getElementById("Username").style.borderColor = "red";	
				}else if (document.getElementById("Username").value.length < 2) {
					document.getElementById("UsernameErr").innerHTML = "For user name at least 2 characters needed";
				  	document.getElementById("UsernameErr").style.color = "red";
				  	document.getElementById("Username").style.borderColor = "red";
				}else{
					document.getElementById("UsernameErr").innerHTML = "";
					document.getElementById("Username").style.borderColor = "black";
				}
			  	
			}
			
        }

        function checkEmail() {
            if (document.getElementById("Email").value == "") {
                  document.getElementById("EmailErr").innerHTML = "Enter a email";
                  document.getElementById("EmailErr").style.color = "red";
                  document.getElementById("Email").style.borderColor = "red";
            }else{
                if (!/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(document.getElementById("Email").value)) {
                      document.getElementById("EmailErr").innerHTML = "Enter a valid email";
                      document.getElementById("EmailErr").style.color = "red";
                      document.getElementById("Email").style.borderColor = "red";					
                }else{
                    document.getElementById("EmailErr").innerHTML = "";
                    document.getElementById("Email").style.borderColor = "black";
                }
                  
            }
            
        }


function checkPassword() {
    if (document.getElementById("Password").value == "") {
          document.getElementById("PassErr").innerHTML = "Enter password";
          document.getElementById("PassErr").style.color = "red";
          document.getElementById("Password").style.borderColor = "red";
    }else{
        if (document.getElementById("Password").value.length < 8) {
            document.getElementById("PassErr").innerHTML = "Password must not be less than eight (8) characters";
              document.getElementById("PassErr").style.color = "red";
              document.getElementById("Password").style.borderColor = "red";
        }else if (!document.getElementById("Password").value.match(/^(?=.*[!@$%]{1})[a-zA-Z0-9!@#$%^&*]*$/)) {
            document.getElementById("PassErr").innerHTML = "For password use one of the special characters (@, $, %)";
              document.getElementById("PassErr").style.color = "red";
              document.getElementById("Password").style.borderColor = "red";

        }else{
            document.getElementById("PassErr").innerHTML = "";
            document.getElementById("Password").style.borderColor = "black";
        }
          
    }
    
}

function checkConPassword() {
    if (document.getElementById("ConfirmPassword").value == "") {
          document.getElementById("ConPassErr").innerHTML = "Enter confirm password";
          document.getElementById("ConPassErr").style.color = "red";
          document.getElementById("ConfirmPassword").style.borderColor = "red";
    }else{
        if (document.getElementById("Password").value != document.getElementById("ConfirmPassword").value) {
            document.getElementById("ConPassErr").innerHTML = "Password doesn't match";
              document.getElementById("ConPassErr").style.color = "red";
              document.getElementById("ConfirmPassword").style.borderColor = "red";
        }else{
            document.getElementById("ConPassErr").innerHTML = "";
            document.getElementById("ConfirmPassword").style.borderColor = "black";
        }
              
    }	
    
}

function showUint(str) {
    if (str.length == 0) { 
      document.getElementById("UsernameErr").innerHTML = "";
      return;
    }else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("UsernameErr").innerHTML = this.responseText;
          }
        };
        xmlhttp.open("GET", "js/index.php?q=" + str, true);
        xmlhttp.send();
    }
}
