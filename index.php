<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=stylesheet type="text/css" href="css/animate.css">
    <link rel=stylesheet type="text/css" href="css/style.css">
    <script src=script.js defer> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
    <link rel="shortcut icon" href="img/favicon.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <title>B191210557</title>
</head>

<body>
    <!-- Navigation -->
    <nav class="navibar">
        <div class="brand-title">
            <p>Ethiopix</p>
        </div>
        <a href="#" class="toggle-button">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </a>
        <div class="navibar-links">
            <ul class=" navbar-nav mr-auto">
                <li><a href="index.php" class="links">Home</a></li>
                <li><a href="#" class="links js--scroll-to-aboutme">About Me</a></li>
                <li><a href="Resume files/Resume.php" class="links">Resume</a></li>
                <li><a href="My country files/mycountry.php" class="links">My country</a></li>
                <li><a href="heritage/heritage.php" class="links">Heritage</a></li>
            </ul>
        </div>

    </nav>
    <header>

        <div class="container-fluid padding">
            <div class="row welcome">
                <div class="typing"></div>
                <a href="Login files/login.php" class="btn btn-primary btn-lg" href="#">Log In</a>
                <a class="btn btn-default btn-lg" href="contact/contact.php">Contact</a>
            </div>
        </div>
    </header>
    <section class="about-me js--section-aboutme">
        <div class="container-fluid padding">
            <div class="col-12 padding heading">
                <h1>Who am I?</h1>
            </div>
            <div class="row padding">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="img/carousel1.jpg">
                            </div>
                            <div class="item">
                                <img src="img/carousel2.jpg">
                            </div>
                            <div class="item">
                                <img src="img/carousel3.jpg">
                            </div>
                        </div>
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 essay vl js--wp-1">
                    <h2>Don't read this...</h2><br>
                    <p>Hi there, This is Bedru from Ethiopia. Now that I got your attention, let me tell you more.
                        So back to my story, I'm a 21 year old international student in Turkey. Currently at my first year of univeristy doing a degree in computer engineering.</p>
                    <p>In my leisure time I like coding&#128187, playing video games&#127918 and sometimes painting&#127912.</p>
                    <p>Ping pong&#127955, photography&#128247 and last but not least archery &#127993 are my favorite activities.</p>
                    <br>
                    <a href="interests/interests.php" class="btn btn-info">My interests</a>
                </div>

            </div>

        </div>

    </section>

    <footer>
        <div class="row">
            <div class="col-lg-6">
                <ul class="footer-nav">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#">About me</a></li>
                    <li><a href="contact/contact.php">contact</a></li>
                </ul>
            </div>
            <div class="col-lg-6 col-md-6">
                <ul class="social-links">
                    <li><a href="https://t.me/Bedru7" class="third"><i class="fab fa-telegram"></i></a></li>
                    <li><a href="https://www.instagram.com/bedru397/" class="fourth"><i class="fab fa-instagram"></i></ion-icon></a></li>
                    <li><a href="https://www.facebook.com/bedru.umer.1/" class="first"><i class="fab fa-facebook-square"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="cpr col-12">
            <p>Copyright &copy; 2021 by Bedru. All rights reserved.</p>
        </div>
    </footer>



    <!-- JS scripts -->
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script src ="JS/jquery.waypoints.min.js"></script>
</body>


</html>