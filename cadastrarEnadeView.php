<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->


<html>
    <head>
        <meta charset="UTF-8">
         <link rel="stylesheet" type="text/css" href="../Estilo/style.css"/>
        <title>Cadastrar Conceito ENADE</title>
    </head>
    <body>
       <div id="tudo">
           <?php require('cabecalho.php'); ?>
           <div id="conteudo">
               <h1> Cadastrar Conceito ENADE (Curso) </h1>
               <form action="cadastrarConceitoEnade.php" autocomplete="off" class="form-control" name="cadastroConceito" method="post">
            <table align="center">
            <tr valign="baseline">    
            <td nowrap="nowrap" align="right">Ano:</td>
            <td><input type="text" required name="ano" value="" /></td>
            </tr>
            <tr valign="baseline">
            <td nowrap="nowrap" align="right">Conceito:</td>    
            <td><input type="text" required name="conceito" value="" /></td>
            </tr>
            <tr valign="baseline">
            <td nowrap="nowrap" required align="right">Código Curso:</td>
            <td><input type="text" required name="codigo" value="" /></td>
            </tr>
            <tr valign="baseline">
                <td colspan="2"><input type="submit" value="Cadastrar" name="enviarConceito" /></td>
            </tr>
            </table>
        </form><br/><br/>

        <h1> Cadastrar Nota ENADE (Estudante) </h1>
               <form action="cadastrarNotaEnade.php" autocomplete="off" class="form-control" name="cadastroConceito" method="post">
            <table align="center">
            <tr valign="baseline">    
            <td nowrap="nowrap" align="right">CPF:</td>
            <td><input type="text" required name="cpf" value="" /></td>
            </tr>
            <tr valign="baseline">
            <td nowrap="nowrap" align="right">Nota:</td>    
            <td><input type="text" required name="nota" value="" /></td>
            </tr>
            <tr valign="baseline">
            <td nowrap="nowrap" required align="right">Data:</td>
            <td><input type="text" required name="data" value="" /></td>
            </tr>
            <tr valign="baseline">
            <td nowrap="nowrap" required align="right">Ano:</td>
            <td><input type="text" required name="ano" value="" /></td>
            </tr>
            <tr valign="baseline">
            
                <td colspan="2"><input type="submit" value="Cadastrar" name="enviarNota" /></td>
            </tr>
            </table><br/><br/>
           </div>
       </div>
    </body>
</html>
