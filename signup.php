<?php include_once 'navbar.php'; 
?>

    <div class="container">
        <form action="redirect.php" method="post">
            <div class="box">
                <h3 style="color: white; margin-bottom:2rem;">CADASTRO</h3>
                <input class="input-user shadow" type="text" name="nome" placeholder="NOME">
                <input class="input-user shadow" type="text" name="email" placeholder="E-MAIL">
                <input class="input-user shadow" type="text" name="senha" placeholder="SENHA">
                <div class="buttons">
                    <button class="user-btn shadow" name="cadastrar">CADASTRAR</button><br>
                </div>
            </form>
        </div>
</div>


</body>
</html>