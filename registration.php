<?php 
require_once 'inc/functions.inc.php';
require_once 'inc/header.inc.php';
require_once 'inc/nav.inc.php';
// register.php
$pageTitle = "Register";
require_once 'inc/db_connect.inc.php';
session_start();
?>
<div class="container">
    <form action="registration.php" method="POST" enctype="multipart/form-data">    
    <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label"></label>
                        <div class="preview-zone hidden">
                            <div class="box box-solid">
                                <div class="box-header with-border">
                                    <div><img src="img\imagegallerylogo.png" alt="Image Gallery Logo"></div>
                                    <div><b><h1>Registration</h1></b></div>
                                    <br>
                                    <div><b>Register by entering your information below.</b><br>If you already have login information,<br> head over to our <a href="login.php">login</a> page to access your gallery.</div>
                                </div>
                                <div class="box-body"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- image gallery -->
<div class="row">
<div class="col-md-12">
<?php
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $username = $db->real_escape_string($_POST['username']);
                        $email = $db->real_escape_string($_POST['email']);
                        $first_name = $db->real_escape_string($_POST['first_name']);
                        $last_name = $db->real_escape_string($_POST['last_name']);
                        $password = hash('sha512', $db->real_escape_string($_POST['password']));
                        $sql = "INSERT INTO user (username,email,first_name,last_name,password) 
                                        VALUES('$username','$email','$first_name','$last_name','$password')";
                        // echo $sql;
                        $result = $db->query($sql);

                        if (!$result) {
                            echo '<div class=\"alert alert-info\">
                            <strong>Info!</strong> Indicates a neutral informative change or action.
                        </div>';
                            echo '<div>There was a problem registering your account.<br>Please try again.</div>';
                        } else {
                            user_folder($username);
                            echo '<div class="alert alert-info text-center"><strong>You have successfully registered!</strong><br><a class="nav-link active" id="login" href="login.php"><button type="button" class="btn btn-block btn-info">Login</button></a></div>';
                            // echo '<a class="nav-link active" id="login" href="login.php"><button type="button" class="btn btn-block btn-info">Login</button></a>';
                        }
                    } 
                ?>
</div>
</div>
            <div class="row">
                <div class="col-md-12">
                
                    <div class="form-group">
                        <label for="firstname"><b>First Name</b></label>
                        <input type="text" class="form-control" id="firstname" required name="first_name" placeholder="Enter first name here">
                    </div>
                    <div class="form-group">
                        <label for="lastname"><b>Last Name</b></label>
                        <input type="text" class="form-control" id="lastname" required name="last_name" placeholder="Enter last name here">
                    </div>
                    <div class="form-group">
                        <label for="email"><b>Email</b></label>
                        <input type="email" class="form-control" id="email" required name="email" aria-describedby="emailhelp" placeholder="Enter email">
                        <small id="emailhelp" class="form-text">We never share your personal info with anyone</small>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="username"><b>Username</b></label>
                        <input type="text" class="form-control" id="username" required name="username" aria-describedby="emailhelp" placeholder="example1984">
                        <small id="usernameHelp" class="form-text">User letters and numbers to make a unique username</small>
                    </div>
                    <div class="form-group">
                        <label for="password"><b>Password</b></label>
                        <input type="password" class="form-control" id="password" required name="password"aria-describedby="passwordHelp" placeholder="Password">
                        <span id="showPassword" onclick="showPassword();">Show Password</span>
                        <small id="passwordHelp" class="form-text">Enter a password that is a minimum of 8 characters</small>    
                    </div>
                    <button type="submit" value="Register" id="registerSubmit" class="btn btn-info btn-block pull-right">Submit</button>
                </div>
                
            </div>
           
        </div>
    </form>
</div>

<?php require_once 'inc/footer.inc.php'?>
<script src="script.js"></script>