<?php

    if(isset($_POST['campo_nome'])){

        $nome = $_POST['campo_nome'];
        $fabricante = $_POST['campo_fabricante'];
        $processador = $_POST['campo_processador'];
        $mem_ram = $_POST['campo_memRam'];
        $hd = $_POST['campo_HD'];
        $preco = $_POST['campo_preco'];
        $qtd_estoque = $_POST['campo_estoque'];

        $sql = "INSERT INTO desktops(nome,fabricante,processador,mem_ram,hd,preco,qtd_estoque)VALUES('$nome','$fabricante','$processador','$mem_ram','$hd','$preco','$qtd_estoque')";
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