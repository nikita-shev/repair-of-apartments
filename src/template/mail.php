<?php
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$service = $_POST['service'];

$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $msg = '<div class="form-result">Мы перезвоним вам через 15 минут</div>';
    $mail->isSMTP();
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth   = true;
    // Настройки вашей почты
    $mail->Host       = 'smtp.gmail.com';
    $mail->Username   = '';
    $mail->Password   = '';
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->setFrom('', 'Ремонт квартир');
    // Получатель письма
    $mail->addAddress('');

    // -----------------------
    // Само письмо
    // -----------------------
    $mail->isHTML(true);

    $mail->Subject = 'Новая заявка';
    $mail->Body    = "<b>Имя:</b> $name <br><b>Телефон:</b> $phone<br><b>E-mail:</b> $email<br><b>Услуга:</b> $service";

    if ($mail->send()) {
        echo "$msg";
    } else {
        echo "Сообщение не было отправлено. Неверно указаны настройки вашей почты";
    }
} catch (Exception $e) {
    echo "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}
