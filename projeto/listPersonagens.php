<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Projeto</title>
</head>
<body class="bg-warning-subtle">
    <div class="container-fluid">
        <?php
        include 'navBar.php';
        ?>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10 mt-3 ">
                <h3 class="text-center">PERSONAGENS</h3>
                <?php
                require 'conectaBanco.php';
                $select = "SELECT * FROM personagem";
                $resultado = mysqli_query($banco, $select);
                ?>
                <table class="table table-hover">
                    <thead>
                        <th scope="col">Nome</th>
                        <th scope="col">Raça</th>
                        <th scope="col">Classe</th>
                        <th scope="col">Descrição</th>
                    </thead>
                    <tbody>
                        <?php
                            if($resultado){
                                while($linha = mysqli_fetch_assoc($resultado)){
                                    $nome = $linha['nome'];
                                    $raca = $linha['raca'];
                                    $classe = $linha['classe'];
                                    $desc = $linha['descricao'];
                                    echo "<tr>
                                    <td> $nome </td>
                                    <td> $raca </td>
                                    <td> $classe </td>
                                    <td> $desc</td>
                                    </tr>";
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</body>
</html>