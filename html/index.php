<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Basic-Tennis</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
    <link href="css/animate.css" rel="stylesheet"/>
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img class="logo" src="img/logo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Tennislessen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Tarieven</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Bespanservice</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Privelessen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!--- Image Slider -->
<div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/Banner.jpg">
            <div class="carousel-caption">
                <div class="os-animation animated zoomIn">
                    <h1 class="display-2">BASIC-Tennis</h1>
                    <h3>Voor een betere basis</h3>
                    <button type="button" class="btn btn-outline-light btn-lg">Contact</button>
                    <a href="https://tsoverhout.planmysport.com/portal/page/pmsportal30/TennisSquashOverhout/Tennis/Tennislessen" target="_blank" class="btn btn-primary btn-lg">INSCHRIJVEN</a>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/Banner1.jpg">
            <div class="carousel-caption">
                <div class="os-animation animated zoomIn">
                    <h1 class="display-2">BASIC-Tennis</h1>
                    <h3>Voor een betere basis</h3>
                    <button type="button" class="btn btn-outline-light btn-lg">Contact</button>
                    <a href="https://tsoverhout.planmysport.com/portal/page/pmsportal30/TennisSquashOverhout/Tennis/Tennislessen" target="_blank" class="btn btn-primary btn-lg">INSCHRIJVEN</a>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/Banner2.jpg">
            <div class="carousel-caption">
                <div class="os-animation animated zoomIn">
                    <h1 class="display-2">BASIC-Tennis</h1>
                    <h3>Voor een betere basis</h3>
                    <button type="button" class="btn btn-outline-light btn-lg">Contact</button>
                    <a href="https://tsoverhout.planmysport.com/portal/page/pmsportal30/TennisSquashOverhout/Tennis/Tennislessen" target="_blank" class="btn btn-primary btn-lg">INSCHRIJVEN</a>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<!--- Jumbotron -->
<div class="container-fluid">
    <div class="row jumbotron">
        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
            <p class="lead">A web hosting service allows individuals and organizations to make their website accessible via the World Wide Web.</p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
            <a href="#"><button class="btn btn-outline-secondary btn-lg">Web Hosting</button></a>
        </div>
    </div>
</div>

<!--- Welcome Section -->
<div class="container-fluid padding">
    <div class="row welcome text-center">
        <div class="col-12">
            <h1 class="display-4">Build with ease.</h1>
        </div>
        <hr>
        <div class="col-12">
            <p class="lead">Welcome to my Bootstrap 4 website tutorial! Bootstrap is a free and open-source front-end library with HTML and CSS based designs.</p>
        </div>
    </div>
</div>

<!--- Three Column Section -->
<div class="container-fluid padding">
    <div class="row text-center padding">
        <div class="col-xs-12 col-sm-6 col-md-4">
            <i class="fas fa-code"></i>
            <h3>HTML5</h3>
            <p>Built with the latest version of HTML, HTML5.</p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <i class="fas fa-bold"></i>
            <h3>BOOTSTRAP</h3>
            <p>Built with the latest version of Bootstrap, Bootstrap 4.</p>
        </div>
        <div class="col-sm-12 col-md-4">
            <i class="fab fa-css3"></i>
            <h3>CSS3</h3>
            <p>Built with the latest version of CSS, CSS3.</p>
        </div>
    </div>
    <hr class="my4">
</div>

<!--- Two Column Section -->
<div class="container-fluid padding">
    <div class="row padding">
        <div class="col-lg-6">
            <h2>If you build it...</h2>
            <p>The columns will automatically stack on top of each other when the screen is less than 576px wide.</p>
            <p>Resize the browser window to see the effect. Responsive web design has become more important as the amount
                of mobile traffic now accounts for more than half of total internet traffic.</p>
            <p>It can also display the web page differently depending on the screen size or viewing device.</p>
            <br />
            <a href="#" class="btn btn-primary btn-lg">Learn More</a>
        </div>
        <div class="col-lg-6">
            <img src="img/desk.png" class="img-fluid">
        </div>
    </div>
</div>

