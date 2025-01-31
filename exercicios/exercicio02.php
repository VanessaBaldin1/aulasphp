<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 02 PHP e HTML: Arrays</title>
<style>
   .container {
      display: flex;
      justify-content: space-around;
      margin-top: 5px;
    }
    
  .bloco {
      border: 1px solid violet;
      padding: 20px;
      border-radius: 10px;
      width: 40%;
      background-color: azure;
  }
  
  .bloco1{
   display: flex;
   justify-content: center;
   font-family: Verdana, Geneva, Tahoma, sans-serif;
   font-size: 20px;
  }

  p{
    font-size: 14px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    font-weight: 400;
  }

  h3{
    font-size: 14px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    font-weight: 700;
  }

</style>
 

</head>
<body>
 
<?php
$pessoa1 = [
  "nomedousuario" => "Marcos Lima",
  "email" => "marcos.lima@gmail.com",
  "senha" => "12345",
  "idade" => 30,
  "sexo"  => "Masculino",
  "cidade" => "Manaus"
];


$pessoa2 = [
  "nomedousuario" => "Suzana Amorim",
  "e-mail" => "suzana_amorim@gmail.com",
  "senha" => "789456",
  "idade" => 28,
  "sexo"  => "feminino",
  "cidade" => "Brasília"
];
?>

<h2 class="bloco1">Cadastro dos alunos</h2>
<div class="container">
    <article class="bloco">
    <h3>Nome do Usuário: <?=$pessoa1["nomedousuario"]?> </h3>
    <p>E-mail: <?=$pessoa1["e-mail"]?></p>
    <p>Idade: <?=$pessoa1["idade"]?></p>
    <p>Sexo: <?=$pessoa1["sexo"]?></p>
    </article>

    <article class="bloco">
    <h3>Nome do Usuário: <?=$pessoa2["nomedousuario"]?> </h3>
    <p>E-mail: <?=$pessoa2["e-mail"]?></p>
    <p>Idade: <?=$pessoa2["idade"]?></p>
    <p>Sexo: <?=$pessoa2["sexo"]?></p>
    </article>
 
</div> 

</body>
</html>