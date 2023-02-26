<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "news_db";

// krijimi i database connection
$conn = mysqli_connect($host, $username, $password, $dbname);

// kontroll se a ka qene connection successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// merr te gjitha rows prej tabeles lajmet
$sql = "SELECT * FROM lajmet";
$result = mysqli_query($conn, $sql);

// krijimi i nje array per te ruajtur lajme
$news_articles = array();

// kontroll nese eshte kthyer ndonje row
if (mysqli_num_rows($result) > 0) {
    // Loop through qdo rreshti dhe ruajtja e vlerave ne array
    while ($row = mysqli_fetch_assoc($result)) {
        $news_articles[] = array(
            "id" => $row["id"],
            "title" => $row["title"],
            "photo_path" => $row["photo_path"],
            "description" => $row["description"]
        );
    }
}

// mbyllja e database connection
mysqli_close($conn);

?>

<!DOCTYPE html>
<html>
  <head>
    <title>News</title>
    <link rel="stylesheet" type="text/css" href="css/news.css">
  </head>
  <body>
    <header>
      <a href="home.php" class="logo">
        Zen<span>Flix</span>
      </a>
      <h1>News</h1>
    </header>
    
    <main>

    <?php
    // Loop through ne qdo news article dhe shfaq titullin, photon, dhe description
    foreach ($news_articles as $news) {
        ?>
        <div class="article">
          <h2><?php echo $news["title"]; ?></h2>
          <img src="<?php echo $news["photo_path"]; ?>" alt="Movie Trailer">
          <p><?php echo $news["description"]; ?></p>
        </div>
        <?php
    }
    ?>
    </main>
    
    <footer>
      2023 ZenFlix News. All rights reserved. Flori Vula and Zani Lleshi.
    </footer>
  </body>
</html>
