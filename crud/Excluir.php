<?php 
        $conexao = NEW PDO('pgsql: host = localhost;dbname = Jogos2.0',"postgres","99583644");
        $sqlDelete = $conexao -> prepare("DELETE FROM cliente WHERE nome = '".$_POST['excluir']."'");
        $sqlDelete -> execute();
        if($sqlDelete == true){
            echo ("Removido com sucesso");
        } else{
            echo ("Erro de remoção");
        } 