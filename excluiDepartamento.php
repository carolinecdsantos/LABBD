<?php require_once 'connectToSQLServer.php';

$sigla = $_GET["sigla"];
// Armazena a query de insercao
$tsql = "DELETE FROM Departamento WHERE siglaOfertante='".$sigla."'";

//executa a query tsql, resultado fica em stmt
$stmt = sqlsrv_query($conn,$tsql);
//verifica se o retorno é falso
if( $stmt === false ){
echo "Statement could not be executed.\n";
 die( print_r( sqlsrv_errors(), true));
}


//se nenhum erro ocorrer, redireciona a pagina
echo '<meta HTTP-EQUIV="Refresh" CONTENT="0.1; URL=visualizarDepartamento.php">';

/* Free statement and connection resources. */
sqlsrv_free_stmt( $stmt);


sqlsrv_close( $conn);




?>
