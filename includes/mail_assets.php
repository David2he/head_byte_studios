<?php
$msg = "";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;



// Load Composer's autoloader
require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';
require 'vendor/autoload.php';


if (isset($_POST['submit'])) {
    // $subject = htmlspecialchars($_POST['subject']);
    // $email = htmlspecialchars($_POST['email']);
    // $message = htmlspecialchars($_POST['message']);


    // $myEmail = 'mymailofmysite@gmail.com'; //adresse email d'envoi
    // $password = '*******'; // mdp de l'adresse mail
    $smtp = 'smtp.gmail.com'; //serveur d'envoi 
    $to_email = 'mymailofmysite@gmail.com'; //adresse email à qui envoyer le mail.

    $mail = new PHPMailer();

    //if we want to send via SMTP
    //Recipients

    $mail->addAddress($to_email);

    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output


    // $mail->isSMTP();                                            // Send using SMTP
    // $mail->Host       = $smtp;                    // Set the SMTP server to send through


    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    // $mail->Username   = $myEmail;                     // SMTP ussername
    // $mail->Password   = $password;                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;

    $file_name_1 = $_FILES["uploaded_file_1"]["name"];
    move_uploaded_file($_FILES["uploaded_file_1"]["tmp_name"], $file_name_1);

    $file_name_2 = $_FILES["uploaded_file_2"]["name"];
    move_uploaded_file($_FILES["uploaded_file_2"]["tmp_name"], $file_name_2);
    $mail->addAttachment($file_name_1);
    $mail->addAttachment($file_name_2);

    $mail->setFrom($email);
    $mail->Subject = ('I WANT TO JOIN ARMY');
    $mail->isHTML(true);
    $mail->Body = $phone . '<br/><br/><br/>Adress -' . $adress .'<br/><br/><br/>'.$first_name . '<br/>' . $last_name.'<br/><br/><br/> Message -'.$message.'<br/><br/><br/> Linkedin -'.$linkedIn. '<br/> twitter -' .$twitter. '<br/> website -' .$website. '<br/> portfolio -' .$portfolio;


    if ($mail->send()){
        unlink($file_name_1);
        unlink($file_name_2);
        $msg = "Mail send.";
    }
        
        

    else{
        $msg = "Something wrong.<br><br>
        Try it later.";
        // echo '<pre>';
        // print_r($msg);
        // echo '</pre>';
    }
}
  