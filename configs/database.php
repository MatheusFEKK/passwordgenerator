<?php 

    Class connection {
        private $host = 'localhost:3308';
        private $database = 'db_passwordmanager';
        private $user = 'root';
        private $password = '';
        public $conn;

        public function makingconnection(){
            $this->conn = null;

            try {
                $this->conn = New PDO("mysql:host=$this->host; dbname=$this->database;", $this->user, $this->password);
            }catch (PDOException $error){
                echo $error -> getMessage();
            }
            return $this->conn;
        }
    }

