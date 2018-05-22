<?php 
    require 'config.php';
?>

<table border="0" width="100%">
  <tr>
    <th>Nome</th>
    <th>E-mail</th>
    <th>Ações</th>
  </tr>
  
  <?php 
    $sql = "SELECT * FROM usuarios";
    $sql = $pdo->query($sql);
    if($sql->rowCount() > 0 ){
        foreach ($sql->fetchAll() as $usuario){
            echo '<tr>';
            echo '<td>'.$usuario['nome'].'</td>';
            echo '<td>'.$usuario['email'].'</td>';
            echo '<td> </td>';
            echo '</tr>';

        }
    }
  
  ?>  
</table>
