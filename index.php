<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once './Class/conexao.class.php';
        require_once './Class/insert.class.php';
        require_once './Class/select.class.php';
        require_once './Class/update.class.php';
        require_once './Class/delete.class.php';

//        $dados = ['nome' => 'Leonardo', 'idade' => 37];
//    
//        $insere = new insert();
//        $insere->doInsert('pessoa', $dados);
//        var_dump($insere);
//        $select = new select();
//        //$select->doSelect('pessoa', 'WHERE nome like :nome AND idade>:idade', 'nome=j%&idade=10');
//        $select->doSelectManual('SELECT nome from pessoa WHERE idade>:idade', 'idade=30');
//        var_dump($select);
//        $update = new update();
//        $dados = ['nome' => 'Lex', 'idade' => 38];
//        $update->doUpdate('pessoa', $dados, 'WHERE id = :id', 'id=3');
//        var_dump($update);
        //CONSULTAS SQL SEM O USO DAS CLASSES ADICIONAIS
//        
//        $PDO = new conexao();
//        //var_dump($PDO->getConexao());
//        $nome = 'Felipe';
//        $idade = 16;
//
//        try {
//            $query = 'INSERT INTO pessoa(nome,idade) VALUES (?,?)';
//            $create = $PDO->getConexao()->prepare($query);
//
//            $create->bindValue(1, $nome, PDO::PARAM_STR);
//            $create->bindValue(2, $idade, PDO::PARAM_INT);
//
//            //  $create->execute();
//
//            if ($create->rowCount()) {
//                echo 'Cadastrado com sucesso';
//            } else {
//                echo 'Inserção não realizada';
//            }
//
//            /////////////////////////////////////////////////////////////////
//            $query2 = 'SELECT * FROM pessoa WHERE idade>= :idade';
//            $select = $PDO->getConexao()->prepare($query2);
//            $select->bindValue(':idade', 10);
//            $select->execute();
//            // $resultado = $select->fetchAll(PDO::FETCH_ASSOC);
//            // var_dump($resultado);
//
//            if ($select->rowCount() > 0) {
//                echo $select->rowCount() . ' cadastrados <br>';
//                $resultado = $select->fetchAll(PDO::FETCH_ASSOC);
//                var_dump($resultado);
//                foreach ($resultado as $linha) {
//                    echo $linha['id'] . ' - ' . $linha['nome'] . ' - ' . $linha['idade'];
//                    echo '<br>';
//                }
//            }
//
//            //////////////////////////////////
//            $query4 = 'SELECT * FROM pessoa WHERE nome like :nome';
//            $select3 = $PDO->getConexao()->prepare($query4);
//
//            $select3->bindValue(':nome', 'f%');
//            $select3->execute();
//            $pes1 = $select3->fetchAll(PDO::FETCH_ASSOC);
//            var_dump($pes1);
//
//            $select3->bindValue(':nome', 'j%');
//            $select3->execute();
//            $pes2 = $select3->fetchAll(PDO::FETCH_ASSOC);
//            var_dump($pes2);
//        } catch (PDOException $e) {
//            echo 'Inserção não realizada' . $e->getMessage();
//        } 

        $delete = new delete();
        $delete->doDelete('pessoa', 'WHERE id=:id', 'id=2');
        var_dump($delete);
        ?>
    </body>
</html>
