<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheets/bootstrap.css">
    <link rel="stylesheet" href="stylesheets/style.css?v=<?php echo time(); ?>">
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
    border-width: 1px;
    border-radius: 5%;
    border-style: solid;
}
@media(max-width: 768px) {
  .flex-container {
    flex-direction: column-reverse;
  }
} 
</style>
<body>
    <header>
      <nav><?php require 'html/nav.html'; ?></nav>
    </header>
      <main class="bg-plain">
        <div class="flex-container">
        <div id="slider" class="flex-child carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#slider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#slider" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#slider" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images/Christmas-chocolate-log.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="images/close-up-candle.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="images/christmas-cards-6.jpg" class="d-block w-100" alt="...">
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
        <div class="flex-child center text">
            <h2><strong>Check out our new range of Christmas decorations!</strong></h2>
          </div>
        </div>
        <div class="center text">
        </div>
            </main>
            <footer>
                <?php require 'html/foot.html'; ?>
            </footer>
        </body>
        </html>