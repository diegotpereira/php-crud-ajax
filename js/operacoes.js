$(document).ready(function($) {
    $('#addNovoUsuario').click(function() {
        $('#usuarioInserirAtualizarForm').trigger("reset");
        $('#usuarioModelo').html("Adicionar Novo Usuário");
        $('#usuario-modelo').modal('show');
    });
    $('body').on('click', '.editar', function() {
        var id = $(this).data('id');

        // AJAX
        $.ajax({
            type: "POST",
            url: "editar.php",
            data: {
                id: id
            },
            dataType: 'json',
            success: function(res) {
                $('#usuarioModelo').html("Editar Usuário");
                $('#usuario-modelo').modal('show');
                $('#id').val(res.id);
                $('#nome').val(res.nome);
                $('#idade').val(res.idade);
                $('#email').val(res.email);
            }
        });
    });

    $('body').on('click', '.deletar', function() {
        if (confirm("Deletar registro?") == true) {
            var id = $(this).data('id');

            // AJAX 
            $.ajax({
                type: "POST",
                url: "deletar.php",
                data: {
                    id: id
                },
                dataType: 'json',
                success: function(res) {
                    $('#nome').val(res.nome);
                    $('#idade').val(res.idade);
                    $('#email').val(res.email);
                    window.location.reload();
                }
            });
        }
    });
    $('#usuarioInserirAtualizarForm').submit(function() {

        // AJAX 
        $.ajax({
            type: "POST",
            url: "inserir_atualizar.php",
            data: $(this).serialize(),
            dataType: 'json',
            success: function(res) {
                window.location.reload();
            }
        });
    });
});