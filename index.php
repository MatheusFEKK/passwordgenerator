<?php include 'navbar.php' ?>
<?php include 'config/connect.php' ?>

<div class="container">
    <div class="box">
        <div class="row">
            <div class="col s6" style="float: left;">
                <h6 style="color: white;">Escolha a quantidade de letras: </h6>
                <input type="range" class="slider z-depth-1" value="1" min="1" max="50" id="lengthletters"
                    onchange="passwordgenerator()">
                <p>Valor selecionado: <span id="valueselectedletter"></span> </p>
                <br>
                <h6 style="color: white;">Escolha a quantidade de números: </h6>
                <input type="range" class="slider z-depth-1" id="lengthnumbers" value="1" min="1" max="50"
                    onchange="passwordgenerator()">
                <p>Valor selecionado: <span id="valueselectednumber"></span></p>
                <br><br>
            </div>
            <div class="col s6 aside" style="padding-top:6rem; padding-left:2rem;">
                <input type="text" class="z-depth-1" id="password_creating" value="" onchange="clear()"
                    onkeypress="return false" disabled>
                <button onclick="copy()">Copiar</button>
                <button onclick="passwordgenerator()">Atualizar</button>
                <!-- <button class="morevalue" onclick="add(), passwordgenerator()" style="float: right; border-radius: 2rem; width: 2rem; height: 2rem;">+</button>
                        <button class="lessvalue" onclick="less(), passwordgenerator()" style="float: left; border-radius: 2rem; width: 2rem; height: 2rem;">-</button> -->

                <!-- <button onclick="passwordgenerator()">atualizar</button> -->
            </div>
        </div>
    </div>
</div>





<script type="text/javascript" src="lib/materialize.min.js"></script>
<script src="javascript/script.js"></script>
</body>
</html>