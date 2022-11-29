<?php
session_start();
$seguranca = $_SESSION["seg"];
$user = $_SESSION["perfil"];
if($seguranca == "rato")
{
echo "HTML";
}
else
{
    echo "      
        <script>
           alert('Obrigado');
           document.location.href = 
		   'index.php';    
        </script>
    
    ";
}
?>


