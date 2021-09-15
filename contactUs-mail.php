<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
  $name = $_POST['user-name'];
  $company = $_POST['company-name'];
  $email = $_POST['email'];
  $phone = $_POST['phone-number'];
  $subject = $_POST['subject'];
  $message = $_POST['inquiry-message'];

  try{
    $mail->isSMTP();
    $mail->Host = 'gator4308.hostgator.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'info@princesscourier.com'; // Gmail address which you want to use as SMTP server
    $mail->Password = 'Rm03151991'; // Gmail address Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;//hostgator solution
    //$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; this is the original
    $mail->Port = '465';

    $mail->setFrom('info@princesscourier.com'); // Gmail address which you used as SMTP server
    $mail->addAddress('info@princesscourier.com'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)
    // $mail->addAttachment($_FILES['file']['tmp_name'], $_FILES['file']['name']);
    // $mail->addAttachment($_FILES['resume']['tmp_name'], $_FILES['resume']['name']);
    // $mail->addAttachment($_FILES['coverletter']['tmp_name'], $_FILES['coverletter']['name']);

    $mail->isHTML(true);
    $mail->Subject = "Quotation Request From $name";
    $mail->Body = "<h3>Name : $name <br>
                      Company : $company<br>
                      Email : $email<br>
                      Contact Number : $phone<br> 
                      Subject: $subject<br> 
                      Message : $message</h3>";

    $mail->send();
    $alert = '<div class="alert-success text-center">
                 <span>Message Sent! Thank you for contacting us.</span>
                </div>';
  } catch (Exception $e){
    $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
  }
}
?>