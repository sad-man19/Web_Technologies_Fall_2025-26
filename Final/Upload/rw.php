<?php
$myfile = fopen("uploads/newfile.txt","r") or die("Unable to open file");
$txt = "AJAX = Asynchronous JavaScript and XML\nCSS = Cascading Style Sheets\nHTML = Hyper Text Markup Language\nPHP = PHP Hypertext Preprocessor";
/*if(fwrite($myfile, $txt)){
    echo "File writing successful";
    fclose($myfile);
}*/
echo fread($myfile,filesize("uploads/newfile.txt"));
fclose($myfile);
?>