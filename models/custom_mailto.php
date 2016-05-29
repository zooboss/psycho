<?php

function custom_mailto()
{
    $name_index = $_POST['name_index'];
    $email = $_POST['visitor_email'];
    
    $message = "<h2>Сообщение с сайта Психологический центр</h2>\r\n";
    $message .= $_POST['visitor_subject'] . "\r\n";
    $message .= $_POST['visitor_message'];
    $message = strip_tags($message);
    
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";
    
    switch ($name_index){
        case 'nastya':
            $mailTo = 'mail_nastya@mail.ru';
            break;
        case 'luda':
            $mailTo = 'mail_luda@mail.ru';
            break;
        default: 
            echo 'default';
    }
    
    //mail($mailTo, 'Сообщение с сайта Психологический центр', $message, $headers);
    
    $txt = $name_index . "\r\n " . $email . "\r\n " . $message . "\r\n " . $headers;
    $myfile = fopen("testfile.txt", "w"); 
    fwrite($myfile, $txt);
    fclose($myfile);
}

custom_mailto();
?>