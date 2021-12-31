<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheets/bootstrap.css">
    <link rel="stylesheet" href="stylesheets/style.css?v=<?php echo time(); ?>">
    <script src="js/bootstrap.min.js"></script>
    <title>Home</title>
</head>
<style>
#slider .carousel-item img {
    object-fit: cover;
    object-position: center;
    height: 50vh;
    width: 40vw;
    overflow: hidden;
}

.carousel-inner {
    border-radius: 2%
}

@media(min-width: 768px) {
    main {
        margin-left: 15%;
        margin-right: 15%;
    }

    #welcome {
        padding-left: 3%;
    }

    .main-text {
        padding-right: 3%;
    }
}

@media(max-width: 768px) {
    main {
        margin-left: 0%;
        margin-right: 0%;
    }

    p {
        text-align: center;
    }

    .title {
        text-align: center;
        margin: 0;
        padding: 0;
    }

    .flex-container {
        flex-direction: column;
        justify-content: center;
    }

    .flex-child {
        justify-content: center;
    }

    #welcome {
        padding-left: 0;
    }

    .main-text {
        padding-right: 0;
    }
}

.flex-container-nav {
    display: flex;
}

.flex-child {
    flex: 1;
}

.ireland {
    width: 5vw;
    height: 5vh;
}
</style>

<body class="bg-grey">
    <?php require 'html/loginbar.html'; ?>
    <br>
    <main class="bg-grey">
        <div class="flex-child">
            <h1 class="title"><strong>Logmas</strong> Ltd.</h1>
        </div>
        <br>
        <nav class="bg-white">
            <?php require 'html/homenav.html'; ?>
        </nav>
        <section class="bg-white">
            <br>
            <div id="welcome" class="title bg-white">
                <h2>Welcome to our online store</h2>
            </div>
            <div class="flex-container bg-white">
                <div class="flex-child">
                    <p class="main-text">Did you know that buying christmas decorations has never been easier.
                        Save yourself all the hassle of shopping for new christmas decorations by doing all of your
                        shopping with us.</p>
                    <br>
                    <p class="main-text">We package all of our products using <strong>100% recyclable</strong>
                        papers and plastics. We enjoy doing our bit to help the planet.</p>
                    <br>
                    <p class="main-text">We strive to supply all of our customers with the best quality
                        decorations this Christmas. We offer a <strong>2 year warranty</strong> on all of our products.
                        Please read the <a class="highlight" href="about.php">terms and conditions</a>. </p>
                </div>
                <div id="slider" class="flex-child carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#slider" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#slider" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#slider" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/Christmas-chocolate-log.jpg" class="d-block w-100" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="images/close-up-candle.jpg" class="d-block w-100" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="images/christmas-cards-6.jpg" class="d-block w-100" alt="">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#slider" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#slider" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            </div>
        </section>
        <footer class="bg-dark">
            <?php require "html/foot.html"?>
        </footer>
    </main>
</body>

</html>