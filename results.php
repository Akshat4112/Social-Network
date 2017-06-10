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
        <style>
            .widthclass{
                height: 78px;
            }
            .boxmargin{
                margin-top: 20px;
                margin-left: 4px;
                margin-right: 4px;
            }
            .demo1-card-wide{
                height: 250px;
                width: 850px;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="row mdl-color--blue-800 widthclass">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header col-sm-3 col-md-offset-1">
                        <a class="navbar-brand" href="index.php"><img src="images/logo1.png" height="50px" width="50px"></a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse col-md-offset-7">
                        <div class="col-sm-3 boxmargin">
                            <a href="whatis.php"><button type="button" class="btn btn-default mdl-color--blue-900 mdl-color-text--grey-50">What Is Social</button></a>
                        </div>
                        <div class="col-sm-2  boxmargin">
                            <a href="index.php"><button type="button" class="btn btn-default mdl-color--blue-900 mdl-color-text--grey-50">Join Now</button></a>
                        </div>
                        <div class="col-sm-2  boxmargin">
                            <a href="index.php"><button type="button" class="btn btn-default mdl-color--blue-900 mdl-color-text--grey-50">Sign In</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-7  col-md-offset-2 demo1-card-wide mdl-card mdl-shadow--3dp"><br>
                    <?php
                    include 'includes/connection.php';
                    include 'functions/functions.php';
                    $x = SearchName();
                    $y=SearchCountry();
                    //$a = SearchCurrent();
                    //$b=SearchPast();
                    //$c = SearchEducation();
                    //$d=SearchSummary();
                    echo '<div class="mdl-color-text--blue-800"><b><h3><strong>' . print_r($x) . '</strong></h3></div>';
                    echo '<div class="mdl-color-text--blue-400"><b><h3>' . $y . '</h3></div><div class="col-sm-2 col-sm-offset-10"><a href=""><button type="button" class="btn btn-default mdl-color--blue-900 mdl-color-text--grey-50">View Profile</button></a></div>';
                    //echo '';
                    //  echo '<h3>' . $a . '</h3>';
                    //  echo '<h3>' . $b . '</h3>';
                    // echo '<h3>' . $c . '</h3>';
                    //  echo '<h3>' . $d . '</h3>';
                    ?>
                </div>
