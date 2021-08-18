function validateform(){  
    var email=document.login.email.value;  
    var password=document.login.password.value;  

    if (email==null || email==""){  
      alert("Username can't be blank");  
      return false;  
    }else if (password==null || password==""){  
      alert("Password can't be blank");  
      return false;   
    }  

}

function checkEmail() {
    if (document.getElementById("email").value == "") {
          document.getElementById("emailErr").innerHTML = "Enter Email";
          document.getElementById("emailErr").style.color = "red";
          document.getElementById("email").style.borderColor = "red";
    }else{
          document.getElementById("unameErr").innerHTML = "";
        document.getElementById("uname").style.borderColor = "black";
    }
    
}
function checkPass(){
    if (document.getElementById("password").value == "") {
          document.getElementById("passErr").innerHTML = "Enter a password";
          document.getElementById("passErr").style.color = "red";
          document.getElementById("password").style.borderColor = "red";
    }
    else{
        document.getElementById("passErr").innerHTML = "";
        document.getElementById("password").style.borderColor = "black";
    }
}
