<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';
$aaa=" buildyournetwork1@gmail.com";
 $mailadd='<script>var answer = prompt("What is your favorite animal?");document.write(answer)</script>';
 echo $mailadd=$aaa;
$mailadd=$aaa;



sleep(20);


// Instantiate a new PHPMailer object
$mail = new PHPMailer(true);

// Set up SMTP
$mail->isSMTP();   
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);                                   // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'owaisbukhari257@gmail.com';                   // SMTP username
$mail->Password = 'dbxxpigglplqdulb';                     // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;
                                    // TCP port to connect to

// Recipients
$mail->setFrom('owaisbukhari257@gmail.com', 'Reports');
sleep(10);

$mail->addAddress($aaa, 'Recipient Name');   

// Content
$mail->isHTML(true);                                  // Set email format to HTML
$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

// Send the message
$mail->send();

echo 'Message has been sent';

?>