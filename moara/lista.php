<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de contatos</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

<h2 style="text-align:center; color:white;">Lista de Contatos</h2>

<?php
include ('conexao.php');

$sql= "SELECT * FROM contatos";
$resultado= mysqli_query($conexao, $sql);

if (mysqli_num_rows($resultado) > 0) {
    echo "<table class='tabela'>";
    echo "<tr>
            <th>Nome</th>
            <th>Endereço</th>
            <th>Telefone</th>
            <th>Ações</th>
          </tr>";

    while ($linha = mysqli_fetch_assoc($resultado)) {
        echo "<tr>";
        echo "<td>" . $linha['nome'] . "</td>";
        echo "<td>" . $linha['endereco'] . "</td>";
        echo "<td>" . $linha['telefone'] . "</td>";
        echo "<td>
                <a href='editar.php?id=" . $linha['id'] . "'>Editar</a> |
                <a href='excluir.php?id=" . $linha['id'] . "' 
                   onclick='return confirm(\"Você realmente quer excluir este contato?\");'>Excluir</a>
              </td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "<p style='color:white; text-align:center;'>Nenhum contato encontrado.</p>";
}
?>


<div style="text-align:center; margin-top:20px;">
    <a href="index.php">
        <button class="btn-voltar"> Voltar</button>
    </a>
</div>

</body>
</html>