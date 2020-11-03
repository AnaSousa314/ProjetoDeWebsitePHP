<?php

class Colaborador{
    private $pdo;
    public $msgErro = "";
    

    public function conectar($nome,$host,$usuario,$senha){
        global $pdo;
        global $msgErro;

        try {

            $pdo = new PDO("mysql:dbname=".$nome.";host=".$host,$usuario,$senha);

        } catch (PDOException $e) {
            $msgErro = $e->getMessage();
        }
    }

    public function logar($login,$senha){
         global $pdo;
         global $msgErro;

        $sql = $pdo->prepare("SELECT id_funcionario FROM funcionarios WHERE login = :l AND senha = :s");
        $sql->bindValue(":l",$login);
        $sql->bindValue(":s",$senha);
        $sql->execute();

        if($sql->rowCount() > 0){
            $dado = $sql->fetch();

            session_start();
            $_SESSION['id_funcionario'] = $dado['id_funcionario'];

            return true;
        }else {
            return false;

        }
    }



}



?>