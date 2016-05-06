<?php

$nome = $_POST["nome"];

if($nome != "" ){

//echo $nome;

include_once 'conexao.php';

$sql = "select * from alunos inner join artemarcial on alunos.arte_marcial = artemarcial.idmarci where nome like '".$nome."%'";


$result = mysqli_query($con, $sql);

if(mysqli_num_rows($result) >0 ){
    ?>
<table class="table">
    <tr>
		<th>Foto</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Dt Nasc</th>
        <th>Cpf</th>
        <th>Arte</th>
		<!--<th>Pagamento</th>-->
        <th>Editar</th>
         <th>Excluir</th> 
    </tr>

    
  <?php
    
    while($row = mysqli_fetch_array($result)){
     
        ?>
        
        <tr>
		<th><img src="uploads/<?php echo $row["foto"]; ?>" alt="" style="width: 50px"></th>
            <th><?php echo $row["nome"];?></th>
             <th><?php echo $row["email"];?></th>
              <th><?php echo $row["dtnasc"];?></th>
               <th><?php echo $row["cpf"];?></th>
                <th><?php echo $row["nomearte"];?></th>
				<!--<th><?php echo $row["dtpag"];?></th>-->
				<td><a href="editar-aluno.php?idaluno=<?php echo $row["idaluno"]?>" class="btn btn-warning">Editar</a></td>
                    <td><a href="#" onclick="excluir(<?php echo $row["idaluno"]?>)" class="btn btn-danger">Excluir</a></td>

 
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