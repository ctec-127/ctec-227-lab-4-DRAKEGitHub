<?php require_once 'inc/functions.inc.php' ;
require_once 'inc/header.inc.php';
require_once 'inc/nav.inc.php';
session_start();
// login.php
$pageTitle = 'Login';
require_once 'inc/db_connect.inc.php';
?>
<div class="container">
    <form action="login.php" method="POST" enctype="multipart/form-data">    
    <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label"></label>
                        <div class="preview-zone hidden">
                            <div class="box box-solid">
                                <div class="box-header with-border">
                                    <div><img src="img\imagegallerylogo.png" alt="Image Gallery Logo"></div>
                                    <div><b><h1>Login</h1></b></div>
                                    <br>
                                    <div><b>Login below or click the <a href="registration.php">register</a> button<br>to start your gallery experience.</b></div>
                                </div>
                                <div class="box-body"></div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
<div class="col-md-12">
<?php
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $username = $db->real_escape_string($_POST['username']);
                        $password = hash('sha512', $db->real_escape_string($_POST['password']));
                    
                        $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
                        //  echo $sql;
                    
                        $result = $db->query($sql);
                        if ($result->num_rows == 1) {
                            
                            $row = $result->fetch_assoc();
                            $_SESSION['first_name'] = $row['first_name'];
                            $_SESSION['loggedin'] = 1;
                            $_SESSION['username'] = $row['username'];
                    
                            header('location: gallery.php');
                        } else {
                            echo '<div class="alert alert-info text-center"><strong>There was a problem logging in.<br>Please try again or</strong><br><a class="nav-link active" id="registerbtn" href="registration.php"><button type="button" class="btn btn-block btn-info">Register</button></a></div>';
                        }
                    }
                ?>
</div>
</div>
<!-- image gallery -->
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="text"><b>Username</b></label>
                        <input type="text" name="username" class="form-control" id="username" placeholder="example1984">
                    </div>
                    <div class="form-group">
                        <label for="password"><b>Password</b></label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                        <span id="showPassword" onclick="showPassword();">Show Password</span>
                    </div>
                    <button type="submit" value="Login" class="btn btn-info btn-block pull-right">Login</button>
                </div>
            </div>
        </div>
    </form>
</div>
<?php require_once 'inc/footer.inc.php'?>
<script src="script.js"></script>