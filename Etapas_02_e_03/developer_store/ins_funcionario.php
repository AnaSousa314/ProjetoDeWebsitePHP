<?php

    if(isset($_POST['campo_nome'])){

        $nome = $_POST['campo_nome'];
        $sobrenome = $_POST['campo_sobrenome'];
        $cargo = $_POST['campo_cargo'];
        $email = $_POST['campo_email'];
        $login = $_POST['campo_login'];
        $senha = $_POST['campo_senha'];

        $sql = "INSERT INTO funcionarios(nome,sobrenome,cargo,email,login,senha)VALUES('$nome','$sobrenome','$cargo','$email','$login','$senha')";
        include "conexao.php";

        if (mysqli_query($con, $sql)) {
           // mysqli_close($con);
            echo "ok";
        }else{
            echo "Erro: " . $sql . "<br>" . mysqli_error($con);
        }
         mysqli_close($con);

    }else{
        echo "erro";
    }

?>