<?php
if(isset($_POST['email'] && !empty($_POST['email']){$nome = addcslashes($_POST['name'])
$email = addcslashes($_POST['email'])
$mensagem = addcslashes($_POST['message'])

$to = "joaovsalgado22@gmail.com"
$subject = "Contato - Programador Br"

$body = "Nome: " .$nome. "\n"
"Email: " .$email. "\n"
"Mensagem: " .$mensagem; $header = "From: joaovsalgado22@gmail.com"."\r\n". "Reply.To:".$email."\e\n"
. "x+Mailer:PHP/".phpversion();

if (mail($to,$subject,$body,$header)) {
    echo("Email enviado com sucesso!")
}else {
    echo("O Email não pode ser enviado")";"
}
}




?>