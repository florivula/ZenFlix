<?php
// konektimi me database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kontakt_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// kontrollimi i connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// marrja e dates nga form-a
$name = $_POST["name"];
$surname = $_POST["surname"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$message = $_POST["message"];

// pergatitja dhe ekzektumi i SQL query per te insertuar data ne database 
$stmt = $conn->prepare("INSERT INTO messages (name, surname, email, phone, message) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $name, $surname, $email, $phone, $message);
$stmt->execute();

// mbyllja e database connection dhe ri-direktimi i userit ne nje thank you page
$stmt->close();
$conn->close();

header("Location: thank_you.php");
exit();
?>
