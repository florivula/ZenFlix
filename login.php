<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         header('location:admin_page.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['name'];
         header('location:user_page.php');

      }
     
   }else{
      $error[] = 'incorrect email or password!';
   }

};
?>

<?php

@include 'config.php';

if(isset($_POST['signup'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:login.php');
      }
   }

};


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login / Signup</title>

  <link rel="stylesheet" href="css/login.css" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
</head>

<body>
  <header class="header" data-header>
    <div class="container">
      <div class="overlay" data-overlay></div>
      <a href="home.php" class="logo">
        Zen<span>Flix</span>
      </a>
    </div>
  </header>

  <main>
    <div class="form-modal">
      <div class="form-toggle">
        <button id="login-toggle" onclick="toggleLogin()">log in</button>
        <button id="signup-toggle" onclick="toggleSignup()">sign up</button>
      </div>
      
      <div id="login-form">

      <p>
         <?php
            if (!isset($_COOKIE["id"]) OR !isset($_SESSION["id"]) ) {
             echo "<p>Please first log in to proceed.</p>";
            }
         ?>
       </p>

        <form action="" method="post">
          <input type="email" id="emailuser" name="email"  placeholder="Enter Email or Username" />
          <input type="password" id="lopassword" name="password" placeholder="Enter Password">
          <button class="button btn login" type="submit" name="submit" value="Sign In" onclick="validateLogin()">login</button>
          <p><a>Forgotten account</a></p>
          <p>Not a register user? <a onclick="toggleSignup()"> Create Account</a></p>
        </form>
      </div>

      <div id="signup-form">

      <p>
         <?php
            if (!isset($_COOKIE["id"]) OR !isset($_SESSION["id"]) ) {
             echo "Please first register to proceed.";
            }
         ?>
        </p>

        <form action="" method="post">
          <input type="email" id="email" name="email" placeholder="Enter your email" />
          <input type="text" id="username" name="name" placeholder="Choose username" />
          <input type="password" id="supassword" name="password" placeholder="Create password" />
          <input type="password" name="cpassword" placeholder="Repeat password" />
          <select name="user_type">
            <option value="user">user</option>
            <option value="admin">admin</option>
          </select>
          <button class="button btn signup "type="submit" name="signup" value="Sign Up" onclick="validateSignUp()">create account</button>
          <p>
            Clicking <strong>create account</strong> means that you are agreeing
            to our <a>terms of services.</a>
          </p>
        </form>
      </div>
    </div>
  </main>

  <script src="javascript/script.js"></script>

</body>

</html>