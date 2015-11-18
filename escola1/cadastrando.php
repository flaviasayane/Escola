<?php 
 require ("configs/connection.php");
 ?>
<html>
    <head>

    </head>

    <body>
        <?php
        $nome = isset($_POST['nome']) ? $_POST['nome'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $telefone = isset($_POST['telefone']) ? $_POST['telefone'] : '';
        $senha = isset($_POST['senha']) ? $_POST['senha'] : '';
        $cpf = isset($_POST['cpf']) ? $_POST['cpf'] : '';
        
        


        mysqli_query($link, "INSERT usuario (nome,email,telefone,senha,cpf) VALUES ($nome,$email,$telefone,$senha,$cpf)");
        
        header("location:cadastro.php");
        ?>

            

        
</body>

</html>
