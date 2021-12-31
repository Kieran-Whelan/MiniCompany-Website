<?php
$msg ="";
$msgClass ="danger";
$name = "";
$password = "";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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

    #d1 {
        padding-left: 20%;
        padding-right: 20%;
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
    <br>
    <main class="bg-grey">
        <div class="flex-child">
            <h1 class="title" style="text-align:center;"><strong>Logmas</strong> Ltd.</h1>
        </div>
        <br>
        <div id="d1" class="container bg-white" style="justify-content:center; text-align:center;">
            <div style="text-align:center;">
                <br>
                <h2 class="title">Login</h2>
                <br>
            </div>

            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?> " class="c-form">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control"
                        value="<?php echo isset($_POST['username']) ? $name : ''; ?>">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control"
                        value="<?php echo isset($_POST['password']) ? $password : ''; ?>">
                </div>
                <br>
                <button type="submit" name="submit" class="btn btn-primary">Login</button>
                <br>
            </form>
            <br>
            <p>Back to <a href="index.php">home</a></p>
            <br>
        </div>

    </main>
</body>



</html>