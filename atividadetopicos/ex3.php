<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3</title>
    <style>
     body {
        font-family: Georgia, 'Times New Roman', Times, serif;
        background-color: #fdc5f9;
    }
    </style>
</head>
<body>
    <?php


$media = $_POST['media'];

if($media <= 1.7){
echo "Você não pode realizar o exame.";
}
elseif($media >= 7.0){
echo "Você está APROVADO!";
}
else{
$notaExame = (50 - (6 * $media)) / 4;
echo "Você precisa tirar $notaExame no exame para ser aprovado.";
}



?>
    
</body>
</html>