<?php
include 'includes/connection.php';

if (isset($_POST['sign_up'])) {
        global $con;
        $name = mysqli_real_escape_string($con,filter_input(INPUT_POST, 'u_name'));
        $pass = mysqli_real_escape_string($con,filter_input(INPUT_POST, 'u_pass'));
        $email = mysqli_real_escape_string($con,filter_input(INPUT_POST, 'u_email'));
        $country = mysqli_real_escape_string($con,filter_input(INPUT_POST, 'u_country'));
        $gender = mysqli_real_escape_string($con,filter_input(INPUT_POST, 'u_gender'));
        $b_day = mysqli_real_escape_string($con,filter_input(INPUT_POST, 'b_day'));
        $status = "unverified";
        $posts = "No";

        $get_email = "select *from users where user_email='$email'";
        $run_email = mysqli_query($con, $get_email);
        $check = mysqli_num_rows($run_email);

        if ($check == 1) {
            echo "<script>alert('The email is already registered')</script>";
            exit();
        }
        if (strlen($pass) < 8) {
            echo "<script>alert('Password should not be less than 8 charcters')</script>";
        } else {
            $insert = "insert into users(user_name,user_pass,user_email,user_country,user_gender,user_b_day,user_image,register_date,last_login,status,posts)values('$name','$pass','$email','$country','$gender','$b_day','default.jpg',NOW(),NOW(),'$status','$posts')";
            $run_insert = mysqli_query($con, $insert);
            if ($run_insert) {
                $_SESSION['user_email']=$email;
                
                echo "Registration is Succcessfull";
                echo "<script>window.open('basicinfo.php','_self')</script>";
            }
        }
    }