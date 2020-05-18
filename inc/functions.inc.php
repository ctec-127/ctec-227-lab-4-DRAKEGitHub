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



function display_images() {
    if(isset($_SESSION['username'])) {
        $dir = "uploads/{$_SESSION['username']}";
    } else {
        $dir = 'uploads';
    }
    if(is_dir($dir)) {
        if($dir_handle = opendir($dir)){
            while($filename = readdir($dir_handle)) {
                if (!(is_dir($filename)) && $filename != ".ds_store") {
                    echo "<div class=\"card m-1 text-info\">";
                    echo "<img src=\"uploads/{$_SESSION['username']}/{$filename}\" alt=\"Uploaded Image\">";
                    echo "<a class=\" btn text-info\" href=\"?file=$filename\">Delete Image <i class=\"fa fa-trash\"></i></a>";
                    echo "</div>";
                }
            }
            closedir();
        }                    
    }
}
// checks for user folder and creates if it does not exist
function user_folder($username) {
    if (!is_dir($username)) {
        mkdir("uploads/".$username);
    }
}

