<?php

$assunto = "Contato Burn Tires";
$corpo = "
    Nome: " .$_POST['nome']."
    Email:" .$_POST['email']."
    Telefone: " .$_POST['telefone']."
    Horario: ".$_POST['horario']."
    Mensagem: ".$_POST[mensagem]."

";

mail('arthursm50@gmail.com',$assunto,$corpo,'From: jogosdobask@gmail.com');
echo 'Seus dados foram enviados com sucessso';


?>


