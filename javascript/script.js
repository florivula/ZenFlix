/*
 * login/signup form
 */
function toggleSignup() {
    document.getElementById("login-toggle").style.backgroundColor =
      "hsl(216, 22%, 18%)";
    document.getElementById("login-toggle").style.color = "#fff";
    document.getElementById("signup-toggle").style.backgroundColor =
      "hsl(192, 97%, 45%)";
    document.getElementById("signup-toggle").style.color = "#fff";
    document.getElementById("login-form").style.display = "none";
    document.getElementById("signup-form").style.display = "block";
  }
  
  function toggleLogin() {
    document.getElementById("login-toggle").style.backgroundColor =
      "hsl(192, 97%, 45%)";
    document.getElementById("login-toggle").style.color = "#fff";
    document.getElementById("signup-toggle").style.backgroundColor =
      "hsl(216, 22%, 18%)";
    document.getElementById("signup-toggle").style.color = "#fff";
    document.getElementById("signup-form").style.display = "none";
    document.getElementById("login-form").style.display = "block";
  }
  
  /*
   * validimi
   */
  function validateSignUp() {
    var email = document.getElementById("email").value;
    var username = document.getElementById("username").value;
    var password = document.getElementById("supassword").value;
  
    if(email == null || email == ""){
      alert("Email can't be blank.");
      return false;
    }
    if(!/^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(email)){
      alert("Email you typed is invalid!");
      return false;
    }
    if(username == null || username == "") {
      alert("Username can't be blank.");
      return false;
    }
    if(username.length < 6) {
      alert("Username must be atleast 6 characters.");
      return false;
    }
    if(password == null || password == ""){
      alert("Password can't be blank.");
      return false;
    }
    if(password.length < 8) {
      alert("Your password must contain atleast 8 characters.");
      return false;
    }
    if(password.search(/[a-z]/i) < 0) {
      alert("Your password must contain at least one letter.");
      return false;
    }
    if(password.search(/[0-9]/) < 0) {
      alert("Your password must contain at least one digit.");
      return false;
    }
    else{
      alert("Your account has been created successfully!");
      return true;
    }
  }
  
  function validateLogin(){
    var emailuser = document.getElementById("emailuser").value;
    var lopassword = document.getElementById("lopassword").value;
  
    if(emailuser == null || emailuser == "") {
      alert("Email/Username can't be blank.");
      return false;
    }
    if(lopassword == null || lopassword == ""){
      alert("Password can't be blank.");
      return false;
    }
  }