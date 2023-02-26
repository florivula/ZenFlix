<?php
//definojme variablat dhe i bejme set ne empty values
$name = $surname = $email = $phone = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $surname = test_input($_POST["surname"]);
  $email = test_input($_POST["email"]);
  $phone = test_input($_POST["phone"]);
  $message = test_input($_POST["message"]);
}

function test_input($data) {
  $data = trim($data);  // hek hapsirat (si metoda trim ne java)
  $data = stripslashes($data); // ben remove backslashes nga inputi i user
  $data = htmlspecialchars($data); // input nga useri kthehet ne HTML escaped code per arsye sigurie
  return $data;
}
?>