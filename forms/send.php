
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["send"])){
  $mail = new PHPMailer(true);

  $mail->isSMTP();
  $mail->Host = 'smtp gmail.com';
  $mail->SMTPAuth = true;
  $mail->Username = 'rijanq0@gmail.com';
  $mail->password = 'iurk coba vbkv uhcf';
  $mail->SMTPSecure = 'ssl';

  $mail->setFrom('rijanq0@gmail.com');
  $mail->addAddress($_POST["email"]);
  $mail->isHTML(true);

  $mail->Name = $_POST["fname"];
  $mail->Message = $_POST["message"];

  $mail->send();
}
  echo
"
  <script>
  alert('Sent Message Successfully');
  document.location.href = 'index.html';
  </script>
  "
?>