<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP com HTML</title>
    <style>
        table {
            width: 60%;
            border-collapse: collapse;
            margin: 20px auto;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: violet;
            color: white;
        }

        /* Linhas de cores alternadas */
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:nth-child(odd) {
            background-color: #ffffff;
        }

        /* Realce de cor ao passar o mouse */
        tr:hover {
            background-color: #ddd;
        }

        /* Estilo do cabeçalho */
        h1 {
            text-align: center;
            font-family: Arial, sans-serif;
            color: #333;
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
            // Criando o array associativo
            $linguagens = [
                "HTML" => "Estruturação",
                "CSS" => "Estilos",
                "JS" => "Comportamentos",
                "PHP" => "Back-End",
                "SQL" => "Manipulação de dados",
                "Java" => "Softwares"
            ];

            // ID fictício para cada linha
            $id = 1001;

            // Loop para exibir os dados na tabela
            foreach ($linguagens as $linguagem => $descricao) {
                echo "<tr>
                        <td>$id</td>
                        <td>$linguagem</td>
                        <td>$descricao</td>
                      </tr>";
                $id++; // Incrementa o ID fictício para o próximo
            }
            ?>
        </tbody>
    </table>
</body>
</html>
