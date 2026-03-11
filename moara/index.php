<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de contatos - T30</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            margin: 0;
            padding: 20px;
        }
       
        form {
            background-color: #f7add2; 
            padding: 20px;
            height: 300px;
            width: 400px;
        }
     
    </style>
</head>
<body>
    <h1>Agenda - turma 30 - 2026</h1>
    <h2>Cadastrar contato</h2>
    <form action="salvar.php" method="post">
        <p>Nome</p>
        <input type="text"  name="nome" required placeholder="Digite seu nome "><br><br>
         <p>Endereço</p>
         <input type="text"  name="endereco" required placeholder="Digite seu endereco"><br><br>
        <p>Telefone</p>
        <input type="text"  name="fone" required placeholder="Digite seu telefone "><br><br>

        <input type="submit" value="Cadastrar">
    </form>


<?php
include ('conexao.php');


$sql= "SELECT * FROM contatos";
mysqli_query($conexao, $sql);
$resultado= mysqli_query($conexao, $sql);

if (mysqli_num_rows ($resultado) >0) {
    $linha= mysqli_fetch_assoc($resultado);{
        while ($linha = mysqli_fetch_assoc($resultado)) {
            echo $linha['nome']. "|" . $linha['endereco']. "|" . $linha['telefone'] . "| <a href='editar.php?id=".$linha['id']."'>
          editar<a/> | <a href='excluir.php?id='>excluir</a>" .  "<br>"; }
    }

} else{
    echo "<h3>Nenhum cadastro registrado</h3>";
}
?>

</body>
</html>

