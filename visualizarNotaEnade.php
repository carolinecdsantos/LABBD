<?php
require_once 'connectToSQLServer.php';

/*recebe o ano do formulário e insere na variável '$ano'*/
$cpf = $_POST['cpf_enade'];

$tsql = "SELECT * FROM ENADE_realizado, Pessoa where ENADE_realizado.cpf_estudante = $cpf and
         Pessoa.cpf_pessoa = $cpf";
$stmt = sqlsrv_query($conn, $tsql);
?>

<html>
    <head>
        <meta charset="UTF-8"/>
        <title>ENADE: Desempenho Individual</title>
    </head>
    <link rel="stylesheet" type="text/css" href="Estilo/style.css">
    <body>
        <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="modalLabel">Excluir Item</h4>
                    </div>
                    <div class="modal-body">
                        <h2> Deseja realmente excluir este item?</h2>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Sim</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">N&atilde;o</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="tudo">
<?php require_once 'cabecalho.php'; ?>
            <div id="conteudo">
                <h1> ENADE: Desempenho Individual </h1>
                <table border="1" align="center">
                    <tr align="center" style="font-weight:bold">
                        <td>Nome</td>
                        <td>Sobrenome</td>
                        <td>Nota</td>
                        <td>Ano</td>
                    </tr>
<?php while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) { ?>
                        <tr>
                            <td><?php echo $row['nome']; ?>&nbsp; </td>
                            <td><?php echo $row['sobrenome']; ?>&nbsp; </td>
                            <td><?php echo $row['nota']; ?>&nbsp; </td>
                            <td><?php echo $row['ano']; ?>&nbsp; </td>
                            <td class="actions">
                                <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal">Excluir</button>
                            </td>
                        </tr>
<?php } ?>

                </table>
                <br />

            </div>


        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    </body>
</html>

<?php
sqlsrv_close($conn);
?>
