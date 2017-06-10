
<html>
    <head>
        <title>World's largest Political Network</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.indigo-blue.min.css">
        <link rel="stylesheet" href="css/cssback.css">
        <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Inconsolata|Slabo+27px" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Antic+Didone" rel="stylesheet">
        <script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>
        <link rel="stylesheet" href="/styles/styles.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    <style>
        .widthclass{
            height: 75px;
        }
        .boxmargin{
            margin-top: 20px;
        }
        .demo4-card-wide{
            height: 300px;
        }

    </style>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="row mdl-color--blue-800 widthclass">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header col-sm-3 col-md-offset-1">
                        <a class="navbar-brand" href="index.php"><img src="images/p.jpg" height="50px" width="50px"></a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse">
                        <div class="col-sm-3">
                            <form class="navbar-form navbar-left boxmargin" method="post" action="results.php" name="form5">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="user_query" placeholder="Search">
                                </div>
                                <button type="submit" class="btn btn-default mdl-color--blue-900 mdl-color-text--grey-50" name="search">Search</button>
                            </form>
                        </div>
                    </div>
                </div></nav>
        <div class="mdl-color-text--red-A700">
            <br><br><h3><center>There were errors in your submission.Please correct the marekd fields below.</center></h3><br>
        </div>
        <form class="form-signin col-sm-4 col-sm-offset-4 demo4-card-wide mdl-card mdl-shadow--3dp" name="form1" action="login.php" method="post">
            <h2 class="form-signin-heading">Please sign in</h2>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="required" name="email">
            <div class="mdl-color-text--red-A700">
                Hmm, that's not the right password.Please try again or<a href="newpassword.php"> <u>Request a new one</u></a></div>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" name="pass" id="inputPassword" class="form-control" placeholder="Password" required="required"><br>
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Sign in</button><br>
            <center>Not a member . <a href="index.php">Join now</a></center>
        </form>
    </div>
</div>
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
<?php //echo 'Your Email or Password is Incorrect';
 //include 'template/footer.php';
?>