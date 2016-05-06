<?php

$login = $_POST["login"];
$senha = md5($_POST["senha"]);

include_once 'conexao.php';

$sql = "select * from usuarios where login = '".$login."' and senha = '".$senha."'";

$result = mysqli_query($con, $sql);
    
    if(mysqli_num_rows($result) == 1){
		
	$row = mysqli_fetch_array($result);
        
        $_SESSION["nome"] = $row["nome"];
        $_SESSION["login"] = $row["login"];
        $_SESSION["perfil"] = $row["perfil"];
        
       header("location:painel.php");
	
	}
	else{
		echo "falha!";
		
		$msg = "Login/Senha invalido(s)";
        header("location:index.php?msg=".$msg); //redirecionamento em php
	}




?>