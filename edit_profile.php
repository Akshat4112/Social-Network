<?php
session_start();
include 'includes/connection.php';
include 'functions/functions.php';
$user= $_SESSION['user_email'];
$get_user = "select * from users where user_email='$user'";
$run_user = mysqli_query($con, $get_user);
$row = mysqli_fetch_array($run_user);
$user_id = $row['user_id'];
$user_name = $row['user_name'];
$user_country = $row['user_country'];
$user_image = $row['user_image'];
$register_date = $row['register_date'];
$last_login = $row['last_login'];
?>
<!DOCTYPE html>
<html>
    <head>
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.indigo-blue.min.css">
        <link rel="stylesheet" href="css/cssback.css" media="all">
        <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Inconsolata|Slabo+27px" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Antic+Didone" rel="stylesheet">
        <script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>        
        <meta charset="UTF-8">
        <title>Html Cards</title>
        <style>
            .card {
                height: 150px;
                width: 200px;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    border-radius: 5px; /* 5px rounded corners */
}

/* Add rounded corners to the top left and the top right corner of the image */
img {
    border-radius: 5px 5px 0 0;
}

/* On mouse-over, add a deeper shadow */
.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

/* Add some padding inside the card container */
.container {
    padding: 2px 16px;
}
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
                            <li><a href="edit_profile.php?user_id=<?php echo $user_id ?>" class="btn btn-default mdl-color-text--grey-50 mdl-color--blue-900 boxmargin">Edit Profile</a>
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
            <div class="row"><br>
<div class="card col-sm-2 col-md-offset-1">
    <a href="profile_personal.php"><img src="images/img_avatar.png" alt="Avatar" style="width:100%;height: 100%;"></a>
  <div class="container">
    <h4><b>Personal Details</b></h4> 
    <p></p> 
  </div>
</div>
        
        <div class="card col-md-offset-1 col-sm-4">
    <a href="profile_password.php"><img src="images/img_avatar.png" alt="Avatar" style="width:100%;height: 100%;"></a>
  <div class="container">
    <h4><b>Change Password</b></h4> 
    <p></p> 
  </div>
        </div></div></div>
        <div class="container-fluid">
            <div class="row"><br><br>
        
        <div class="card col-sm-2 col-md-offset-1">
            <a href="profile_education.php"><img src="images/img_avatar.png" alt="Avatar" style="width:100%;height: 100%;"></a>
  <div class="container">
    <h4><b>Education  Details</b></h4> 
    <p></p> 
  </div>
        </div>
        
        <div class="card col-sm-4 col-sm-offset-1">
            <a href="profile_location.php"><img src="images/img_avatar.png" alt="Avatar" style="width:100%;height: 100%;"></a>
  <div class="container">
    <h4><b>Contact Details</b></h4> 
    <p></p> 
  </div>
        </div></div></div>
        <div class="container-fluid">
            <div class="row"><br><br>
        
        <div class="card col-sm-2 col-md-offset-1">
            <a href="profile_summary.php"><img src="images/img_avatar.png" alt="Avatar" style="width:100%;height: 100%;"></a>
  <div class="container">
    <h4><b>Summary Details</b></h4> 
    <p></p> 
  </div>
</div><br>
</div><br>
</div>
</body>
</html>

<!--
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
                    
                    <!--<div class="navbar-header col-sm-4">
                        <a class="navbar-brand" href="home.php"><img src="images/p.jpg" height="30px" width="30px"></a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                  <!--  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <div class="col-sm-4">
                            <form class="navbar-form navbar-left" method="get" action="results.php">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="user_query" placeholder="Search">
                                </div>
                                <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent mdl-color--green-500" name="search">Search</button>
                            </form>
                        </div>
                        <ul class="nav nav-pills" role="tablist">
                            <li><a class="btn btn-default mdl-color--blue-900 mdl-color-text--grey-50  boxmargin" href="home.php">
                                    Home
                                </a>
                            </li>
                            <li><?php// echo '<a href="edit_profile.php?user_id=$user_id" class="btn btn-default mdl-color-text--grey-50 mdl-color--blue-900 boxmargin">Edit Profile</a>'; ?>
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
                        <button name="ch_pass" type="submit" class="mdl-button mdl-color-text--grey-50 mdl-color--green-500">Change</button>
                    </form>
                    <?php
                    //UpdatePassword();
                    ?>
                </div>
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
<?php
//echo '<br><br>';
//include 'template/footer.php';
?> -->