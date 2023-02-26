<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZenFlix</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/slider.css">
    <link rel="shortcut icon" href="img/fav-icon.png" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <header>
        <div class="nav container">
            <a href="home.php" class="logo">
                Zen<span>Flix</span> 
            </a>
            <div class="navbar">
                <a href="#home" class="nav-link nav-active">
                    <span class="nav-link-title">Home</span>
                </a>
                <a href="#trending" class="nav-link">
                    <span class="nav-link-title">Trending</span>
                </a>
                <a href="#explore" class="nav-link">
                    <span class="nav-link-title">Explore</span>
                </a>
                <a href="pre_order.php" class="nav-link">
                    <span class="nav-link-title">Pre Order</span>
                </a>
                
            </div>
            <div class="search-box">
                <input type="search" id="search-input" placeholder="Search movie">
                <i class='bx bx-search'></i>
            </div>
            <div>
                <a href="login.php" class="nav-link">
                    <span class="nav-link-title">Login</span>
                </a>
            </div>
        </div>
        <div class="right-nav">
            <a href="news.php" class="nav-link">
                <span class="nav-link-title">News</span>
            </a>
            <a href="about_us.php" class="nav-link">
                <span class="nav-link-title">About Us</span>
            </a>
            <a href="contact_us.php" class="nav-link">
                <span class="nav-link-title">Contact</span>
            </a>
        </div>
    </header>
    <section class="home container" id="home">
        <img src="img/home-background.png" class="home-img">
        <div class="home-text">
            <h1 class="home-title">Scream</h1>
            <p>Releasing 14 January</p>
            <a href="https://www.youtube.com/watch?v=pQLb4yBwxvg" class="watch-btn" target="_blank">
                <i class='bx bx-right-arrow' ></i>
                <span>Watch the trailer</span>
            </a>
        </div>
        
    </section>
    <section class="popular container" id="trending">
        <div class="heading">
            <h2 class="heading-title">Trending Movies</h2>
        </div>
        <div class="slider">
            <img src="" id="imazhi">
            <p id="pershkrimi">Avatar:The Way of Water</p>
            <a href="https://youtu.be/o5F8MOz_IDw" id="watchTrailer" class="watch-trailer-btn">Watch Trailer</a>
        </div>
    </section>
    <section class="movies container" id="explore">
        <div class="heading">
            <h2 class="heading-title">TV Shows</h2>
        </div>
        <div class="movies-content">
            <!-- TV Show 1 -->
            <div class="movie-box">
                <img src="img/show-1.jpg" alt="" class="movie-box-img">
                <div class="box-text">
                    <h2 class="movie-title">Wednesday</h2>
                    <span class="movie-type">Comedy/Horror</span>
                    <a href="#" class="watch-btn play-btn">
                        <i class='bx bx-right-arrow' ></i>
                    </a>
                </div>
            </div>
            <!-- TV Show 2 -->
            <div class="movie-box">
                <img src="img/show-2.jpg" alt="" class="movie-box-img">
                <div class="box-text">
                    <h2 class="movie-title">The Sandman</h2>
                    <span class="movie-type">Drama/Horror</span>
                    <a href="#" class="watch-btn play-btn">
                        <i class='bx bx-right-arrow' ></i>
                    </a>
                </div>
            </div>
            <!-- TV Show 3 -->
            <div class="movie-box">
                <img src="img/show-3.jpg" alt="" class="movie-box-img">
                <div class="box-text">
                    <h2 class="movie-title">Emily in Paris</h2>
                    <span class="movie-type">Comedy/Drama</span>
                    <a href="#" class="watch-btn play-btn">
                        <i class='bx bx-right-arrow' ></i>
                    </a>
                </div>
            </div>
            <!-- TV Show 4 -->
            <div class="movie-box">
                <img src="img/show-4.jpg" alt="" class="movie-box-img">
                <div class="box-text">
                    <h2 class="movie-title">The Midnight Club</h2>
                    <span class="movie-type">Horror/Thriller</span>
                    <a href="#" class="watch-btn play-btn">
                        <i class='bx bx-right-arrow' ></i>
                    </a>
                </div>
            </div>
            <!-- TV Show 5 -->
            <div class="movie-box">
                <img src="img/show-5.jpg" alt="" class="movie-box-img">
                <div class="box-text">
                    <h2 class="movie-title">Stranger Things</h2>
                    <span class="movie-type">Horror/Supernatural</span>
                    <a href="#" class="watch-btn play-btn">
                        <i class='bx bx-right-arrow' ></i>
                    </a>
                </div>
            </div>
            <!-- TV Show 6 -->
            <div class="movie-box">
                <img src="img/show-6.jpg" alt="" class="movie-box-img">
                <div class="box-text">
                    <h2 class="movie-title">The Watcher</h2>
                    <span class="movie-type">Mystery/Thriller</span>
                    <a href="#" class="watch-btn play-btn">
                        <i class='bx bx-right-arrow' ></i>
                    </a>
                </div>
            </div>
            <!-- TV Show 7 -->
            <div class="movie-box">
                <img src="img/show-7.jpg" alt="" class="movie-box-img">
                <div class="box-text">
                    <h2 class="movie-title">Manifest</h2>
                    <span class="movie-type">Drama/Supernatural</span>
                    <a href="#" class="watch-btn play-btn">
                        <i class='bx bx-right-arrow' ></i>
                    </a>
                </div>
            </div>
            <!-- TV Show 8 -->
            <div class="movie-box">
                <img src="img/show-8.jpg" alt="" class="movie-box-img">
                <div class="box-text">
                    <h2 class="movie-title">Dahmer</h2>
                    <span class="movie-type">Thriller</span>
                    <a href="#" class="watch-btn play-btn">
                        <i class='bx bx-right-arrow' ></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <div class="next-page">
        <a href="#" class="next-btn">Next Page</a>
    </div>
    <div class="copyright">
        <p>Flori Vula Zani Lleshi</p>
    </div>
    <script src="javascript/script.js"></script>
    <script src="javascript/slider.js"></script>
</body>
</html>