<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Contato</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
<div class='forms'>
<?php
include('conexao.php');

$id = $_GET['id'];

$sql = "SELECT * FROM contatos WHERE id = $id";

$resultado = mysqli_query($conexao, $sql);

if (mysqli_num_rows($resultado) == 1) {
    $contato = mysqli_fetch_assoc($resultado);
} else {
    echo "<h2>Contato não encontrado na base.</h2>";
    echo "<a href='index.php'>Voltar</a>";
    exit;
}

if (isset($_POST['atualizar'])) {
    $novo_nome = $_POST['nome'];
    $novo_endereco = $_POST['endereco'];
    $novo_fone = $_POST['fone'];

    $sql2 = "UPDATE contatos SET 
                nome = '$novo_nome',
                endereco = '$novo_endereco', 
                telefone = '$novo_fone'
             WHERE id = $id";

    if (mysqli_query($conexao, $sql2)) {
        echo "<h2>Contato atualizado com sucesso</h2>";
        echo "<a href='lista.php'>Voltar para a lista de contatos</a>";
    } else {
        echo "<h2>Erro ao atualizar.</h2>" . mysqli_error($conexao);
        echo "<a href='lista.php'>Voltar para a lista de contatos</a>";
    }
}
?>

<form method="post">
    Nome: <input type="text" name="nome" value="<?php echo $contato['nome']; ?>"> <br>
    Endereço: <input type="text" name="endereco" value="<?php echo $contato['endereco']; ?>"> <br>
    <p>Telefone</p>
        <input type="text" name="fone" id="telefone" placeholder="(99) 99999-9999" maxlength="15"
       oninput="this.value = this.value.replace(/\D/g,'')
                   .replace(/^(\d{2})(\d)/,'($1) $2')
                   .replace(/(\d{5})(\d)/,'$1-$2');" value="<?php echo $contato['telefone']; ?>"> <br>
    <input type="submit" name="atualizar" value="Atualizar">
</form>
</div>

</body>
</html>
