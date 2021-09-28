<?php
     include "config/dataBase.php";
     $id = $_POST['id'];
     $query = "SELECT * FROM usuarios WHERE id = '" .$id . "'";
     $result = mysqli_query($conexao, $query);
     $data = mysqli_fetch_array($result);
     if ($data) {
         # code...
         echo json_encode($data);
     } else {
         # code...
         echo "Error: " .$sql . "" . mysqli_error($conexao);
     }
?>