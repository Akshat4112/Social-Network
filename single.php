<?php
session_start();
include 'includes/connection.php';
include 'functions/functions.php';
?>
<html>
    <head>
        <title>Page to be renamed</title>
    </head>
    <body>
        
    <?php
single_post();
    ?>
     <?php
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
                <p>Register Date:$register_date</p>";
        ?>
    
    </body></html>
