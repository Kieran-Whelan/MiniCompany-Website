<?php
    // Message variables
    $msg = '';
    $msgClass = '';
    
    // Check For Submit
    if(filter_has_var(INPUT_POST, "submit")){

        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        if(!empty($email) && !empty($name) && !empty($message)){
            //passed
            //check email
            if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
                //failed
                $msg = 'Please use a valid email';
                $msgClass = 'alert-danger';
            } else {
                //passed
                //recipient Email
                $toEmail = 'whelankww05@gmail.com';
                $subject = "Contact Request From $name";
                $body = '<h2>Contact Request<h2>
                <h4>Name</h4><p>'.$name.'</p>
                <h4>Email</h4><p>'.$email.'</p>
                <h4>Message</h4><p>'.$message.'</p>
                ';

                //email headers
                $headers = "MIME-Version: 1.0" ."\r\n";
                $headers .="Content-Type:text/html;charset=UTF-8" ."
                \r\n";

                $headers .= "From: " .$name. "<".$email.">". "\r\n";

                if(mail($toEmail, $subject, $body, $headers)){
                    //email sent
                    $msg = 'Your email has been sent';
                    $msgClass = 'alert-success';
                } else {
                    $msg = 'Something went wrong while sending your email';
                    $msgClass = 'alert-danger';
                }
            }
        } else {
            //failed
            $msg = 'Please fill in all required fields';
            $msgClass = 'alert-danger';
        }
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
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

    .container {
        text-align: center;
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
                    <h2 id="a">Contact Us</h2>
                    <p id="b"><a id="b" href="index.php" class="highlight">Home</a> / Contact</p>
                </div>
            </nav>

            <br>
            <div id="text">
                <p>Want to give us some feedback? Use the form below to get in touch with us about your experience and
                    we’ll do our best to help out.</p>
            </div>
            <br>
            <div class="container">
                <?php if($msg != ''): ?>
                <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
                <?php endif; ?>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?> " class="c-form">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control"
                            value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control"
                            value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
                    </div>
                    <div class="form-group">
                        <label>Message</label>
                        <textarea name="message"
                            class="form-control"><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
                    </div>
                    <br>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <br>
        </section>
        <footer class="bg-dark">
            <?php require "html/foot.html"?>
        </footer>
    </main>
</body>

</html>