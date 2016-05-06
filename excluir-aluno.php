<?php
        $idaluno = $_GET["idaluno"];
        
        include_once 'conexao.php';
        
        $sql = "delete from alunos where idaluno = '".$idaluno"'";
        
        if(mysqli_query($con, $sql)){
            $msg = "Excluido com sucesso!";
        }else{
            $msg = "Erro ao excluir!";
        }
        
        echo "<script>
            alert('".$msg."'); location.href='index.php';
            </script>";
        mysqli_close($con);
        ?>
