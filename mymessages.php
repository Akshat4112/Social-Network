<?php
//Common styling for profile of users...
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
        <style>
            .boxmargin{
                margin-top: 9px;
                margin-right: 9px;
            }
            .widthclass{
                height: 60px;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="row mdl-color--blue-800 widthclass">
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
                                <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent mdl-color--green-500" name="search">Search</button>
                            </form>
                        </div>
                        <ul class="nav nav-pills" role="tablist">
                            <li><a class="btn btn-default mdl-color-text--grey-50 mdl-color--blue-900 boxmargin" href="home.php">
                                    Home
                                </a></li>
                            <li><?php echo '<a href="edit_profile.php?user_id=$user_id" class="btn btn-default mdl-color-text--grey-50 mdl-color--blue-900 boxmargin">Edit Profile</a>'; ?>
                            </li>
                            <li><a href="logout.php" class="btn btn-default mdl-color-text--grey-50 mdl-color--blue-900 boxmargin">
                                    Logout
                                </a></li>
                        </ul>
                    </div>
                </div>
        </nav>
<?php/*
//Styling for messages
//get username,userphoto,usergender and some basic details of profile of a  user
// make a box for message and a button to send a message 
    $message= filter_input(INPUT_POST,'message');
    $insert="insert into messages (sender,reciever,msg_sub,reply,relpy,status,msg_date)values('$sender_id','$reciever_id','$message','no_reply','unread',NOW())";
    $run_insert= mysqli_query($con,$insert);
    if($run_insert){
        echo 'message is sent successfully to user'.$user_name;
    }else{
        echo 'message is not sent';
    }
*/
echo 'My messages';

$sel_messsage="select *from messages where reviever='$user_id' AND status='unread'";
$run_message= mysqli_query($con,$sel_message);
$count_msg= mysqli_num_rows($run_message);
?>
    </body>
</html>
