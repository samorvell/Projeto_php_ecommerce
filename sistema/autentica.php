<?php
session_start();
include "servicos/conexao.php";
include "classes/Usuario.php";
$usu = new Usuario($servidor,$usuario,$senha);

if(isset($_POST["email"]) && isset($_POST["senha"])){

    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);
    
    if($usu->login($email,$senha)==true){
        
       header("Location:area-restrita.php");

    }else{
        header("Location:login.php");
    }

}else{
    header("Location:login.php");
}

?>