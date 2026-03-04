<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>
    <style>
          body {
        font-family: Georgia, 'Times New Roman', Times, serif;
        background-color: #fdc5f9;
    }
    </style>
</head>
<body>
    
<?php

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

// Usuário e senha fixos
if($usuario == "admin" && $senha == "1234"){
    echo "Bem-vindo, admin! Seu cargo é Administrador.";
}
elseif($usuario == "joao" && $senha == "abcd"){
    echo "Bem-vindo, joao! Seu cargo é Vendedor.";
}
else{
    echo "Usuário ou senha incorretos!";
}

?>
</body>
</html>