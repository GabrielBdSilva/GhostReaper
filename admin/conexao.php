<?php 
    //header("Access-Control-Allow-Origin: *");

    class Conexao{
        public static function LigarConexao(){
            //server Local
            $conn = new PDO('mysql:dbname=ghostreaper;host=localhost', 'root', '');


              
            return $conn;
        }
    }
?>