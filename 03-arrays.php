<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP - Arrays (Vetores e Matrizes)</title>
</head>
<body>
 <h1>Trabalhando com Arrays</h1>  
 <hr>

 <h2>Arrays numéricos/indexados</h2>

 <?php
//Sintaxe com colchetes
$bandas = ["QUEEN", "NIRVANA","THE DOORS"];

//Sintaxe com a função array()
$cursos = ["Excel", "Power BI", "UX Designer", "PHP"];

//Sintaxe de atribuição manual usando os índices
$comidas[0] = "Lasanha";
$comidas[1] = "Pizza";
$comidas[2] = "Coxinha";

//Constantes de array
define("UNIDADES", ["Penha", "Tatuapé"]);
const FRUTAS = ["Manga", "Morango"];

?>

      <h3>Acessando os dados</h3>

      <ul>
        <li>Banda que mais curto: <?=$bandas[0]?></li>
        <li>Em breve vou lançar um curso de <?=$cursos[2]?> </li>
        <li>Quero comer <?=$comidas[0]?> </li>
        <li>Estamos no Senac <?=UNIDADES[0]?></li>
        <li>Vou fazer uma vitamina de <?=FRUTAS[1]?></li>
      </ul>

    <h2>Arrays associativos</h2>

<?php
$curso = [
  "titulo" => "Gastronomia",
  "carga_horaria" => 200,
  "descricao" => "Aprender a esquentar água e fazer ovo cozido..."

];

?>

   <h3>Acessando os dados</h3>
   <p>Nome do curso: <?=$curso["titulo"]?></p>
   <p>Carga Horária: <?=$curso["carga_horaria"]?> horas.</p>
   <p>Descrição: <?=$curso["descricao"]?> </p>

<?php
//Arrays associativo usando constantes
define(
  "EMPRESA",
  [   "nome" => "Company Computer",
      "ano_fundacao" => 2019

  ]
      
);

echo  EMPRESA["nome"];

echo "<br></br>";

const OUTRA_EMPRESA =["nome" => "ABC TI", "ano_fundacao" => 2022];
echo OUTRA_EMPRESA["nome"];

?>

  <h2>Matriz (array dentro de array)</h2>

<?php
$planoDeEstudos = [
  ["JS Avançado", "Node.js","Next.js"],
  ["PHP", "Orientação a objetos"],
  ["Teoria das cores", "Photoshop", "UX/UI", "Motion Design"]

];
?>

   <h3>Acessando os dados</h3>
   <p>Vou estudar nos próximos meses:
     <?=$planoDeEstudos[0] [2]?>, <?=$planoDeEstudos[1][0]?> e 
     <?=$planoDeEstudos[2][3]?>

   </p>

  <hr>

   <h2>Funções de análise/depuração/debug de estruturas de dados</h2>

   <h3><code>print_r()</code></h3>
   <pre>  <?=print_r($bandas)?></pre> 

   <h3><code>var_dump()</code></h3>
   <pre>  <?=var_dump($bandas)?></pre>
   <pre>  <?=var_dump($curso)?></pre>



</body>
</html>