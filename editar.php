<?php
 require 'config.php';
 
 $id = 0;
 
 if(isset($_GET['id']) && empty($_GET['id']) == FALSE){
     
     $id = addslashes($_GET['id']);
     $sql = "SELECT * FROM usuarios WHERE id = '$id'";
     $sql = $pdo->query($sql);
     if($sql->rowCount() > 0){
         $dado = $sql->fetch();
     } else {
         header("Location: index.php");
     }
     
 } else {
     header("Location: index.php");
 }
 
 ?>
 
 <form method="POST">
 	Nome: <br/>
	<input type="text" name="nome" value="<?php echo $dado['nome']?>" /><br/><br/>
	
	E-mail: <br/>
	<input type="text" name="email" value="<?php echo $dado['email']?> "/><br/><br/>
	
	Senha: <br/>
	<input type="password" name="senha"/><br/><br/>
	
	<input type="submit" value="Atualizar"/>
 	
 </form>