<?php

    if(isset($_POST['campo_nome'])){

        $nome = $_POST['campo_nome'];
        $fabricante = $_POST['campo_fabricante'];
        $tecn_impressao = $_POST['campo_impressora'];
        $multifuncional = $_POST['campo_multifuncional'];
        $preco = $_POST['campo_preco'];
        $qtd_estoque = $_POST['campo_estoque'];

        $sql = "INSERT INTO impressoras(nome,fabricante,tecn_impressao,multifuncional,preco,qtd_estoque)VALUES('$nome','$fabricante','$tecn_impressao','$multifuncional','$preco','$qtd_estoque')";
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