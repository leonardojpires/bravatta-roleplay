<?php

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

        $to = "leocontacto12@gmail.com";
        $subject = "Nova mensagem de $nome ($nickname)";
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        $body = "Nome: $nome\nNickname: $nickname\nEmail: $email\nMensagem: $mensagem\n";

        if (mail($to, $subject, $body, $headers)) {
            $_SESSION['success'] = 'Mensagem enviada com sucesso!';
        } else {
            $_SESSION['error'] = 'Erro ao enviar a mensagem!';
        }

        header('Location: /contacto');
        exit;
    }
}