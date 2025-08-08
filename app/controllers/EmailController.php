<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class EmailController {
    public function send() {
        session_start();

        $nome = $_POST['nome'];
        $nickname = $_POST['nickname'];
        $email = $_POST['email'];
        $mensagem = $_POST['mensagem'];

        if (!$nome ||!$nickname || !$email || !$mensagem) {
            $_SESSION['error'] = 'Todos os campos devem estar devidamente preenchidos!';
            header('Location: /contacto');
            exit;
        }

        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'leocontacto12@gmail.com';
            $mail->Password = 'fgfe klmg kqfd gtvt';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            $mail->setFrom($email, $nome);
            $mail->addAddress('leocontacto12@gmail.com');
            $mail->Subject = "Nova mensagem de $nome ($nickname)";
            $mail->Body = "Nome: $nome\nNickname: $nickname\nEmail: $email\nMensagem: $mensagem\n";

            $mail->send();
            $_SESSION['success'] = 'Mensagem enviada com sucesso!';
        } catch(Exception $e) {
            $_SESSION['error'] = "Erro ao enviar a mensagem {$mail->ErrorInfo}";
        }

        header('Location: /contacto');
        exit;
    }
}