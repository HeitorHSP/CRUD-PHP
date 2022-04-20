<?php 

        $conexao = NEW PDO('pgsql: host = localhost;dbname = Jogos2.0',"postgres","99583644");
        $sqlInsert = $conexao -> prepare("INSERT INTO cliente 
                                            (id,nome,telefone) 
                                            VALUES (DEFAULT,'".$_POST['nome']."','".$_POST['telefone']."') 
                                            ");
        $sqlInsert -> execute();
        if($sqlInsert == true){
            echo ("Cadastrado com sucesso");
        } else{
            echo ("Erro de cadastro");
        }