<hr class="my-4">

<!--- Fixed background -->
<figure>
    <div class="fixed-wrap">
        <div id="fixed">

        </div>
    </div>
</figure>


<!--- Emoji Section -->
<button class="fun" data-toggle="collapse" data-target="#emoji">Click for fun.</button>
<div id="emoji" class="collapse ">
    <div class="container-fluid padding">
        <div class="row text-center">
            <div class="col-sm-6 col-md-3">
                <img class="gif" src="img/gif/panda.gif">
            </div>
            <div class="col-sm-6 col-md-3">
                <img class="gif" src="img/gif/poo.gif">
            </div>
            <div class="col-sm-6 col-md-3">
                <img class="gif" src="img/gif/unicorn.gif">
            </div>
            <div class="col-sm-6 col-md-3">
                <img class="gif" src="img/gif/chicken.gif">
            </div>
        </div>
    </div>
</div>

<!--- Meet the team -->
<div class="container-fluid padding">
    <div class="row welcome text-center">
        <div class="col-12">
            <h1 class="display-4">Meet the Team</h1>
        </div>
        <hr>
    </div>
</div>


<!--- Cards -->
<div class="container-fluid padding">
    <div class="row padding">
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="img/team1.png">
                <div class="card-body">
                    <h4 class="card-title">John Doe</h4>
                    <p class="card-text">John is an Internet entrepreneur with almost 20 years of experience.</p>
                    <a href="#" class="btn btn-outline-secondary">See Profile</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="img/team2.png">
                <div class="card-body">
                    <h4 class="card-title">Mary Jo</h4>
                    <p class="card-text">Mary is a designer with almost 10 years of digital design experience.</p>
                    <a href="#" class="btn btn-outline-secondary">See Profile</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="img/team3.png">
                <div class="card-body">
                    <h4 class="card-title">Phil Ho</h4>
                    <p class="card-text">Phil is an developer with over 5 years of development experience.</p>
                    <a href="#" class="btn btn-outline-secondary">See Profile</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!--- Two Column Section -->
<div class="container-fluid padding">
    <div class="row padding">
        <div class="col-lg-6">
            <h2>Our Philosophy</h2>
            <p>We know that greatness in a disruptive era requires bold ambition, curious talent and a culture that believes we're smarter together.</p>
            <p>We approach every challenge holistically, with best-in-class expertise in data, creativity, media, technology, search, social and more. We call
                this Alchemy. It has the power to build our clients' brands and transform their business. And while it may seem like magic, we've got it down to
                a science.</p>
            <br>
        </div>
        <div class="col-lg-6 ">
            <img src="img/apple.png" class="img-fluid rounded">
        </div>
    </div>
    <hr class="my-4">
</div>

<!--- Connect -->
<div class="container-fluid padding">
    <div class="row text-center padding">
        <div class="col-12">
            <h2>Connect</h2>
        </div>
        <div class="col-12 social padding">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-google-plus-g"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
    </div>
</div>

<!--- Footer -->
<footer>
    <div class="container-fluid padding">
        <div class="row text-center">
            <div class="col-md-4">
                <img src="img/w3newbie.png">
                <hr class="light">
                <p>555-555-555</p>
                <p>email@myemail.com</p>
                <p>100 street name</p>
                <p>City, State, 00000</p>
            </div>
            <div class="col-md-4">
                <hr class="light">
                <h5>Our Hours</h5>
                <hr class="light">
                <p>Monday: 9:00 - 17:00</p>
                <p>Saturday: 10:00 - 16:00</p>
                <p>Sunday: closed</p>
            </div>
            <div class="col-md-4">
                <hr class="light">
                <h5>Service Area</h5>
                <hr class="light">
                <p>City, State, 00000</p>
                <p>City, State, 00000</p>
                <p>City, State, 00000</p>
                <p>City, State, 00000</p>
            </div>
            <div class="col-12">
                <hr class="light-100">
                <h5>&copy; Milou Bitter ~ 15-09-2018</h5>
            </div>
        </div>
    </div>
</footer>

</body>
</html>













