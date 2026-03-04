<?php
$alunos = [
    ["nome" => "Ana", "nota" => 7.5],
    ["nome" => "Bruno", "nota" => 6.0],
    ["nome" => "Maria", "nota" => 5.0]
];


$soma = 0;

foreach ($alunos as $aluno) {
    $soma += $aluno["nota"];
}

$media = $soma / count($alunos);

echo "Média das notas: " . $media . "<br>";

$maiorNota = 0;
$melhorAluno = "";

foreach ($alunos as $aluno) {
    if ($aluno["nota"] > $maiorNota) {
        $maiorNota = $aluno["nota"];
        $melhorAluno = $aluno["nome"];
    }
}

echo "Maior nota: " . $maiorNota . "<br>";
echo "Aluno com maior nota: " . $melhorAluno . "<br>";

echo "<strong>Cadastro de Alunos:</strong><br>";

foreach ($alunos as $aluno) {
    echo "Nome: " . $aluno["nome"] . " - Nota: " . $aluno["nota"] . "<br>";
}

?>
?>