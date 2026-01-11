<?php
$target_dir = "uploads/";
$target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);

/*
// Allowed MIME types for documents
$allowed_types = [
    "application/pdf",
    "application/msword",
    "application/vnd.openxmlformats-officedocument.wordprocessingml.document"
];*/

$allowed_types = ["image/jpeg", "image/jpg", "image/png"];

// Max size: 4MB (4 * 1024 * 1024 bytes)
$max_size = 4 * 1024 * 1024;

if (
    in_array($_FILES["fileToUpload"]["type"], $allowed_types) &&
    $_FILES["fileToUpload"]["size"] <= $max_size
){
    if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)){
        echo "The file ".basename($_FILES["fileToUpload"]["name"]). " has been uploaded<br>";
        $x= $_FILES["fileToUpload"]["size"];
        echo "File size: ". $x/1000 . " KB<br>";
        echo "File type: ". $_FILES["fileToUpload"]["type"];
    }else{
        echo "There was an error uploading the file!";
    }
}else{
    echo "File type or size doesn't match";
}

?>