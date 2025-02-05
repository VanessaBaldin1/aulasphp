<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 03 (Condicionais) - 05/02/2025</title>
</head>
<body>
  
<?php

//Entrada (Simulada)
$valorCompra = 8000;

if($valorCompra > 5000) {
  $desconto =  0.15;

} elseif ($valorCompra > 3000) {
  $desconto =  0.10;
} elseif($valorCompra > 1000) {
  $desconto =  0.05;
} else {
  $desconto = 0;
  echo "<p> Não deve ter desconto </p>";
}

$valorfinalComdesconto = $valorCompra * $desconto;

$valorfinal = number_format($valorfinalComdesconto,2,",",".");

$valorCompraFinal = number_format($valorCompra,2,",",".");

?>

<p>O Valor da compra feita é <?=$valorCompraFinal?>  e o desconto obtido foi R$ <?=$valorfinal?>.</p>



</body>
</html>