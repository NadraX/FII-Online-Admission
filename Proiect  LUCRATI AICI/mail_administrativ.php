<?php 

require_once 'PHPMailer-master/PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail2 = new PHPMailer;

if($_POST['submit'] == 'Submit')
{
$email = $_POST["recipient-name"];
$text = $_POST["message-text"];

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = 'smtp.gmail.com';
$mail->Username = 'fiiOnlineAdmission@gmail.com';
$mail->Password = 'test1234AZ';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;
    


$mail->From = 'fiiOnlineAdmission@gmail.com' ;
$mail->FromName = 'FII - Online Admission';
$mail->addReplyTo('fiiOnlineAdmission@gmail.com', 'Echipa administrativa');
$mail->addAddress($email, 'Candidat');

$mail->Subject = 'FII - Online Admission [Recompletarea unor campuri]';
$mail->Body = $text;

var_dump($mail->send());

}
echo '<script>window.location.href = "Validare_Email.php";</script>';
exit;
?>
