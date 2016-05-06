<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Atualizar Aluno</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.validate.js"></script>
    <script src="js/maskedinput-1.1.2.pack.js"></script>
    
    <script>
    
        $(document).ready(function(){
        
            $("#fcadastro").validate();
            
            $("#dtnasc").mask("99/99/9999");
            $("#cpf").mask("999.999.999-99");
        });
        
        
    
    
        
    </script>
    
    
</head>
<body>
    
    <div class="container">
        <h1>Atualizar Aluno</h1>
		
		
            <?php $idaluno = $_GET["idaluno"];
 include_once 'conexao.php';
 $sql = "select * from alunos where idaluno = ".$idaluno;
 $result = mysqli_query($con, $sql);
 $row = mysqli_fetch_array($result);
 
            ?>

		
        <form action="atualizar-aluno.php" method="post" id="fcadastro" enctype="multipart/form-data">
		
		
                <label>
                    <input type="hidden" name="idaluno" required id="numerodealuno" value="<?php echo $row["idaluno"];?>">
                </label>

            
            <label for="">
                Nome:<br>
                <input type="text" name="nome" class="required" minlenght="3" value="<?php echo $row["nome"];?>"><br>
            </label>
            
            <label for="">
                E-mail:<br>
                <input type="text" name="email" class="required email" id="email" value="<?php echo $row["email"];?>"><br>
            </label>
                   
            <label for="">
                Cpf:<br>
                <input type="text" name="cpf" class="required cpf" id="cpf" value="<?php echo $row["cpf"];?>"><br>
            </label>
			
			
             
            <label for="">
                Arte Marcial:<br>
                <select name="marcial" id="" class="required" >
                    <option value="">Escolha</option>
                    
                    <?php
                    $sql = "select * from artemarcial order by nomearte";
                    $result = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_array($result)){
?>
                    <option value="<?php echo $row["idmarci"];?>"><?php echo $row["nomearte"];?></option>
					
                    <?php
                    
   
    
} mysqli_close($con);
                    ?>
                    
                </select>
            </label>
            
            
            
            <input type="submit" value="Atualizar" class="btn btn-sucess">
            
            
        </form>
    </div>
    
</body>
</html>
