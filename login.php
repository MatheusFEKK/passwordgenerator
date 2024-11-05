<?php include_once 'navbar.php';
    include_once 'configs/database.php';
    include_once 'objects/usuario.php';
$db = new connection();
$db = $db->makingconnection();
if($db){
    $usuario = new usuario($db);
}
?>
<div class="container">
    <form action="login.php" method="post">
    <div class="box">
            <h3 style="color: white; margin-bottom:2rem;">LOGIN</h3>
            <input class="input-user shadow" type="text" name="email" placeholder="E-MAIL">
            <input class="input-user shadow" type="text" name="senha" placeholder="SENHA">
            <div class="buttons">
                <button class="user-btn shadow">ENTRAR</button><br>
        </form>
    </div>
    </div>
</div>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $usuario->login($_POST['email'], $_POST['senha']);
    }
?>



</body>
</html>