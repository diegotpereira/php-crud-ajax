<?php 
     include 'config/dataBase.php';

     $id = $_POST['id'];
     $query = "DELETE FROM usuarios WHERE id = '" . $id . "'";
     $res = mysqli_query($conexao, $query);

     if ($res) {
         # code...
         echo json_encode($res);
     } else {
         # code...
         echo "Error: " . $sql . "" . mysqli_error($conexao);
     }
?>