<?php require_once 'inc/functions.inc.php';
require_once 'inc/header.inc.php';
session_start();
$pageTitle = 'gallery';?>
<div class="container">
    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label"></label>
                        <div class="preview-zone hidden">
                            <div class="box box-solid">
                                <div class="box-header with-border">
                                    <div><img src="img\imagegallerylogo.png" alt="Image Gallery Logo"></div>
                                    <div><b><h1>Welcome, <?= isset($_SESSION['first_name']) ? $_SESSION['first_name'] : 'New User!' ?></h1></b></div>
                                    <br>
                                    <div><b>Register or Login <br>to Build Your Own Image Gallery</b></div>
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
                    <a href="registration.php" role="button" class="btn btn-info btn-block pull-right">Register</a>
                    <a href="login.php" role="button" class="btn btn-info btn-block pull-right">Login</a>
                </div>
            </div>
        </div>
    </form>
</div>
<?php require_once 'inc/footer.inc.php'?>
<script src="script.js"></script>