<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>(VERSÃO 2) PHP - Condicionais</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


   <!-- <style>
     .compras{
      color: red;
     }

     .urgente{
      color: red;
      background-color: yellow;
     }


     .normal{
      color: darkgreen;
     }

   </style> -->



</head>
<body>
<div class="container">
   <h1 class="alert alert-primary">(VERSÃO 2)Estruturas condicionais</h1>  
   <hr>

   <h2 class="alert alert-primary">Simples <code>if</code></h2>


<?php
$numero = 5;
if($numero > 1) {
?>   
  <p><?=$numero?> é maior que 1</p>
<?php
}
?>

<hr>
   <h2 class="alert alert-heading">Composta usando <code>if/else</code></h2>
<?php
$produto = "Ultrabook Asus";
$qtdEmeEstoque = 10; //O que temos
$qtdCritica = 5; //mínimo necessário
?>
<h3 class="alert alert-light"><?=$produto?></h3>
<h4 class="alert alert-light">Quantidade em estoque: <?=$qtdEmeEstoque?></h4>

<?php
if ($qtdEmeEstoque < $qtdCritica) {

?>
   <p class="compras">É necessário comprar!</p>
<?php
         //Condicional Aninhada
         if($qtdEmeEstoque === 0) {
?>
          <p class="urgente"><strong>🫷Urgente🫸</strong></p>
<?php
         }

} else { 
?>

   <p class="normal">Estoque normal</p>
<?php   
}
?>

<hr>
   <h2 class="alert alert-success">Encadeada usando <code>if/elseif/else</code></h2>

<!--Verficar a idade de uma pessoa e determinar se ela é criança, adolescente, adulta ou idosa. -->

<?php
$idade = 30;
if ($idade <= 12){
   $texto = "Criança 👼";
} elseif($idade <= 17){
   $texto = "Adolescente 😒";
}elseif($idade <= 59){
   $texto = "Adulto 💼";
} else{
   $texto = "idoso 🧓";
}
?>

<p><?=$texto?></p>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>