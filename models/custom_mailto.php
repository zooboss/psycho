<?php

function custom_mailto()
{
    $myfile = fopen("testfile.txt", "w"); 
    $txt = var_dump($_POST);
    fwrite($myfile, $txt);
    fclose($myfile);
}

custom_mailto();
?>