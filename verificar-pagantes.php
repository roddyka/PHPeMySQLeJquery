<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    
    <script src="js/jquery.min.js"></script>
    
    <script>
    
    $(document).ready(function(){
    
        $("#buscaaluno").keyup(function(){
         
            var vnome = $("#buscaaluno").val();
            
        //alert(vnome);
            
            $.post("consultapagante.php",
                   {nome:vnome},
                   function(resposta){ 
                
                $("#conteudo").html(resposta);
            
            });
            
        });
    
    
    });
        
    </script>
    
</head>
<body>
    
    <div class="container">
        
        <h1>Pagantes</h1>
		
		<?php
		

		
		?>
        
      <form class="form-inline">
               <label for="" >
                Nome:
                <input type="text" class="required" id="buscaaluno"><br>
            </label>
            </form>
            <hr>
            
            <div id="conteudo">
                
                
                
            </div>
			
			<a href="painel.php">Voltar</a>
        
    </div>
    
</body>
</html>