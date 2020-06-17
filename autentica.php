<?php
 $nome = $_POST['nome'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
 $erro = false;
 if(isset($_POST['nome']) && !empty($_POST['nome'])){

}else{
    echo $erro;
}


 if(isset($_POST['email']) && !empty($_POST['email'])){
    
 }else{
     echo $erro;
    }

    if(isset($_POST['phone']) && !empty($_POST['phone'])){
    
    }else{
        echo $erro;
       }
    
?>

