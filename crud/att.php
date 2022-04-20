<?php
     $conexao = NEW PDO('pgsql: host = localhost;dbname = Jogos2.0',"postgres","99583644");
     $id = $_POST['id'];
     $tel = $_POST['celular'];
     $sqlUpdate = $conexao->prepare("UPDATE cliente SET nome = '".$_POST['nome']."', telefone = '".$tel."'
                                     WHERE id = '".$id."' ");
    $sqlUpdate -> execute();
    if($sqlUpdate == true){
        echo 'Atualizado com sucesso';
    }else{
        echo 'Não foi possivel atualizar';
    }