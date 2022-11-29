<?php
 session_start();
$seguranca = $_SESSION["seg"];
$user = $_SESSION["perfil"];

if($seguranca == "rato")
{
echo "


<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Document</title>
</head>
<body>
    HOME | SOBRE | CONTATO | 
    <a href='sair.php'>
    SAIR 
    </a>
    
    <br/>
asdfadasdas
</body>
</html>

";

}
else
{
    echo "
       
        <script>
           alert('Obrigado');
           document.location.href = 'index.php';    
        </script>
    
    ";

}

?>

