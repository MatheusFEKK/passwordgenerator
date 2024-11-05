<?php
    include_once'configs/database.php';
    include_once'objects/usuario.php';


    $banco = new connection();
    $db = $banco->makingconnection();
    $user = new usuario($db);

    if (isset($_POST['cadastrar'])){
        $user->nome = $_POST['nome'];
        $user->email = $_POST['email'];
        $user->senha = $_POST['senha'];
        if ($user->cadastro()){
            header('Location: signup.php');
        }
    }

    if (isset($_GET['delete'])){
        if($user->deleteuser($_GET['delete'])){
            header ('Location: signup.php');
        }
    }

