<html>
<title> Visualizar </title>
<h1> Clientes Cadastrados </h1>
<br/>
</html>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<?php include("scripts.php");?>
<?php 
    $conexao = NEW PDO('pgsql: host = localhost;dbname = Jogos2.0',"postgres","99583644");
    $sqlSelect = $conexao -> prepare("SELECT * FROM cliente");
    $sqlSelect -> execute();
    $fetchAll = $sqlSelect -> fetchAll();
        foreach($fetchAll as $cliente) 
        {
            echo ' <span> Nome do Cliente: </span>'.$cliente['nome'].'<br/> 
             <span> Telefone do Cliente: </span>'.$cliente['telefone'].'
            <br>
                <form action = "Atualizar.php" method = "post">
                <input type ="hidden" name = "i" value = "'.$cliente['id'].'"/>
                <button> Editar </button>
                <form>
                <form action = "Delete2.0.php" method = "post">
                <input type ="hidden" name = "i2" value = "'.$cliente['id'].'"/>
                <button> Remover </button>
                
                </form>
            ';
        }
?>
    <a href = index.php > Voltar </a>