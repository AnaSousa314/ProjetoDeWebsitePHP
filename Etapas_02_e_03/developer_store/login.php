<?php
    require_once './model/colaborador.php';
    $u = new Colaborador();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/login.css">
    <title>Document</title>
</head>
<body>
    <div class="box">
        <div class="cover">
            <div class="cover-top">
                <img src="./img/computer.png" alt="computador" height="70" width="70">
                
                <h1>Developer Store</h1>
            </div>
            <div>
                <h1 class="form-title">Faça seu login</h1>

                <form method="post">

                    <input type="text" name="login" placeholder="Login">

                    <input type="password" name="senha" placeholder="Senha">

                    <input type="submit" value="ENTRAR" class="btn">

                    <?php
                        if (isset($_POST['login'])) {
                            
                            $login = addslashes($_POST['login']);
                            $senha = addslashes($_POST['senha']);

                            if (!empty($login) && !empty($senha)) {
                                $u->conectar("bd_developer_store","localhost","root","");

                                if($u->msgErro==""){
                                    if($u->logar($login,$senha)){
                                       header("location: ./index.php"); 
                                    }else{
                                        ?>
                                        <div class="msg-error">
                                            Login e/ou senha estão incorretos!
                                        </div>
                                        <?php
                                    }
                                }else{
                                    ?>
                                    <div class="msg-error">
                                        <?php
                                    echo "Erro: ".$u->msgErro;
                                        ?>
                                    </div>
                                    <?php
                                }

                            }else{
                               
                               ?>
                                <div class="msgero">
                                    Preencha todos os campos!
                                </div>
                                <?php
                                
                            }
                        } 
                        
                    ?>
                </form>
            </div>
        </div>
    </div>

    
</body>
</html>