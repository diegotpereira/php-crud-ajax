<?php
     $host = 'localhost';
     $usuario = 'root';
     $senha = 'root';
     $nomeBanco = "db_php_crud_ajax_master";

     $conexao = mysqli_connect($host,$usuario, $senha, $nomeBanco);

     if (!$conexao) {
         # code...
         die('Falha na conexão com banco de dados:'.mysqli_connect_error());
     }