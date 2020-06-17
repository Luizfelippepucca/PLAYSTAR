<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensagem Form</title>
</head>
<style>
    body{
        margin:0px;
        padding :0px;
        text-align:center;
        margin-top:400px;
        
    }
    h2{
        color:purple;
    }
    h3{
        color:red;
    }
    h4{
        color:purple;
    }
    
</style>
<body>
<?php
require_once "autentica.php";
?>
<h1><?php
  
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  if(isset($_POST['nome']) && !empty($_POST['nome']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['phone']) && !empty($_POST['phone'])){
          echo "<h4>"." Olá ".$nome. " <br> ". " Seu email é ".$email."</h4>"."<br>" . "<h2>"." Obrigado por entrar em Contato "."<br>"." Retornaremos em breve"."</h2>";
          
 }else{
     echo "<h3>". "Dados inválidos "."<br>". "Volte a página e preencha os Campos corretamente"."</h3>" ;
 }
 
     

?></h1>
</body>
</html>



