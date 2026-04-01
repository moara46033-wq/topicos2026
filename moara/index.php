<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de contatos - T30</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

<div class="forms">
    <h2>Agenda - Turma 30 - 2026</h2>
    <h3>Cadastrar contato</h3>

    <form action="salvar.php" method="post">
        <p>Nome</p>
        <input type="text" name="nome" required placeholder="Digite seu nome"><br><br>

        <p>Endereço</p>
        <input type="text" name="endereco" required placeholder="Digite seu endereço"><br><br>

       <p>Telefone</p>
        <input type="text" name="fone" id="telefone" placeholder="(99) 99999-9999" maxlength="15"
       oninput="this.value = this.value.replace(/\D/g,'')
                   .replace(/^(\d{2})(\d)/,'($1) $2')
                   .replace(/(\d{5})(\d)/,'$1-$2');">

        <input type="submit" value="Cadastrar">
    </form>

    <br>

    
    <div style="text-align:center; margin-top:10px;">
        <a href="lista.php">
            <button class="btn-voltar">Ver contatos cadastrados</button>
        </a>
    </div>
</div>

</body>
</html>
