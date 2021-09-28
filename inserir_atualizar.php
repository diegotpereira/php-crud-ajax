<?php 
    if (count($_POST) > 0) {
        # code...
        include 'config/dataBase.php';
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $email = $_POST['email'];

        if (empty($_POST['id'])) {
            # code...
            $query = "INSERT INTO usuarios (nome, idade, email) VALUES ('$nome', '$idade', '$email')";
        }else {
            $query = "UPDATE usuarios SET id='" . $_POST['id'] . "', nome = '" . $_POST['nome'] . "', idade = '" . $_POST['idade'] . "', email = '" . $_POST['email'] . "' WHERE id = '" . $_POST['id'] . "'";
        }
        $res = mysqli_query($conexao, $query);
        if ($res) {
            # code...
            echo json_encode($res);
        } else {
            # code...
            echo "Error: " . $sql . "" .mysqli_error($conexao);
        }   
    }
?>