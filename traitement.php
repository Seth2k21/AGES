<?php
session_start();
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

function envoi_mail($from_name, $from_email, $subject,$message)
{
         $mail = new PHPMailer(true); // on  crée une objet phpmailer
         $mail->isSMTP();
         $mail->SMTPDebug = 0;
         $mail->SMTPSecure = 'ssl';
         $mail->Host = 'smtp.gmail.com'; // le serveur smtp de gmail
         $mail->SMTPAuth = true;
         $mail->Username = 'adiyongroup@gmail.com'; // Mail permettant d'accéder à l'attribut username(mail qui vas nous aider à envoyer des mail)
         $mail->Password = 'xhxxrqhhsjgqbchz'; //Mot de passe créer avec double authentification
         $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
         $mail->Port=465;


         // $mail->setFrom($from_email, $from_name); //le message est envoyé par
         // $mail->addAddress('baiseth6@gmail.com', '');     //Le nom est facultatif

        $mail->setFrom('adiyongroup@gmail.com'); //le message est envoyé par
        $mail->addAddress('adiyongroup@gmail.com');     //Le nom est facultatif

        $MESSAGE = "
        <div style='font-family: Arial, sans-serif; background-color: #e1e1e1; padding: 15px; border: 1px solid #ddd; border-radius: 5px;'>
            <h2 style='color: #333; margin-bottom: 5px;'>Nom:</h2>
            <p style='font-size: 16px; margin-bottom: 10px;'> $from_name </p>
    
            <h2 style='color: #333; margin-bottom: 5px;'>Email:</h2>
            <p style='font-size: 16px; margin-bottom: 10px;'> $from_email </p>
    
            <h3 style='color: #333; margin-bottom: 5px;'>Message:</h3>
            <p style='font-size: 14px;'> $message </p>
        </div>
    ";
    
        

         $mail->isHTML(true); 
         $mail->CharSet = 'UTF-8';              //message au format html
         $mail->Subject=$subject;
         $mail->Body=$MESSAGE;
         $mail->setLanguage('fr','/optionel/path/to/language/directory/'); //Pour changer la version française

         
    
            if(!$mail->send())
            {
                 return false;
            }
            else
            {
                return true;
            }
        }






     
        if (envoi_mail($_POST['name'], $_POST['email'], $_POST['subject'], $_POST['message'])) 
        {
            $_SESSION['success'] = 'Your message has been sent successfully.';
            header('Location: contact.php');
            session_write_close();
           
        }
        else
        {
            $_SESSION['error'] = 'An error occurred!';
            header('Location: contact.php');
            session_write_close();
        }


?>
