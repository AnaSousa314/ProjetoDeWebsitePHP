<?php
      session_start();
      if(!isset($_SESSION['id_funcionario'])){
          header("location:./login.php");
          exit;
      }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Web</title>

    <script src="jquery-3.5.1.min.js"></script>
    <script src="scripts.js"></script>

    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="container cabeca">
            <img src="computer.png" alt="">
            <h1> Developer Store </h1>
        </div>
    </header>
    <section>
        <div class="container">
            <div class="left">
                <a href="index.php?p=cc">
                    <h3>
                        CADASTRAR CLIENTE
                    </h3>
                </a>
                <a href="index.php?p=vc">
                    <h3>
                        VER CLIENTES
                    </h3>
                </a>
                <a href="index.php?p=cf">
                    <h3>
                        CADASTRAR FUNCIONÁRIO
                    </h3>
                </a>
                <a href="index.php?p=vf">
                    <h3>
                        VER FUNCIONÁRIOS
                    </h3>
                </a>
                <a href="index.php?p=cl">
                    <h3>
                        CADASTRAR LAPTOP
                    </h3>
                </a>
                <a href="index.php?p=vl">
                    <h3>
                        VER LAPTOPS
                    </h3>
                </a>
                <a href="index.php?p=cd">
                    <h3>
                        CADASTRAR DESKTOP
                    </h3>
                </a>
                <a href="index.php?p=vd">
                    <h3>
                        VER DESKTOP
                    </h3>
                </a>
                <a href="index.php?p=ci">
                    <h3>
                        CADASTRAR IMPRESSORA
                    </h3>
                </a>
                <a href="index.php?p=vi">
                    <h3>
                        VER IMPRESSORAS
                    </h3>
                </a>
                <a href="index.php?p=rv">
                    <h3>
                        REALIZAR VENDA
                    </h3>
                </a>
                <a href="index.php?p=vv">
                    <h3>
                        VER VENDAS
                    </h3>
                </a>
                <a href="sair.php">
                    <h3>
                        SAIR
                    </h3>
                </a>
            </div>
            <div id="conteudo"  class="right">  <!-- O erro estava aqui. -->
                
                <?php

                    if (isset($_GET['p'])) {

                        $pagina = $_GET['p'];
                    }else{
                        $pagina ='cc';
                    }

                    if ($pagina == 'cc') {
                        include "cliente_form.html";
                    }else if ($pagina == 'vc'){
                        include "cliente_ver.php";
                    }elseif ($pagina == 'cf') {
                        include "funcionario_form.html";
                    }elseif ($pagina == 'vf'){
                        include "funcionario_ver.php";
                    }elseif ($pagina == 'cl'){
                        include "laptop_form.html";
                    }elseif ($pagina == 'vl'){
                        include "laptop_ver.php";
                    }elseif ($pagina == 'cd'){
                        include "desktop_form.html";
                    }elseif ($pagina == 'vd'){
                        include "desktop_ver.php";
                    }elseif ($pagina == 'ci'){
                        include "impressora_form.html";
                    }elseif ($pagina == 'vi'){
                        include "impressora_ver.php";
                    }elseif ($pagina == 'rv'){
                        include "venda_form.php";
                    }elseif ($pagina == 'vv'){
                        include "venda_ver.php";
                    }

                ?>
               
            </div>
        </div>
    </section>
</body>
</html>