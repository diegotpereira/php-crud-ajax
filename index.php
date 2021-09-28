<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Crud Ajax</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    

</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-md-9 mt-1 mb-1" align="center">
                <h2 class="text-white bg-dark">Operações em PHP na mesma página usando Ajax.</h2>
            </div>
            <div class="col-md-8 mt-1 mb-2">
                <button type="button" id="addNovoUsuario" class="btn btn-success">
                    Novo Usuário
                </button>
            </div>
                <div class="col-md-8">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Idade</th>
                                <th scope="col">email</th>
                                <th scope="col">Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                 include 'config/dataBase.php';
                                 $query = "SELECT * FROM usuarios LIMIT 150";
                                 $result = mysqli_query($conexao, $query);
                            ?>

                            <?php if ($result->num_rows > 0): ?>
                            <?php while($array = mysqli_fetch_row($result)): ?>
                            
                                <tr>
                                    <th scope  = "row"><?php echo $array[0]; ?></th>
                                    <td><?php echo $array[1]; ?></td>
                                    <td><?php echo $array[2]; ?></td>
                                    <td><?php echo $array[3]; ?></td>
                                    <td>
                                        <a href="javascript:void(0)" class="btn btn-primary editar" data-id="<?php echo $array[0];?>">Editar</a>
                                        <a href="javascript:void(0)" class="btn btn-danger deletar" data-id="<?php echo $array[0];?>">Deletar</a>
                                    </td>
                                </tr>
                                <?php endwhile; ?>
                                <?php else: ?>
                                <tr>
                                    <td colspan="3" rowspan="1" headers="">Nenhum dado encontrado</td>
                                </tr>
                                <?php endif; ?>
                                <?php mysqli_free_result($result); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Bootstrap Model -->
        <div class="modal fade" id="usuario-modelo" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="usuarioModelo"></h4>
                    </div>
                    <div class="modal-body">
                        <form action="javascript:void(0)" id="usuarioInserirAtualizarForm" name="usuarioInserirAtualizarForm" class="form-horizontal" method="POST">
                            <input type="hidden" name="id" id="id">
                            <div class="form-group">
                                <label for="nome" class="col-sm-2 control-label">Nome</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome" value="" maxlength="50" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="idade" class="col-sm-2 control-label">Idade</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="idade" name="idade" placeholder="Digite sua idade" value="" maxlength="50" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-12">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu email" value="" required>
                                </div>
                            </div>
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary" id="btn-salvar" value="addNovoUsuario">
                                    Salvar alterações
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer"></div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="js/operacoes.js"></script>
   </body>
</html>