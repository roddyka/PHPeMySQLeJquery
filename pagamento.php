<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Pagamento por Aluno</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.validate.js"></script>
    <script src="js/maskedinput-1.1.2.pack.js"></script>
    
 
    
	 <script>
    
         
   
	
        $(document).ready(function(){
        
            $("#fcadastro").validate();
            
            $("#dtpag").mask("99/99/9999");
            $("#cpf").mask("999.999.999-99");
        });
        
        
    
    
        
    </script>
    
    
</head>
<body>
    
    <div class="container">
        <h1>Marcação de pagamento</h1>
        
		<form action="pagamento-aluno.php" method="post" id="fcadastro" enctype="multipart/form-data">
            
            <label for="">
                Nome:<br>
                <select name="nome" id="" class="required" id="selecionaaluno">
                    <option value="">Alunos</option>
                    
                    <?php
                    include_once 'conexao.php';

                $sql = "select * from alunos order by nome"; 
				
                    $result = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_array($result)){
?>
                    <option  value="<?php echo $row["idaluno"];?>"><?php echo $row["nome"];?></option>
					
                    <?php
                    
   
    
} mysqli_close($con);
                    ?>
                    
                </select>
            </label>
			
			
			<label for="">
                Data de Pagamento:<br>
                <input type="text" name="dtpag" class="required dateBR" id="dtpag"><br>
            </label>
			
			
			
			
            
            
            
            <input type="submit" value="Clique para pagar" class="btn btn-sucess">
			
			<br><br>
			
			<a href="verificar-pagantes.php">Tabela de Pagantes</a>
            
            
        </form>
    </div>
    
</body>
</html>
