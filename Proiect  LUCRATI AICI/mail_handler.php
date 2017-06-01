<?php 

require_once 'PHPMailer-master/PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail2 = new PHPMailer;

if($_POST['submit'] == 'Submit')
{
$name = $_POST["nume"];
$email = $_POST["email"];
$question = $_POST["intrebare"];

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
$mail->addAddress($email, $name);

$mail->Subject = 'Confirmare trimitere intrebare';
$mail->Body = 'Intrebarea ta a fost inregistrata, iar un admin iti va raspunde intr-un timp cat mai scurt!';

var_dump($mail->send());

$mail2->isSMTP();
$mail2->SMTPAuth = true;
    
$mail2->Host = 'smtp.gmail.com';
$mail2->Username = 'fiiOnlineAdmission@gmail.com';
$mail2->Password = 'test1234AZ';
$mail2->SMTPSecure = 'ssl';
$mail2->Port = 465;
  
$mail2->From = $email;
$mail2->FromName = $name;
$mail2->addReplyTo($email, $name);
$mail2->addAddress('fiiOnlineAdmission@gmail.com', 'Echipa administrativa');


$mail2->Subject = 'Intrebare de la '.$name;
$mail2->Body = $question;


var_dump($mail2->send());
}
echo '<script>window.location.href = "Validare_Email.php";</script>';
exit;
?>
