<?php 
session_start();
$pageTitle = 'gallery';
require_once 'inc/functions.inc.php';
require_once 'inc/header.inc.php';
require_once 'inc/file_uploader.inc.php';
require_once 'inc/nav.inc.php';
// home.php
?>
<div id="message"></div>
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
                                    <div><b><h1>Hello, <?= isset($_SESSION['first_name']) ? $_SESSION['first_name'] : 'New User!' ?></h1>
                                    </b></div>
                                    <br>
                                    <div><b>Upload Images to Build Your Gallery</b></div>
                                </div>
                                <div class="box-body"></div>
                            </div>
                        </div>
                        <div class="dropzone-wrapper">
                            <div class="dropzone-desc">
                            <p><strong>Click here</strong> or drag in a file for upload</p>
                            </div>
                            <input type="file" name="file_upload" class="dropzone">
                        </div>
                    </div>
                </div>
            </div>
<!-- image gallery -->
            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-info btn-block pull-right">Upload</button>
                    <?php
                    if (!empty($message)) {
                        echo "<br><p id=\"alert\" class=\"alert alert-info mt-4 text-center\">{$message}</p>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </form>

    <div class="container">
        <div class="row">
            <div class="col-12 d-flex flex-wrap flex-row align-items-center justify-content-center">
            <?php display_images(); ?>
            </div>
        </div>
    </div>
</div>
<?php require_once 'inc/footer.inc.php'?>
<script src="script.js"></script>