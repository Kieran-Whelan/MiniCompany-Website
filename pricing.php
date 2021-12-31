<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="stylesheets/bootstrap.css">
    <link rel="stylesheet" href="stylesheets/style.css?v=<?php echo time(); ?>">
</head>
<style>
@media(min-width: 768px) {
    main {
        margin-left: 15%;
        margin-right: 15%;
    }

    #welcome {
        padding-left: 3%;
    }

    #text1 {
        padding-left: 1.5%;
        padding-right: 1.5%;
    }

    .main-text {
        padding-right: 3%;
    }

    .lower-nav {
        padding-left: 4.5%;
        padding-top: 3%;
        padding-bottom: 1.5%;
        font-size: 1.125rem;
    }

}

#a {
    padding-bottom: 1%;
}

.c-form {
    padding-left: 3%;
    padding-right: 3%;
}

@media(max-width: 768px) {
    .lower-nav {
        width: 0px;
        height: 0px;
    }

    #a {
        font-size: 0px;
    }

    #b {
        font-size: 0px;
    }

    .title {
        text-align: center;
        margin: 0;
        padding: 0;
    }

    #text1 {
        text-align: center;
        padding-left: 3%;
        padding-right: 3%;
        padding-bottom: 2%;
    }

    .flex-container {
        flex-direction: column;
    }
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
        <section class="bg-white">
            <nav class="bg-grey-light">
                <?php require 'html/nav.html'; ?>
                <div class="lower-nav">
                    <h2 id="a">Pricing</h2>
                    <p id="b"><a id="b" href="index.php" class="highlight">Home</a> / Pricing</p>
                </div>
            </nav>
            <br>
            <div class=flex-container>
                <div id="text1" class="flex-child">
                    <h3 class="title">Standard log - €8.00</h3>
                    <br>
                    <p>The standard log includes <strong>one candle</strong>, holly, berries and acorns.</p>
                </div>
                <div id="text1" class="flex-child">
                    <h3 class="title">Deluxe log - €10.00</h3>
                    <br>
                    <p>The deluxe log includes <strong>two candles</strong>, holly, berries and acorns.</p>
                </div>
            </div>
            <br>
        </section>
        <footer class="bg-dark">
            <?php require "html/foot.html"?>
        </footer>
    </main>
</body>



</html>