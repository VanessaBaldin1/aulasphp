<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Exercicio 01 - variáveis e constantes </title>
  <style>
    .destaque {
            font-weight: bold;
            color: #2a9d8f;
        }
        .data {
            font-style: italic;
            color: #e76f51;
        }

  </style>
</head>
<body>
   <h1>Exercicio 01 - PHP</h1>
   <hr>

<?php
//Definindo o timezone (fuso horário)
date_default_timezone_set("America/Sao_Paulo");



$dataDeHoje = date('d/m/Y');
$hora = date("H:i"); //para incluir a hora
$nomePessoa= "Vanessa Baldin";
$nomeCurso = "PHP";
$cargaHorariaCurso = 1200;
$limiteFaltas = $cargaHorariaCurso * 0.25;

?>

    <h1 class="exemplo">Informações do Curso</h1>
    <p>Data de hoje: <span class="data"><?= $dataDeHoje; ?></span> <?= $hora; ?> </p>
    <p>Nome do aluno: <span class="destaque"><?= $nomePessoa; ?></span></p>
    <p>Curso: <span class="destaque"><?= $nomeCurso; ?></span></p>
    <p>Carga horária: <span class="destaque"><?= $cargaHorariaCurso; ?> horas</span></p>
    <p>Limite de faltas: <span class="destaque"><?= $limiteFaltas; ?> faltas</span></p>

    <hr>
    
<?php
// Diferenças entre constantes e variável
$exemplo = 10;
echo $exemplo;

echo "<br></br>";

$exemplo = 150;
echo $exemplo;

echo "<br></br>";

//CONSTANTE
const EXEMPLO = 10;
echo EXEMPLO;

//EXEMPLO = 200; // DÁ ERRO POIS CONSTANTES NÃO PODEM SER MODIFICADAS
//ECHO EXEMPLO;

?>


  
</body>
</html>