<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Entre em sua agenda!</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	
	</head>
<body>
    
    <div class="container">
        <h1>Login!</h1>
        <form action="verificar-login.php" method="post" id="fcadastro">
            
            <label for="">
                Login:<br>
                <input type="text" name="login" class="required" minlenght="3"><br>
            </label>
			
			      <label for="">
                Senha:<br>
                <input type="text" name="senha" class="required" minlenght="3"><br>
            </label>
            
			
			     
            
            <input type="submit" value="Entrar" class="btn btn-sucess">
            
            
        </form>
    </div>
    
</body>
</html>