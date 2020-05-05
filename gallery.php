<?php require_once 'inc/functions.inc.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drag/Drop File Upload Demo</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
</head>
<body>
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
                                    <div><b>Upload Images to Build Your Gallery</b></div>
                                    <!-- <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-danger btn-xs remove-preview">
                                            <i class="fa fa-times-circle"></i> Reset This Form
                                        </button>
                                    </div> -->
                                </div>
                                <div class="box-body"></div>
                            </div>
                        </div>
                        <div class="dropzone-wrapper">
                            <div class="dropzone-desc">
                                <i class="glyphicon glyphicon-download-alt"></i>
                                <p>Choose an image file <br>or drag it here.</p>
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
                        echo "<p id=\"alert\" class=\"alert alert-primary mt-4\">{$message}</p>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </form>

    <div class="container">
        <div class="row">
            <div class="col-12 d-flex flex-wrap flex-row align-items-center justify-content-between">
                <?php display_images(); ?>
            </div>
        </div>
    </div>
</div>

<script src="script.js"></script>



</body>
</html>