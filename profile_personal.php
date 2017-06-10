<?php
 include 'template/header_user.php';
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
                <div class="col-sm-5 col-md-offset-1 demo-card-wide mdl-card mdl-shadow--3dp"><br>
                    <form>
                        <h2>Personal Details</h2>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Website</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Website">
                        </div>
                        <div class="form-group">
                            <label for="exampleTextarea">Bio</label>
                            <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Enter Bio"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Change PP (Profile Photo)</label>
                            <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                        </div>
                        <button type="submit" class="mdl-button mdl-color-text--grey-50 mdl-color--green-500">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>