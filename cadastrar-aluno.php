<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Alunos</title>
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
        <h1>Cadastro de Alunos</h1>
        <form action="gravar-aluno.php" method="post" id="fcadastro" enctype="multipart/form-data">
            
            <label for="">
                Nome:<br>
                <input type="text" name="nome" class="required" minlenght="3"><br>
            </label>
            
            <label for="">
                E-mail:<br>
                <input type="text" name="email" class="required email" id="email"><br>
            </label>
            
            <label for="">
                Confirme seu e-mail:<br>
                <input type="text" name="confirmaemail" class="required email" equalTo="#email"><br>
            </label>
            
            <label for="">
                Data de Nascimento:<br>
                <input type="text" name="dtnasc" class="required dateBR" id="dtnasc"><br>
            </label>
            
            <label for="">
                Cpf:<br>
                <input type="text" name="cpf" class="required cpf" id="cpf"><br>
            </label>
			
			
                <label>
                    Foto:<br>
                    <input type="file" name="foto">
                </label>

            
            <label for="">
                Arte Marcial:<br>
                <select name="marcial" id="" class="required">
                    <option value="">Escolha</option>
                    
                    <?php
                    include_once 'conexao.php';

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
            
            
            
            <input type="submit" value="Cadastrar" class="btn btn-sucess">
            
            
        </form>
    </div>
    
</body>
</html>
