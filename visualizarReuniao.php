<?php
require_once 'connectToSQLServer.php';


$tsql = "SELECT * FROM v_visualizaReuniao";
$stmt = sqlsrv_query($conn, $tsql);
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

        <title>Reunião</title>
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
                <h1> Reunião </h1>
                <table border="1" align="center">
                    <tr align="center" style="font-weight:bold">
                        <td>Numero de Ordem</td>
                        <td>Pauta</td>
                        <td>Tipo de Reunião</td>
                        <td>Continuação?</td>
                        <td>Data</td>
                        <td>Nome do Curso Responsável</td>
                        <td>Sigla da Coordenação de Curso</td>

                    </tr>
<?php while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) { ?>
                        <tr>
                            <td><?php echo $row['nroOrdem']; ?>&nbsp; </td>
                            <td><?php echo $row['pauta']; ?>&nbsp; </td>
                            <td><?php echo $row['tipoReuniao']; ?>&nbsp; </td>
                            <td><?php echo $row['continuacao']; ?>&nbsp; </td>
                            <td><?php echo date_format($row['data'], 'd/m/Y'); ?>&nbsp; </td>
                            <td><?php echo $row['nomeCurso']; ?>&nbsp; </td>
                            <td><?php echo $row['siglaCoordenacaoCurso']; ?>&nbsp; </td>

                            
                                
                            <td class="actions">
                                <a class="btn btn-danger btn-xs" href="excluiReuniao.php?nroOrdem=<?php echo $row['nroOrdem'];?>">Excluir</a>
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



