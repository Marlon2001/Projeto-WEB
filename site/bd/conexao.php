<?php 
    function getConexaoMySQL(){
        $conexao = null;
        
        $server = "localhost";
        $user = "root";
        $password = "bcd127";
        $database = "db_rrcb";

        $conexao = @mysqli_connect($server, $user, $password, $database);

        return $conexao;
    }
?>