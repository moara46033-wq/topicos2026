<?php
include ('conexao.php');

$id=$_GET['id'];

$sql= "SELECT * FROM contatos WHERE id= $id";

//o id não precisa de aspas porque no banco os unicos que precisam de aspas é os que sao varchar//

$resultado= mysqli_query($conexao,$sql);

if(mysqli_num_rows($resultado) == 1){
    $contato= mysqli_fetch_assoc($resultado);
}else{
    echo "Contato não encontrato na base.";
    exit;
}

if (isset($_POST ['atualizar'])){
    $novo_nome=$_POST ['nome'];
    $novo_endereco=$_POST ['endereco'];
    $novo_fone=$_POST ['fone'];

    $sql2= "UPDATE contatos SET nome= '$novo_nome',
    endereco= '$novo_endereco', telefone = '$novo_fone'
    WHERE id=$id";

    if (mysqli_query($conexao,$sql2)){
        echo "<h2> Contato atualizado com sucesso</h2>";
        echo "<a href='index.php'> VOLTAR</a>";
    } else{
        echo "<h2>Erro ao atualizar.</h2>" . mysqli_error($conexao);
        echo "<a href='index.php'>VOLTAR</a>";
    }
}
?>

<form method="post">
    Nome <input type="text" name="nome" value="<?php echo $contato ['nome'];?>"> <br>
    Endereco: <input type="text" name="endereco" value="<?php echo $contato['endereco'];?>"> <br>
   Telefone: <input type="text" name="fone" value="<?php echo $contato['telefone'];?>"> <br> 
     <input type="submit" name="atualizar" value="Atualizar">

</form>
