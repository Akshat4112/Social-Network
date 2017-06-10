
<?php
//session_start();
$con = mysqli_connect('localhost', 'root', '', 'social_network') or die('Cannot conncet to database.');

//function for inserting posts
function insertPost() {
    global $con;
    if (isset($_POST['sub'])) {

        $content = trim(filter_input(INPUT_POST, 'content'));
        if ($content == '') {
            echo 'Please write something';
        } else {
            $user_email = $_SESSION['user_email'];
            $query = "select *from users where user_email='$user_email'";
            $run_query = mysqli_query($con, $query);
            $row = mysqli_fetch_array($run_query);
            $user_id = $row['user_id'];
            $insert = "insert into posts(user_id,post_content,post_date)values('$user_id','$content',NOW())";
            $run = mysqli_query($con, $insert);
            if ($run) {
                echo '<h3>Posted to timeline,Looks great</h3>';
                $update = "update users set posts='yes' where user_id='$user_id'";
                $run_update = mysqli_query($con, $update);
            }
        }
    } else {
     
    }
}

//function for displaying posts
function get_posts() {
    global $con;
    $per_page = 5;
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 1;
    }
    $start_from = ($page - 1) * $per_page;
    $get_posts = "select *from posts ORDER by 1 DESC LIMIT $start_from,$per_page";
    $run_post = mysqli_query($con, $get_posts);
    while ($row_posts = mysqli_fetch_array($run_post)) {
        $post_id = $row_posts['post_id'];
        $user_id = $row_posts['user_id'];
        $content = $row_posts['post_content'];
        $post_date = $row_posts['post_date'];
//getting the user who has posted the thread
        $user = "select *from users where user_id='$user_id' AND posts='yes'";
        $run_user = mysqli_query($con, $user);
        $row_user = mysqli_fetch_array($run_user);
        $user_name = $row_user['user_name'];
        $user_image = $row_user['user_image'];
        echo'<p><img src="./images/' . $user_image . '" width="50px" height="50px"></p>
        <h3><a href="user_profile.php?u_id='.$user_id.'">' . ucwords($user_name) . '</a></h3>
        <p>' . $post_date . '</p>
        <p>' . $content . '</p>
            
        <a href=""><button>Like</button></a><a><button>comment</button></a><a><button>share</button></a><br><br>';
        
    }
    include 'pagination.php';
}

function single_post() {
    if (isset($_GET['post_id'])) {
        global $con;
        $get_id = $_GET['post_id'];
        $get_posts = "select *from posts where post_id='$get_id'";
        $run_post = mysqli_query($con, $get_posts);
        $row_posts = mysqli_fetch_array($run_post);
        $post_id = $row_posts['post_id'];
        $user_id = $row_posts['user_id'];
        $content = $row_posts['post_content'];
        $post_date = $row_posts['post_date'];
        //getting the user who has posted the thread
        $user = "select *from users where user_id='$user_id' AND posts='yes'";
        $run_user = mysqli_query($con, $user);
        $row_user = mysqli_fetch_array($run_user);
        $user_name = $row_user['user_name'];
        $user_image = $row_user['user_image'];
        //displaying posts
        //first line displays the design of posts
        echo '<p><img scr="images/user_images/$user_image" width="50px" height="50px"></p>
  <h3><a href="user_profile.php?user_id=$user_id">' . $user_name . '</a></h3>
  <p>' . $post_date . '</p>
  <p>' . $content . '</p><br />';
        include './comments.php';
        echo '
  <form method="post" action="">
  <textarea cols="50" rows="5" placeholder="write your reply..."></textarea><br>
  <input type="submit" name="reply" value="Reply to this">
  </form>
  ';
        if (isset($_POST['reply'])) {
            $comment = filter_input(INPUT_POST, 'comment');
            $insert = "insert into comments(post_id,user_id,comment,comment_author,date)values('$post_id','$user_id','$comment','$user_name',NOW())";
            $run = mysqli_query($con, $insert);
            echo '<h2>Your Reply was added.</h2>';
        }
    }
}

function SearchName() {
    global $con;
    $searchinput = filter_input(INPUT_POST, 'user_query');
    $query = "select user_name from users where user_name='$searchinput'";
    $run_query = mysqli_query($con, $query);
    $user = mysqli_fetch_array($run_query);
    if(!empty($user)) {
        return $user;
    } else {
        echo 'No result found';
    }
}

function SearchCountry() {
    global $con;
    $searchinput = filter_input(INPUT_POST, 'user_query');
    $query = "select *from users where user_name='$searchinput'";
    $run_query = mysqli_query($con, $query);
    $user = mysqli_fetch_array($run_query);
    if (!empty($user)) {
        return ucwords($user['user_country']) . "<br>";
    }
}

