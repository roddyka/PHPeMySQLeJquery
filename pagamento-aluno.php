<?php

$dtpag = $_POST["dtpag"];
$idaluno = $_POST["nome"];

$dtpag = explode("/", $dtpag);
$dtpag = array_reverse($dtpag);
$dtpag = implode ("-", $dtpag);



include_once 'conexao.php';

$sql = "insert into pagamento values(null,'".$dtpag."','".$idaluno."')";

if(mysqli_query($con,$sql)){
	echo "Pagamento efetuado!";
	echo "<br><a href='index.php'>Voltar</a>";
		
}else{
	echo "Erro ao pagar";
}

mysqli_close($con);
			
?>