<?php

$nome = $_POST["nome"];

if($nome != "" ){

//echo $nome;

include_once 'conexao.php';

$sql = "select * from alunos inner join pagamento on alunos.idaluno = pagamento.id_aluno  where nome like '".$nome."' order by dtpag desc";


$result = mysqli_query($con, $sql);

if(mysqli_num_rows($result) >0 ){
	



    ?>
<table class="table">
    <tr>

		<th>Pagamento</th>
		<th>Nome</th>
		
      
    </tr>

    
  <?php
    
    while($row = mysqli_fetch_array($result)){

     
        ?>
        
        <tr>
		
				<th><?php echo $row["dtpag"];?></th>
				<th><?php echo $row["nome"];?></th>
				

 
        </tr>
       
       
        <?php
         
    }
    
    echo "</table>";
    
}else{
 echo "Nenhum Aluno encontrado!";   
} 
   
mysqli_close($con);
    
}

?>