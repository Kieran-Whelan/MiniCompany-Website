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

    #text {
        padding-left: 4.25%;
        padding-right: 4.25%;
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

    #text {
        text-align: center;
        padding-left: 3%;
        padding-right: 3%;
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
                    <h2 id="a">About Us</h2>
                    <p id="b"><a id="b" href="index.php" class="highlight">Home</a> / About</p>
                </div>
            </nav>
            <br>
            <div id="text">
                <p>We are a TY mini company based in Dublin. All of our products are handmade from Irish raw materials.
                    All of our products are reasonably priced.
                </p>
                <br>
                <p>We will be selling and delivering our products until the 24th of December.</p>
            </div>
            <br>
        </section>
        <footer class="bg-dark">
            <?php require "html/foot.html"?>
        </footer>
    </main>
</body>



</html>