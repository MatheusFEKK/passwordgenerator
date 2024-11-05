<?php
        include_once'navbar.php';
        include_once 'configs/database.php';
        include_once'objects/usuario.php';

$banco = new connection();
$db = $banco->makingconnection();
$user = new usuario($db);
?>
<div class="container">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">NOME</th>
        <th scope="col">E-MAIL</th>
        <th scope="col">SENHA</th>
        <th scope="col">MODIFICAÇÕES</th>
      </tr>
    </thead>
    <tbody>
      <?php 
          foreach($user->readAll() as $users){
              echo '<tr><td>'.$users->id_user.'</td>';
              echo '<td>'.$users->nome_user.'</td>';
              echo '<td>'.$users->email.'</td>';
              echo '<td>'.$users->senha.'</td>';
              echo '<td><a href="redirect.php?delete='.$users->id_user.'"><button class="btn btn-danger" name="delete">Delete</button></a><a href="redirect.php?changing='.$users->id_user.'"><button class="btn btn-primary">Update</button></a></td></tr>';
          }
      ?>
    </tbody>
  </table>
</div>