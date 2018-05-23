<?php
 require 'config.php';
 
 $id = 0;
 
 if(isset($_GET['id']) && empty($_GET['id']) == FALSE){
     
     $id = addslashes($_GET['id']);
     
     
 } else {
     header("Location: index.php");
 }
 
 ?>
 
 <form method="POST">
 	Nome: <br/>
	<input type="text" name="nome" value=""/><br/><br/>
	
	E-mail: <br/>
	<input type="text" name="email" value=""/><br/><br/>
	
	Senha: <br/>
	<input type="password" name="senha" value=""/><br/><br/>
	
	<input type="submit" value="Atualizar"/>
 	
 </form>