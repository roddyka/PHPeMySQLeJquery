<?php
$idaluno = $_POST["idaluno"];
$nome = $_POST["nome"];
$email = $_POST["email"];
$cpf = $_POST["cpf"];
$artemarcial = $_POST["marcial"];

include_once 'conexao.php';

$sql = "update alunos set nome = '".$nome."', email = '".$email."', cpf = '".$cpf."', arte_marcial = '".$artemarcial."' where idaluno = '".$idaluno."' ";

if(mysqli_query($con, $sql)){
    
    $msg = "Atualizado com sucesso";
}else{
    $msg = "Erro ao atualizar!";
}

echo "<script>
    
    alert('".$msg."');
    location.href='index.php';

    </script>";

mysqli_close($con);
?>