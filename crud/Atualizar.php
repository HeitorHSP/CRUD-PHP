<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <?php include("scripts.php");?>
<?php
    $conexao = NEW PDO('pgsql: host = localhost;dbname = Jogos2.0',"postgres","99583644");
    $id = $_POST['i'];
    $Clientes = $conexao->prepare ("SELECT * FROM cliente WHERE id = '".$id."' ");
    $Clientes -> execute();
    $fecth = $Clientes -> fetchAll();
    echo '
        <b> Nome: <br>
        <input type = "text" id="nome" value = "'.$fecth[0]['nome'].'"/> <br/>
        <b> Telefone: <br>
        <input type = "text" id="telefone" value = "'.$fecth[0]['telefone'].'"/> <br/>
        <br>
        <a id = "atualizar" aid="'.$fecth[0]['id'].'" style = "cursor:pointer"> Salvar </a>
        <div id = "mensagens"> </div>
        ';
 ?>
 <a href = index.php > Voltar </a>