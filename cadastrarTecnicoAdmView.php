<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="Estilo/style.css" />
        <title>Cadastrar Tecnico Administrativo</title>
    </head>
    <body>
        <div id="tudo">
            <?php require_once 'cabecalho.php' ?>;
            <div id="conteudo">
                <form action="cadastrarTecnicoAdm.php" autocomplete="off" class="form-control" name="cadastroTecnicoAdm" method="post">
                    <table align="center">
                        <tr valign="baseline">    
                            <td nowrap="nowrap" align="right">CPF:</td>
                            <td><input type="text" required name="cpf_tecnicoAdm" value="" /></td>
                        </tr>
                        <tr valign="baseline">
                            <td nowrap="nowrap" align="right">SIAPE:</td>    
                            <td><input type="text" required name="SIAPE" value="" /></td>
                        </tr>
                        <tr valign="baseline">
                            <td nowrap="nowrap" align="right">Trabalha em:</td>
                            <td><input type="text" required name="trabalha_em" value="" /></td>
                        </tr>
                        <tr valign="baseline">

                            <td colspan="2"><input type="submit" value="Cadastrar Tecnico Administrativo" name="enviarTecnicoAdministrativo" /></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </body>
</html>