<?php
session_start();
include 'includes/connection.php';
include 'functions/functions.php';
?>

<html>
    <head>
        <title>World's largest Political Network</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.indigo-blue.min.css">
        <link rel="stylesheet" href="css/cssback.css" media="all">
        <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Inconsolata|Slabo+27px" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Antic+Didone" rel="stylesheet">
        <script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>        
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="row">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header col-sm-4">
                        <a class="navbar-brand" href="index.php"><img src="images/p.jpg" height="30px" width="30px"></a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <div class="col-sm-4">
                            <form class="navbar-form navbar-left">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                </div>
                                <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent mdl-color--green-500">Search</button>
                            </form>
                        </div>
                        <ul class="nav nav-pills mdl-color--indigo-400" role="tablist">
                            <li><a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-color-text--grey-50 mdl-color--green-500">
      Home
    </a></li>
                            <li><a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-color-text--grey-50 mdl-color--green-500">
      Edit Profile
    </a></li>
    <li><a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-color-text--grey-50 mdl-color--green-500">
      Settings
    </a></li>
    <li><a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-color-text--grey-50 mdl-color--green-500">
      Logout
    </a></li>
                        </ul>
                    </div>
                </div>
        </nav>
        <div class="row">
            <div class="col-sm-3 col-sm-offset-1">
                <div class="img-rounded">
                    <img src="images/nar.jpg" alt="Profile" height="200" width="200">
                     
                    <div class="caption">
                        <h3><b><?php 
        $email=$_SESSION['user_email'];
        $query="select *from users where user_email='$email'";
        $run_query= mysqli_query($con,$query);
        if($run_query){
            $fname= mysqli_fetch_array($run_query);
            $firstname=$fname['user_name'];
            echo $firstname;
        }
         ?></b></h3>
                        <p><em>India</em></p>
                        <p><a href="#" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent mdl-color--green-500" role="button">My Posts</a></p>
                        <p><a href="#" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent mdl-color--green-500" role="button">Following</a></p>
                        <p><a href="#" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent mdl-color--green-500" role="button">Follower</a></p>
                    </div>

                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="img-rounded">
                        <form>
                            <div class="col-sm-4">
                                <label for="exampleTextarea">Write something great...</label>
                                <textarea class="form-control" id="exampleTextarea" rows="3"></textarea><br>
                                <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent mdl-color--green-500">Post</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>








      
        <?php 
        $email=$_SESSION['user_email'];
        $query="select *from users where user_email='$email'";
        $run_query= mysqli_query($con,$query);
        if($run_query){
            $fname= mysqli_fetch_array($run_query);
            $firstname=$fname['user_name'];
            echo $firstname;
        }
         ?>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="members.php">Members</a></li>
        </ul><br>
        <form method="get" action="results.php">
            <input type="text" name="user_query" placeholder="search a topic">
            <input type="submit" name="seacrh" value="Search">
        </form>
    <center><form action="home.php?id=<?php echo $user_id?>" method="post">
            <h2>What's in your mind</h2>
            <textarea rows="10" cols="50" name="content" placeholder="Write Something great..." required="required"></textarea><br><br>
        <input type="submit" value="Post to timeline" name="sub">
        </form>
    <?php
                    insertPost();
    ?>
        <h3>Most Recent Discussion</h3>
    <?php
get_posts();
    ?>
    </center>
        <?php
        // Common Styling for all users
        //get User Details
        $user = $_SESSION['user_email'];
        $get_user = "select * from users where user_email='$user'";
        $run_user = mysqli_query($con, $get_user);
        $row = mysqli_fetch_array($run_user);
        $user_id = $row['user_id'];
        $user_name = $row['user_name'];
        $user_country = $row['user_country'];
        $user_image = $row['user_image'];
        $register_date = $row['register_date'];
        $last_login = $row['last_login'];
        echo "<p><img src='user/user_images/$user_image' width='200px' height='200px'></p>
                <p>Name:<strong>$user_name</strong></p>
                <p>Country:<strong>$user_country</strong></p>
                <p>Register Date:$register_date</p>
                <p><a href='my_messages.php?user_id=$user_id'>My Messages</a></p>
                <p><a href='my_posts.php?user_id=$user_id'>MY Posts</a></p>
                <p><a href='edit_profile.php?user_id=$user_id'>Edit Profile</a></p>
                <p><a href='logout.php'>Logout</a></p>";
        //Styling for this information
        ?>
    </body>
</html>
