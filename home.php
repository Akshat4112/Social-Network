<?php
session_start();
include 'includes/connection.php';
include 'functions/functions.php';
include 'template/header_user.php';
//get User Details
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
<style>
    .demo1-card-wide{
        height: 10px;
        width: 150px;
    }
</style>
<div class="row">
            <div class="col-sm-3 col-sm-offset-1">
                <div class="img-rounded">
                    <?php
                    echo "<div class='demo1-card-wide mdl-card mdl-shadow--3dp'><img src='user/user_images/$user_image' width='150px' height='145px'></div><br><br>";
                    ?>
                    <div class="caption">
                        <h3><b><?php
                    echo $user_name;
                    ?></b></h3>
                        <p><em><?php
                    echo $user_country;
                    ?></em></p>
                        <p><a href="my_posts.php?user_id=$user_id" class="btn btn-default mdl-color--blue-900 mdl-color-text--grey-50" role="button">My Posts</a></p>
                        <p><a href="following.php" class="btn btn-default mdl-color--blue-900 mdl-color-text--grey-50" role="button">Following</a></p>
                        <p><a href="followers.php" class="btn btn-default mdl-color--blue-900 mdl-color-text--grey-50" role="button">Follower</a></p>
                        <?php
                        echo
                        "<p><b>Member since: </b><strong>$register_date</strong></p>
                            <!-- p><a href='my_messages.php?user_id='$user_id'>My Messages</a></p -->";
                        ?>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="img-rounded">
                        <form action="" method="post">
                            <div class="col-sm-4">
                                <label>Write something great...</label>
                                <textarea class="form-control" id="exampleTextarea" rows="4" name="content" placeholder="Write Something great..." required="required" autofocus>
                                </textarea><br>
                                <button type="submit" name="sub" class="btn btn-default mdl-color--blue-900 mdl-color-text--grey-50" >Post</button>
                                <br><br>
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-5 col-md-offset-1">
                        <?php
                        insertPost();
                        get_posts();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
