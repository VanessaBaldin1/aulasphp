<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 04 (Loop e Estrutura de Dados)</title>
</head>
<body>
 
<?php
$tecnologias = array(
    "HTML" => "Estruturação",
    "CSS" => "Estilos",
    "JS" => "Comportamentos",
    "PHP" => "Back-End",
    "SQL" => "Manipulação de dados",
    "Java" => "Softwares"
);

foreach($tecnologias as $tecnologia => $descricao){
?>
  
  <caption></caption>
  <table>
      <tr>
        <td><?=$tecnologia?></td>
        <td><?=$descricao?></td>
      </tr>
  </table>

  





<?php
}
?>

  
</body>
</html>