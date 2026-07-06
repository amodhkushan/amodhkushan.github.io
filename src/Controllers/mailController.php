<?php

// No more manual includes needed here!
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class mailController
{
    public function send()
    {
        // Composer handles the namespaces now
        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'amodhkushansd@gmail.com';
            $mail->Password   = 'lgdxcudkadmiilci'; 
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;

            // SSL Fix for XAMPP
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );

            $mail->setFrom('amodhkushansd@gmail.com', 'Portfolio');
            $mail->addAddress('amodhkushansd@gmail.com');

            $mail->isHTML(true);
            $mail->Subject = $_POST['subj'] ?? 'No Subject';
            $mail->Body    = "Name: " . ($_POST['name'] ?? 'N/A') . "<br>Email: " . ($_POST['email'] ?? 'N/A') . "<br>Message: " . ($_POST['msg'] ?? '');

            $mail->send();
            header("Location: index.php?success=1");
            exit();

        } catch (Exception $e) {
            die("Mailer Error: " . $mail->ErrorInfo);
        }
    }
}