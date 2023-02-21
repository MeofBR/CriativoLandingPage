<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];
    $destinatario = "meof1993@gmail.com";
    $assunto = "Mensagem do formulário de contato";
    $conteudo = "Nome: " . $nome . "\nEmail: " . $email . "\nMensagem: " . $mensagem;
    $headers = "De: " . $email;

    if (mail($destinatario, $assunto, $conteudo, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Ocorreu um erro ao enviar a mensagem.";
    }
}
?>