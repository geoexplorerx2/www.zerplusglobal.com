<?php 

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if($_REQUEST['name'] !='' || $_REQUEST['phone'] !=''){
    $to = ""; // this is your Email address
    $name = $_REQUEST['name'];
    $phone = $_REQUEST['phone'];
    $from = $_REQUEST['email']; // this is the sender's Email address
    $message = $_REQUEST['message'];

    $full_body = $name . "\n" . $phone . " ". "wrote the following:" . "\n\n" . $_POST['message'];
    
//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'mail.hotelistan.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'mo.alsaleh@hotelistan.com';                     //SMTP username
    $mail->Password   = 'hkYrlYRMd';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $recipients = array(
        'melikesimsek@zerplusglobal.com' => 'melikesimsek@zerplusglobal',
        'ahmeteminturk@zerplusglobal.com' => 'ahmeteminturk@zerplusglobal',
        'melihozbilge@zerplusglobal.com' => 'melihozbilge@zerplusglobal',
        'ilkim@zerplusglobal.com' => 'ilkim@zerplusglobal',
        'mo.alsaleh@hotelistan.com' => 'mo.alsaleh@hotelistan',
    );

    foreach($recipients as $email => $recName)
        {
        $mail->AddCC($email, $recName);
        }

    //Content
    $mail->setFrom('info@zerplus.com', 'ZerPlus');
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'New Message from ZerPlus' ;
    $mail->Body    = 'Name: ' . $name . '<br>' . 
                     'Phone Number: ' . $phone . '<br>' . 
                     'Email: ' . $from . '<br>' . 
                     'Message: ' . '<br>' . $message;
    $mail->AltBody = '';

    // $mail->send();
    if($mail->send()){
        $response = 'success';
    }else{
        $response ='error';
    }
       echo $response;
}

