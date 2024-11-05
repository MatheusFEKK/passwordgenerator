<?php

    Class usuario{
        public $nome;
        public $email;
        public $senha;
        private $db;

        public function __construct($db)
        {
            $this->db = $db;
        }

        public function cadastro(){
            // $this->senha = password_hash($senha, PASSWORD_DEFAULT);
            $sql = "INSERT INTO users (nome_user, email, senha) VALUES (:nome, :email, :senha)";
            $result = $this->db->prepare($sql);
            $result->bindParam(':nome', $this->nome, PDO::PARAM_STR);
            $result->bindParam(':email', $this->email, PDO::PARAM_STR);
            $result->bindParam(':senha', $this->senha, PDO::PARAM_STR);

            if($result->execute()){
                return true;
            } else {
                return false;
            }


        }

        public function login ($email, $senha){
            $senha_verif = password_verify($senha, $this->senha);
            $sql = "SELECT email FROM users WHERE email = '$email' and senha = '$senha_verif'";
            $result = $this->db->query($sql);
            $result = $result->execute();


            if ($result){
                session_start();
                echo 'Sessão iniciada!';
            } else {
                echo "Senha não autorizada!";
            }
        }

        public function readAll(){
            $sql = "SELECT * FROM users";
            $stat = $this->db->query($sql);
            $stat->execute();

            return $stat->fetchAll(PDO::FETCH_OBJ);
        }

        public function deleteuser($remove){
            $sql = "DELETE FROM users WHERE id_user = :id_user";
            $stat = $this->db->prepare($sql);
            $stat->bindParam(":id_user", $remove);
            
            if($stat->execute()){
                return true;
            }else {
                return false;
            }
        }

    }
