<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <?php include("scripts.php");?>
<?php
    $conexao = NEW PDO('pgsql: host = localhost;dbname = Jogos2.0',"postgres","99583644");
    $id = $_POST['i2'];
    $Delecao = $conexao->prepare ("DELETE FROM cliente WHERE id = '".$id."' ");
    $Delecao -> execute();
    if($Delecao == true){
        echo 'Removido com Sucesso';
    }else{
        echo 'Não foi possivel remover'; 
    }
?>
    <br>
    <a href = 'index.php'> Voltar </a>