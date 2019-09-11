<?php

$path_parts = pathinfo($_FILES["fileToUpload"]["name"]);
$extension = $path_parts['extension'];
$name=$regno.".".$extension;
$target_dir = "uploads/volunteer_sign/";
$target_file = $target_dir.$name;
echo $target_file;
print_r($_FILES["fileToUpload"]);
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
?>
