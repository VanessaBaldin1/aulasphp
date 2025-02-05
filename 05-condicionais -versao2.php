<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>(VERSÃO 2) PHP - Condicionais</title>
   <style>
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

   </style>



</head>
<body>
   <h1>(VERSÃO 2)Estruturas condicionais</h1>  
   <hr>

   <h2>Simples <code>if</code></h2>


<?php
$numero = 5;
if($numero > 1) {
?>   
  <p><?=$numero?> é maior que 1</p>
<?php
}
?>

<hr>
   <h2>Composta usando <code>if/else</code></h2>
<?php
$produto = "Ultrabook Asus";
$qtdEmeEstoque = 10; //O que temos
$qtdCritica = 5; //mínimo necessário
?>
<h3><?=$produto?></h3>
<h4>Quantidade em estoque: <?=$qtdEmeEstoque?></h4>

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
   <h2>Encadeada usando <code>if/elseif/else</code></h2>

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

</body>
</html>