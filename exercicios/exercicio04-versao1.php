<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP com HTML</title>
    <style>
        table {
            width: 60%;
            border-collapse: collapse solid;
            border: 2px solid;
            border-radius: 10px;
            margin: 20px auto;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: violet;
            color: white;
        }

       
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:nth-child(odd) {
            background-color: #ffffff;
        }

        tr:hover {
            background-color: #ddd;
        }

        h1 {
            text-align: center;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            color: blueviolet;
        }
    </style>
</head>
<body>
    <h1>Tabela de Linguagens e Descrições</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Linguagem</th>
                <th>Descrição</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $linguagens = [
                "HTML" => "Estruturação",
                "CSS" => "Estilos",
                "JS" => "Comportamentos",
                "PHP" => "Back-End",
                "SQL" => "Manipulação de dados",
                "Java" => "Softwares"
            ];

            $id = 1001;
            
            ?>

            <?php
            foreach ($linguagens as $linguagem => $descricao) {
            ?>

            
                       <tr>
                        <td><?=$id?></td>
                        <td><?=$linguagem?></td>
                        <td><?=$descricao?></td>
                       </tr>
            <?php
            $id++;     
            }
            ?>
        </tbody>
    </table>
</body>
</html>
