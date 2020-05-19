<?php 
session_start();
$pageTitle = 'gallery';
require_once 'inc/functions.inc.php';
require_once 'inc/header.inc.php';
require_once 'inc/file_uploader.inc.php';
// home.php
if (!isset($_SESSION['loggedin'])) {
    require_once 'registrationinfo.inc.php';
} else {
    require_once 'gallery_builder.inc.php';
}
require_once 'inc/footer.inc.php';?>
<script src="script.js"></script>