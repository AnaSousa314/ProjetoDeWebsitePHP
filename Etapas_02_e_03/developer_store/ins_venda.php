<?php

    if(isset($_POST['campo_venda'])){

        $cliente = $_POST['campo_cliente'];
        $funcionario = $_POST['campo_funcionario'];
        $desktop = $_POST['campo_desktop'];
        $laptop = $_POST['campo_laptop'];
        $impressora = $_POST['campo_impressora'];
        $venda = $_POST['campo_venda'];
        $preco = $_POST['campo_preco'];

        $sql = "INSERT INTO vendas(cliente,funcionario,desktop,laptop,impressora,data_venda,preco)VALUES('$cliente','$funcionario','$desktop','$laptop','$impressora','$venda','$preco')";

        include "conexao.php";

        if (mysqli_query($con, $sql)) {
            //header("Location:index.php?p=cc");
            echo "ok";
        }else{
            echo "Erro: " . $sql . "<br>";
            
            //mysqli_error($con);
        }
        mysqli_close($con);
    }else{
        echo "erro";
    }

?>