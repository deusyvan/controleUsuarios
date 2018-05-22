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
        echo 'Ta tudo bem.';
    }
  
  ?>
  <tr>
    <td>Row 1: Col 1</td>
    <td>Row 1: Col 2</td>
    <td>Row 1: Col 3</td>
  </tr>
</table>
