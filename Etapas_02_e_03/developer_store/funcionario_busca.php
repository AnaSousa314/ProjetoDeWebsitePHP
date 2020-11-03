<?php
    $sql = "SELECT * FROM funcionarios";
    include "conexao.php";
    $resposta = "";
    if ($resultado = mysqli_query($con, $sql)) {
        while ($lh = mysqli_fetch_assoc($resultado)) {
            $resposta .= "<tr>";
            $resposta .= "<td>".$lh['id_funcionario']."</td>";
            $resposta .= "<td>".$lh['nome']."</td>";
            $resposta .= "<td>".$lh['sobrenome']."</td>";
            $resposta .= "<td>".$lh['cargo']."</td>";
            $resposta .= "<td>".$lh['email']."</td>";
            $resposta .= "<td>".$lh['login']."</td>";
            $resposta .= "<td>".$lh['senha']."</td>";
            $resposta .= "</tr>";
        }
        mysqli_close($con);
        echo $resposta;
     }else{
        mysqli_close($con);
        echo "Erro: " . sql. "<br>". mysqli_error($con);
     }

?>