function SearchCurrent() {
    //"TO be edited
    global $con;
    $searchinput = filter_input(INPUT_POST, 'user_query');
    $query = "select *from users where user_name='$searchinput'";
    $run_query = mysqli_query($con, $query);
    $user = mysqli_fetch_array($run_query);
    if (!empty($user)) {
        return ucwords($user['user_country']) . "<br>";
    } else {
        echo 'No result found';
    }
}

function SearchPast() {
    //"TO be edited
    global $con;
    $searchinput = filter_input(INPUT_POST, 'user_query');
    $query = "select *from users where user_name='$searchinput'";
    $run_query = mysqli_query($con, $query);
    $user = mysqli_fetch_array($run_query);
    if (!empty($user)) {
        return ucwords($user['user_country']) . "<br>";
    } else {
        echo 'No result found';
    }
}

function SearchEducation() {
    //"TO be edited
    global $con;
    $searchinput = filter_input(INPUT_POST, 'user_query');
    $query = "select *from users where user_name='$searchinput'";
    $run_query = mysqli_query($con, $query);
    $user = mysqli_fetch_array($run_query);
    if (!empty($user)) {
        return ucwords($user['user_country']) . "<br>";
    } else {
        echo 'No result found';
    }
}

function SearchSummary() {
    //"TO be edited
    global $con;
    $searchinput = filter_input(INPUT_POST, 'user_query');
    $query = "select *from users where user_name='$searchinput'";
    $run_query = mysqli_query($con, $query);
    $user = mysqli_fetch_array($run_query);
    if (!empty($user)) {
        return ucwords($user['user_country']) . "<br>";
    } else {
        echo 'No result found';
    }
}

function UpdatePassword() {
    global $con;
    $user_email = $_SESSION['user_email'];
    if (isset($_POST['ch_pass'])) {
        $old_password = filter_input(INPUT_POST, 'old_password');
        $new_password = filter_input(INPUT_POST, 'new_password');
        $confirm_password = filter_input(INPUT_POST, 'confirm_password');
        $original_password_query = "select * from users where user_email='$user_email'";
        $original_password_query_run = mysqli_query($con, $original_password_query);
        $row = mysqli_fetch_array($original_password_query_run);
        $user_original_password = $row['user_pass'];
        if ($old_password == $user_original_password) {
            if ($new_password == $confirm_password) {
                $update_query = "insert into users (user_pass) values($new_password) where user_email='$user_email'";
                echo 'Your Password is Updated';
            } else {
                echo 'Password didn\'t match';
            }
        } else {
            echo 'Your Old Password didn\'t match';
        }
    }
}

function user_profile() {
    global $con;
    $user_email = $_SESSION['user_email'];
    $query = "select *from users where user_email='$user_email'";
    $run_query = mysqli_query($con, $query);
    if ($run_query) {
        $row = mysqli_fetch_array($run_query);
        $name = $row['user_name'];
        $gender = $row['user_gender'];
        $id = $row['user_id'];
        $country = $row['user_country'];
        $last_login = $row['last_login'];
        $register_date = $row['register_date'];
        if ($gender == 'Male') {
            $msg = "Send him a message";
        } else {
            $msg = "send her a message";
        }
        echo '<div class="col-sm-offset-1"><p><img src="user/user_images/default.jpg" width="150px" height="150px"></p><br>
            <p><strong>Name:</strong>' . $name . '</p>
            <p><strong>Gender:</strong>' . $gender . '</p>
            <p><strong>Country:</strong>' . $country . '</p>
            <p><strong>Last Login</strong>' . $last_login . '</p>
            <p><strong>Member since:</strong>' . $register_date . '</p>
            <p><a href="messages.php?u_id=' . $id . '"><button>' . $msg . '</button></a></p></div>';
    } else {
        echo 'cannot run query';
    }
    $per_page = 5;
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 1;
    }
    $start_from = ($page - 1) * $per_page;
    $get_posts = "select *from posts ORDER by 1 DESC LIMIT $start_from,$per_page";
    $run_post = mysqli_query($con, $get_posts);
    while ($row_posts = mysqli_fetch_array($run_post)) {
        $post_id = $row_posts['post_id'];
        $user_id = $row_posts['user_id'];
        $content = $row_posts['post_content'];
        $post_date = $row_posts['post_date'];
//getting the user who has posted the thread
        $user = "select *from users where user_id='$user_id' AND posts='yes'";
        $run_user = mysqli_query($con, $user);
        $row_user = mysqli_fetch_array($run_user);
        $user_name = $row_user['user_name'];
        $user_image = $row_user['user_image'];
        echo'<div class="col-sm-offset-5"><p><img src="./images/' . $user_image . '" width="50px" height="50px"></p>
        <h3><a href="user_profile.php?u_id='. $user_id.'">' . ucwords($user_name) . '</a></h3>
        <p>' . $post_date . '</p>
        <p>' . $content . '</p>
        <a href="single.php?post_id=' . $post_id . '"><button>See Replies or Reply to this</button></a></div>';
    }
    include 'pagination.php';
}
