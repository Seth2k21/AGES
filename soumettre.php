<?php

if(isset($_POST['submit'])){

    extract($_POST);

    if(!empty($subject) && !empty($name) && !empty($email) && !empty($message)){

        $to = "baiseth6@gmail.com";
        $from = $email;

        $header = "From:\"$name\"<$from>\n";
        $head .= "Reply-To:$from\n";
        $header .= "Content-Type:text/html; charset=\"iso-8859-1\"";

        if(mail($to, $subject, $message, $header)){

            echo "ok";
        }else{
            echo "error: retry";
        }
    }
}










?>