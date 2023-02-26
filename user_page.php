<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login.php');
}

?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "news_db";

// krijo connection
$conn = new mysqli($servername, $username, $password, $dbname);

// kontrollo connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// kontrollo nese forma eshte bere submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  // marrja e datas nga form-a
  $title = $_POST["title"];
  $photo_path = $_POST["photo_path"];
  $description = $_POST["description"];

  // sql statement prepare
  $sql = "INSERT INTO lajmet (title, photo_path, description) VALUES (?, ?, ?)";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("sss", $title, $photo_path, $description);

  // ekzekutimi i sql statement
  if ($stmt->execute()) {
    echo "News inserted successfully.";
  } else {
    echo "Error inserting news: " . $conn->error;
  }

  // mbyllja e statement
  $stmt->close();
}

// mbyllja e connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
	<title>User</title>
	<link rel="stylesheet" type="text/css" href="css/user_types.css">
</head>
<body>
	<header>
	<a href="home.php" class="logo">
      Zen<span>Flix</span>
    </a>
	</header>
	<h1>Welcome User!</h1>

	<form  action="" method="post">
		<h2>Add News</h2>
      	<label for="title">Title</label>
    	<input type="text" id="title" name="title" required>

      	<label for="photo_url">Photo URL</label>
      	<input type="text" id="photo_path" name="photo_path" required>

      	<label for="description">Description</label>
      	<textarea id="description" name="description" required></textarea>

      	<input type="submit" value="Add News">
    </form>
</body>
</html>
