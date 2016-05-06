<?php

$nome = $_POST["nome"];
$email = $_POST["email"];
$dtnasc = $_POST["dtnasc"];
$cpf = $_POST["cpf"];
$foto = $_FILES["foto"]; //array
$marcial = $_POST["marcial"];

$dtnasc = explode("/", $dtnasc);
$dtnasc = array_reverse($dtnasc);
$dtnasc = implode ("-", $dtnasc);


            /*echo var_dump($foto);
            array (size=5)
                'name' => string 'foto.ferias.jpg' (length=14)
                'type' => string 'image/jpeg' (length=10)
                'tmp_name' => string 'C:\wamp\tmp\php7022.tmp' (length=23)
                'error' => int 0
                'size' => int 561276*/


           //Descobrir a extensÃ£o do arquivo enviado
            
            $ext = explode(".", $foto["name"]); //[foto][ferias][JPG]
            $ext = array_reverse($ext); //[JPG][ferias][foto]
            $ext = strtolower($ext[0]); //jpg 
            
            //echo $ext;
            
            //Validar a extensao
            if($ext != "jpg" && $ext != "jpeg" && $ext != "gif" && $ext != "png"){
                echo "Arquivo inválido!";                
            }elseif($foto["size"] > 1024*800){
                echo "Tamanho excedido!";
            }else{
                //echo "ok";
                $nomefoto = date("YmdHis").rand(1000,9999).".".$ext;                
                //echo $nomefoto;


include_once 'conexao.php';

$sql = "insert into alunos values(null,'".$nome."','".$email."','".$dtnasc."','".$cpf."','".$nomefoto."','".$marcial."')";

if(mysqli_query($con,$sql)){
	echo "Aluno gravado com sucesso!";
	echo "<br><a href='index.php'>Voltar</a>";
	
	move_uploaded_file($foto["tmp_name"], "./uploads/".$nomefoto);

	
}else{
	echo "Erro ao gravar aluno";
}

mysqli_close($con);
			}
?>