<?php 
if (isset($_POST['nome']) && empty($_POST['nome'])==FALSE){
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);
    
    
}
?>

<form method="POST">
	Nome: <br/>
	<input type="text" name="nome"/><br/><br/>
	
	E-mail: <br/>
	<input type="text" name="email"/><br/><br/>
	
	Senha: <br/>
	<input type="password" name="senha"/><br/><br/>
	
	<input type="submit" value="Cadastrar"/>
</form>
