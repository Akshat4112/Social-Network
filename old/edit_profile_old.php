<?php
session_start();
include 'includes/connection.php';
include 'functions/functions.php';
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
?>
<html>
    <head>
        <title>Edit Profile</title>
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
                            <form class="navbar-form navbar-left" method="get" action="results.php">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="user_query" placeholder="Search">
                                </div>
                                <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent mdl-color--green-500" name="search">Search</button>
                            </form>
                        </div>
                        <ul class="nav nav-pills mdl-color--indigo-400" role="tablist">
                            <li><a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-color-text--grey-50 mdl-color--green-500" href="home.php">
                                    Home
                                </a></li>
                            <li><?php echo '<a href="edit_profile.php?user_id=$user_id" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-color-text--grey-50 mdl-color--green-500">Edit Profile</a>'; ?>
                            </li>
                            <li><a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-color-text--grey-50 mdl-color--green-500">
                                    Settings
                                </a></li>
                            <li><a href="logout.php" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-color-text--grey-50 mdl-color--green-500">
                                    Logout
                                </a></li>
                        </ul>
                    </div>
                </div>
        </nav>
        
        
        
        <h2>Edit Your Profile</h2>
        <form name="form2" method="post" action="">
            Name: <input type="text" name="u_name" placeholder="Enter your name" required="required" value="<?php echo $user_name?>"/><br>
            Password: <input type="password" name="u_pass" placeholder="Enter your Password" required="required"><br>
            Email: <input type="text" name="u_email" placeholder="Enter your email" required="required"><br>
            Country:<select name="u_country">
                <option>India</option>
                <option>America</option>
                <option>Nepal</option>
                <option>South Africa</option>
                <option>Russia</option>
            </select><br>
            Gender:<select name="u_gender" required="required">
                <option>Male</option>
                <option>Female</option>
                <option>Other</option>
            </select><br>
            Photo :<input type="file" name="user_image"><br>
            Birthday :<input type="date" name="u_birthday"><br>
            <button name="update">Update</button>
        </form>
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
  