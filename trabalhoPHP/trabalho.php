<?php

if(isset($_POST['email']) && !empty($_POST['email'])){

$nome = addcslashes ($_POST ['name']);
$idade = addcslashes ($_POST ['idade']);
$QuantidadeProduto = addcslashes ($_POST ['Quantidade Produto']);
$idade = addcslashes ($_POST ['idade']);
$email = addcslashes ($_POST ['email']);

$to = "duda.lira2017@outlook.com";
$subjet = "Contato - Programador Br"; 
$body = "Nome: " .$nome. "\r\n".
        "Idade: " .$idade. "\r\n".
        "Quantidade Produto: " .$QuantidadeProduto. "\r\n".
        "Idade: " .$idade. "\r\n".
        "Email: " .$email;

$header = "From: duda.lira2017@outlook.com"."\r\n" .
"Reply-To: ".$email. "\e\n".
"X=Mailer: PHP/".phpversion(); 

if (mail($to,$subjet,$body,$header)) {

    echo ("Email enviado com sucesso");


}else{
    echo ("Email não pode ser enviado ");
}


?> 
