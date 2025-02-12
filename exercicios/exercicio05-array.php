<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Array</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  

</head>
<body>
  
  <div class="container">

  <?php

function calcular_media($valor1, $valor2, $valor3){
  return ($valor1 + $valor2 +$valor3)/3;
}

  $alunos = [
 [ 'nome' => 'Maria',
   'nota1'=>  5,
   'nota2' => 8,
   'nota3' => 9,
  ],
  [ 'nome' => 'Paulo',
   'nota1'=>  10,
   'nota2' => 8,
   'nota3' => 9,
  ],
  [ 'nome' => 'Luiz',
  'nota1'=>  3,
  'nota2' => 8,
  'nota3' => 10,
 ],
 [ 'nome' => 'Laura',
 'nota1'=>  10,
 'nota2' => 8,
 'nota3' => 9,
],
[ 'nome' => 'Ana',
   'nota1'=>  10,
   'nota2' => 10,
   'nota3' => 9,
  ],
];

?>


<?php
function verificar_situacao(float $media):string{
  if ($media >= 7) {
   return "aprovado";
  } else {
    return "reprovado";
  }
  
}


?>





<?php
  foreach ($alunos as $aluno){
 
     $media = calcular_media($aluno["nota1"], $aluno["nota2"], $aluno["nota3"])/3;
     $situacao = verificar_Situacao($media);
  ?>
    <p> Aluno(a) <?=$aluno["nome"]?> teve as notas <?=$media?></p>

<?php
  }
?>





    
  </div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 


</body>
</html>