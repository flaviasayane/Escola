<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form id="cadastro" name="cadastro" method="post" action="cadastrando.php" >
            <table width="625" border="0">
                <tr>
                    <td width="69">Nome:</td>
                    <td width="546"><input name="nome" type="text" />
                        <span class="style1">*</span></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input name="email" type="text" />
                        <span class="style1">*</span></td>
                </tr>
                <tr>
                    <td>Telefone:</td>
                    <td><input name="telefone" type="text" />
                        <span class="style1">*</span></td>
                </tr>
                <td>CPF:</td>
                <td><input name="cpf" type="text"/>
                    <span class="style1">*</span></td>

                <tr>


                <tr>
                    <td>Senha:</td>
                    <td><input name="senha" type="password" />
                        <span class="style1">*</span></td>
                </tr>
                <tr>
                    <td colspan="2"><p>
                            <input name="cadastrar" type="submit" />



                            <span class="style1">* Campos com * são obrigatórios!  </span></p>
                        <p>  </p></td>
                </tr>
            </table>
        </form>

    </body>
</html>
