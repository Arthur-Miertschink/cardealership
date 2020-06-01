<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar</title>
</head>
<body>

    <?php

    $nome = $_POST['nome'];
    $mail = $_POST['email'];
    $telefone = $_POST['telefone'];
    $mensagem = $_POST['mensagem'];


    require 'comp/vendor/autoload.php'; // If you're using Composer (recommended)
    // Comment out the above line if not using Composer
    // require("/sendgrid-php.php");
    // If not using Composer, uncomment the above line and
    // download sendgrid-php.zip from the latest release here,
    // replacing  with the path to the sendgrid-php.php file,
    // which is included in the download:
    // https://github.com/sendgrid/sendgrid-php/releases

    $email = new \SendGrid\Mail\Mail(); 
    $email->setFrom("arthursm.fla@hotmail.com", "Arthur");
    $email->setSubject("Mensagem de Contato");
    $email->addTo("arthursm50@gmail.com", "Você");
    $email->addContent("text/plain", "Olá pessoal da burn tires!, <br><br>Nova mensagem de contato<br><br>
    nome: $nome<br>Email: $mail<br>Telefone: $telefone<br> Mensagem: $mensagem");

    $sendgrid = new \SendGrid(getenv('key'));
    try {
        $response = $sendgrid->send($email);
        print $response->statusCode() . "\n";
        print_r($response->headers());
        print $response->body() . "\n";
    } catch (Exception $e) {
        echo 'Caught exception: '. $e->getMessage() ."\n";
    }

        
        ?>

</body>
</html>



