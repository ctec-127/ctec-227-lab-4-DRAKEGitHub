<?php 
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // what file do we need to move?
    $tmp_file = $_FILES['file_upload']['tmp_name'];

    // set target file name
    // basename gets just the file name
    $target_file = basename($_FILES['file_upload']['name']);

    // set upload folder name
    $upload_dir = 'uploads/'.$_SESSION['username'];

    // Now lets move the file
    // move_uploaded_file returns false if something went wrong
    if (move_uploaded_file($tmp_file, $upload_dir . "/" . $target_file)) {
        $message = "File uploaded successfully";
    } else {
        $error = $_FILES['file_upload']['error'];
        $message = $upload_errors[$error];
    } // end of if
}
// bootstrap uploader area
if (isset($_GET['file'])){
    copy("uploads/".$_SESSION['username']."/" . $_GET['file'],'backup/'.$_GET['file']);
    // insert code from tuesday to move the file somewhere else instead of deleting
    if(unlink("uploads/".$_SESSION['username']. "/".$_GET['file'])){
        header('Location: gallery.php');
    } else {
        echo '<p>Sorry, I could not delete the file you selected.</p>';
    }
}
?>
