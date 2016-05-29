<?php

function custom_mailto()
{
    $myfile = fopen("testfile.txt", "w"); 
    $txt = (isset($_POST)) ? $_POST['visitor_email'] : NULL;
    fwrite($myfile, $txt);
    fclose($myfile);
}

custom_mailto();
?>