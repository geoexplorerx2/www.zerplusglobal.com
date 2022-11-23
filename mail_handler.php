<?php /*
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['submit'])){
    $to = "mohd_8580@live.com"; // this is your Email address
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $from = $_POST['email']; // this is the sender's Email address
    $message = $_POST['message'];

    $full_body = $name . "\n" . $phone . " ". "wrote the following:" . "\n\n" . $_POST['message'];
    // $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    //Load Composer's autoloader
    require 'vendor/autoload.php';

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);
try {
    $mail->isSMTP();
    $mail->SMTPAuth = true;

    $mail->Host = "mtp-relay.gmail.com";
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLES;
    $mail->Port = 587;

    $mail->USername = "mo.alsaleh@hotelistan.com";
    $mail->Password = "";

    $mail->setForm($email, $name);
    $mail->addAddress("mo.alsaleh@hotelistan.com", "Mo Al Saleh");

    $mail->Subject = $subject;
    $mail->Body = $message;

    $mail->send();

    echo "email is sent!";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


}*/

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if($_REQUEST['name'] !='' || $_REQUEST['phone'] !=''){
    $to = "mohd_8580@live.com"; // this is your Email address
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
    $mail->setFrom($from);
    $mail->addAddress('mo.alsaleh@hotelistan.com', 'Zerplus');     //Add a recipient
    $mail->addReplyTo('mo.alsaleh@hotelistan.com', 'Information');

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'New Message from ZerPlus Contact Form';
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
