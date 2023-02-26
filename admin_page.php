<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login.php');
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	<link rel="stylesheet" type="text/css" href="css/user_types.css">
</head>

<body>
    <a href="home.php" class="return-home-button">Return back home</a>
	<h1>Welcome Admin!</h1>
	<h2>Users</h2>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>User Type</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			

         <?php
         $sql = "SELECT * FROM user_form";
			$result = $conn->query($sql);
         
            if ($result->num_rows > 0) {
               // output data-n e seciles kolone
               while($row = $result->fetch_assoc()) {
                   echo "<tr>";
                   echo "<td>" . $row["id"] . "</td>";
                   echo "<td>" . $row["name"] . "</td>";
                   echo "<td>" . $row["email"] . "</td>";
                   echo "<td>" . $row["user_type"] . "</td>";
                   echo "<td><form method='POST'>";
			          echo "<input type='hidden' name='id' value='" . $row["id"] . "'/>";
			          echo "<button type='submit' name='delete' onclick='location.reload()'>Delete</button>";
                      echo "<button type='submit' name='edit' onclick='location.reload()'>Edit</button>";
			          echo "</form></td>";
                   echo "</form>";
               }
           } else {
               echo "0 results";
           }

           //per me dasht mi fshi user
           if (isset($_POST['delete'])) {
				$id = $_POST['id'];

				$sql = "DELETE FROM user_form WHERE id=$id";
				if ($conn->query($sql) === TRUE) {
					echo "User deleted successfully";
				} else {
					echo "Error deleting user: " . $conn->error;
				}


            //per me dasht mi shtu nje user
            if (isset($_POST['add'])) {
               $name = $_POST['name'];
               $email = $_POST['email'];
               $pass = $_POST['password'];
               $user_type = $_POST['user_type'];
   
               $sql = "INSERT INTO user_form (name, email, password, user_type)
                     VALUES ('$name', '$email', '$pass', '$user_type')";
   
               if ($conn->query($sql) === TRUE) {
                   echo "User added successfully";
               } else {
                   echo "Error adding user: " . $conn->error;
               }
            }
			}

         ?>
		</tbody>
	</table>
    <h2>Messages</h2>
    <?php
// lidhja me databaz
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'kontakt_db';

$conn = mysqli_connect($host, $user, $password, $database);

// kontroll nese connection ka qene sucesful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// nxerrja e te gjitha vlerave nga messages
$sql = "SELECT * FROM messages";
$result = mysqli_query($conn, $sql);

// shfaqja e vlerave te messages ne forme tabelare
if (mysqli_num_rows($result) > 0) {
    echo "<table>";
    echo "<tr><th>Name</th><th>Surname</th><th>Email</th><th>Phone</th><th>Message</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['surname'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['phone'] . "</td>";
        echo "<td>" . $row['message'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No messages found.";
}

// mbyllja e databazes
mysqli_close($conn);
?>

</body>
</html>
