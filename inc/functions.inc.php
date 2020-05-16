<?php
 // Define these errors in an array
 $upload_errors = array(
    UPLOAD_ERR_OK                 => "No errors.",
    UPLOAD_ERR_INI_SIZE          => "Larger than upload_max_filesize.",
    UPLOAD_ERR_FORM_SIZE         => "Larger than form MAX_FILE_SIZE.",
    UPLOAD_ERR_PARTIAL             => "Partial upload.",
    UPLOAD_ERR_NO_FILE             => "Please select a file to upload",
    UPLOAD_ERR_NO_TMP_DIR         => "No temporary directory.",
    UPLOAD_ERR_CANT_WRITE         => "Can't write to disk.",
    UPLOAD_ERR_EXTENSION         => "File upload stopped by extension."
);

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    // what file do we need to move?
    $tmp_file = $_FILES['file_upload']['tmp_name'];

    // set target file name
    // basename gets just the file name
    $target_file = basename($_FILES['file_upload']['name']);

    // set upload folder name
    $upload_dir = 'uploads';

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
    copy('uploads/' . $_GET['file'],'backup/'.$_GET['file']);
    // insert code from tuesday to move the file somewhere else instead of deleting
    if(unlink("uploads/" . $_GET['file'])){
        header('Location: gallery.php');
    } else {
        echo '<p>Sorry, I could not delete the file you selected.</p>';
    }
}
function display_images()
{
    // start at current directory
    $dir = "uploads";
    if (is_dir($dir)) {
        if ($dir_handle = opendir($dir)) {
            while ($filename = readdir($dir_handle)) {
                if (!is_dir($filename) && $filename != '.DS_Store') {
                    $filename = urlencode($filename);
                    echo "<div class=\"card m-1 text-info\"><img src=\"uploads/$filename\" alt=\"A photo\">
                    <a class=\" btn text-info\" href=\"?file=$filename\">Delete Image <i class=\"fa fa-trash\"></i>
                    </a></div>";

                }
            } // end while
            // close the directory now that we are done with it
            closedir($dir_handle);
        } // end if
    } // end if
}
