<!DOCTYPE html>
<html>
<head>
	<title>Contact Form</title>
	<link rel="stylesheet" type="text/css" href="css/contact_us.css">
</head>
<body>
  <header>
    <a href="home.php" class="logo">
      Zen<span>Flix</span>
    </a>
  </header>
	<div class="container">
		<h1>Contact Us</h1>
		<form method="post" action="save_contact_form.php">
			<div class="row">
				<div class="col">
					<label for="name">Name</label>
					<input type="text" id="name" name="name" placeholder="Enter your name">
				</div>
				<div class="col">
					<label for="surname">Surname</label>
					<input type="text" id="surname" name="surname" placeholder="Enter your surname">
				</div>
			</div>
			<div class="row">
				<div class="col">
					<label for="email">Email</label>
					<input type="email" id="email" name="email" placeholder="Enter your email address">
				</div>
				<div class="col">
					<label for="phone">Phone</label>
					<input type="tel" id="phone" name="phone" placeholder="Enter your phone number">
				</div>
			</div>
			<div class="row">
				<label for="message">Message</label>
				<textarea id="message" name="message" placeholder="Enter your message"></textarea>
			</div>
			<div class="row">
				<button type="submit" href="home.php">Submit</button>
			</div>
		</form>
	</div>
</body>
</html>
