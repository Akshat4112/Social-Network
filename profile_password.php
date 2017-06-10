<?php

?>
<html>
    <head>
        <title>Edit Profile</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.indigo-blue.min.css">
        <link rel="stylesheet" href="css/cssback.css" media="all">
        <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Inconsolata|Slabo+27px" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Antic+Didone" rel="stylesheet">
        <script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>        
        <style>
            .boxmargin{
                margin-top: 9px;
                margin-right: 9px;
            }
            .widthclass{
                height: 60px;
            }
            .demo-card-wide.mdl-card {
                width: 550px;
                height: 580px;
            }
            .demo-card-wide > .mdl-card__title {
                color: #fff;
                height: 176px;
                background: url('../assets/demos/welcome_card.jpg') center / cover;
            }
            .demo-card-wide > .mdl-card__menu {
                color: #fff;
            }
            .demo1-card-wide.mdl-card {
                width: 550px;
                height: 370px;
            }
            .demo1-card-wide > .mdl-card__title {
                color: #fff;
                height: 176px;
                background: url('../assets/demos/welcome_card.jpg') center / cover;
            }
            .demo1-card-wide > .mdl-card__menu {
                color: #fff;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-default mdl-color--blue-800 widthclass">
            <div class="container-fluid">
                <div class="row">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    
                    <div class="navbar-header col-sm-4">
                        <a class="navbar-brand" href="home.php"><img src="images/p.jpg" height="30px" width="30px"></a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <div class="col-sm-4">
                            <form class="navbar-form navbar-left" method="get" action="results.php">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="user_query" placeholder="Search">
                                </div>
                                <button type="submit" class="btn btn-default mdl-color-text--grey-50 mdl-color--green-500" name="search">Search</button>
                            </form>
                        </div>
                        <ul class="nav nav-pills" role="tablist">
                            <li><a class="btn btn-default mdl-color--blue-900 mdl-color-text--grey-50  boxmargin" href="home.php">
                                    Home
                                </a>
                            </li>
                            <li><?php echo '<a href="edit_profile.php?user_id=$user_id" class="btn btn-default mdl-color-text--grey-50 mdl-color--blue-900 boxmargin">Edit Profile</a>'; ?>
                            </li>
                            <li><a href="logout.php" class="btn btn-default mdl-color-text--grey-50 mdl-color--blue-900 boxmargin">
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
        </nav>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-5  col-md-offset-1 demo1-card-wide mdl-card mdl-shadow--3dp"><br>
                    <form method="post" action="" name="form7">
                        <h2>Change Password</h2>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Old Password</label>
                            <input name="old_password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Old Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">New Password</label>
                            <input name="new_password" type="password" class="form-control" id="exampleInputPassword2" placeholder="New Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Confirm Password</label>
                            <input name="confirm_password" type="password" class="form-control" id="exampleInputPassword3" placeholder="Confirm Password">
                        </div>
                        <button name="ch_pass" type="submit" class="btn btn-default mdl-color-text--grey-50 mdl-color--green-500">Change</button>
                    </form>
                    <?php
                    UpdatePassword();
                    ?>
                </div></div></div></body></html>