<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP com HTML</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- <style>
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
    </style> -->
</head>
<body>
    <h1 class="text-center">Tabela de Linguagens e Descrições</h1>
    <table class="table table-success table-striped ">
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
                [
                    "id" => 1,
                    "nome" => "HTML",
                    "descricao" => "Estruturação"
                ],
                [
                    "id" => 2,
                    "nome" => "CSS",
                    "descricao" => "Estilos"
                ],
                [
                    "id" => 3,
                    "nome" => "JS",
                    "descricao" => "Comportamentos"
                ],
                [
                    "id" => 4,
                    "nome" => "PHP",
                    "descricao" => "Back-End"
                ],
                [
                    "id" => 5,
                    "nome" => "SQL",
                    "descricao" => "Manipulação de dados"
                ],
                [
                    "id" => 6,
                    "nome" => "Java",
                    "descricao" => "Softwares"
                ],
            ];

            
            ?>

            <?php
            foreach ($linguagens as $linguagem) {
            ?>

            
                       <tr>
                        <td><?=$linguagem["id"]?></td>
                        <td><?=$linguagem["nome"]?></td>
                        <td><?=$linguagem["descricao"]?></td>
                       </tr>
            <?php     
            }
            ?>
        </tbody>
    </table>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</body>
</html>
