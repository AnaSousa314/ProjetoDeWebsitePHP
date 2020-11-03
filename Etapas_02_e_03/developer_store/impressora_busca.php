<?php
    $sql = "SELECT * FROM impressoras";
    include "conexao.php";
    $resposta = "";
    if ($resultado = mysqli_query($con, $sql)) {
        while ($lh = mysqli_fetch_assoc($resultado)) {
            $resposta .= "<tr>";
            $resposta .= "<td>".$lh['id_impressora']."</td>";
            $resposta .= "<td>".$lh['nome']."</td>";
            $resposta .= "<td>".$lh['fabricante']."</td>";
            $resposta .= "<td>".$lh['tecn_impressao']."</td>";
            $resposta .= "<td>".$lh['multifuncional']."</td>";
            $resposta .= "<td>".$lh['preco']."</td>";
            $resposta .= "<td>".$lh['qtd_estoque']."</td>";
            $resposta .= "</tr>";
        }
        mysqli_close($con);
        echo $resposta;
     }else{
        mysqli_close($con);
        echo "Erro: " . sql. "<br>". mysqli_error($con);
     }

?>