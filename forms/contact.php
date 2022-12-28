<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require '../assets/PHPMailer/src/Exception.php';
    require '../assets/PHPMailer/src/PHPMailer.php';
    require '../assets/PHPMailer/src/SMTP.php';

    $subject = "Contact mail";
    $name=$_POST["name"];
    $from=$_POST["email"];
    $sbjk=$_POST["subject"];
    $msg=$_POST["message"];
    $headers = "From :".$from."Name :".$name."Subject :".$sbjk;
    $body = "Message : ".$msg;

    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com' ;
    $mail->SMTPAuth = true;
    $mail->SMTPDebug = 2;
    $mail->Username = 'ferrypraditya19@gmail.com';
    $mail->Password = 'wznpohkbrjnjslcc';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;    
    $mail->setFrom('ferrypraditya19@gmail.com');
    $mail->addAddress('ferryfajri1902@gmail.com');
    $mail->isHTML(true);
    $mail->Subject = 'Ada email masuk dari portfolio mu!';
    $mail->Body = $headers.$body;
    $mail->send();

    
?>
