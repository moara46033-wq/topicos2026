<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1 </title>
     <style>
         body {
        font-family: Georgia, 'Times New Roman', Times, serif;
        background-color: #f0f8ff;
    }
    </style>
</head>
<body>
    
<?php 
$nome=$_POST["nome"];
$endereco=$_POST["endereco"];
$idade=$_POST["idade"];
$sexo=$_POST["sexo"];

echo " <h3> Nome: $nome  </h3> <br>";

if ($idade > 18){
    echo "<h3> Minha idade é: $idade </h3> <br>";
    echo " <h3> Endereço: $endereco </h3> <br>";
    echo "<h3> Sexo: $sexo </h3> <br> ";
 } else { echo "<h3> Menor de idade </h3>";
 }
?>
</body>
</html>