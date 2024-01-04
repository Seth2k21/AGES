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

function envoi_mail($from_name, $from_email, $subject,$message){
         $mail = new PHPMailer(); // on  crée une objet phpmailer
         $mail->isSMTP();
         $mail->SMTPDebug = 0;
         $mail->SMTPSecure = 'ssl';
         $mail->Host = 'smtp.gmail.com'; // le serveur smtp de gmail
         $mail->SMTPAuth = true;
         $mail->Username = 'baiseth5@gmail.com'; // Mail permettant d'accéder à l'attribut username(mail qui vas nous aider à envoyer des mail)
         $mail->Password = 'pwtqjssxrawdnxeu'; //Mot de passe créer avec double authentification
         $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
         $mail->Port   =465;


         $mail->setFrom($from_email, $from_name); //le message est envoyé par
         $mail->addAddress('baiseth6@gmail.com', '');     //Le nom est facultatif
         $mail->isHTML(true);               //message au format html
         $mail->Subject =$subject;
         $mail->Body    =$message;
         $mail->setLanguage('fr','/optionel/path/to/language/directory/'); //Pour changer la version française

    
            if(!$mail->send()){
                 return false;
            }else{

                return true;
            }

        }
     
        if (envoi_mail($_POST['name'], $_POST['subject'], $_POST['email'], $_POST['message'])) {
            $_SESSION['success'] = 'Votre message à été bien envoyez';
            header('Location: contact.php');
            session_write_close();
           
                    }
     
        else{
            $_SESSION['error'] = 'Une erreur s\'est produit erreur!';
            header('Location: contact.php');
            session_write_close();
        }


?>
