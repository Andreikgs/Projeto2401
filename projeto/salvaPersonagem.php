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
            <?php
                // receber dados de index, salvar no banco de dados
                require 'conectaBanco.php';
                $nome = $_POST['nome'];
                $raca = $_POST['raca'];
                $classe = $_POST['classe'];
                $desc = $_POST['desc'];
                if(empty($nome)){
                    echo "<p>Campo nome deve ser preenchido </p>";
                }else{
                    // Monta comando SQL
                    $sql = "INSERT INTO personagem(nome, raca, classe, descricao) VALUES ('$nome', '$raca', '$classe', '$desc')";
                    $banco->query($sql); // Executa comando SQL
                    if($banco->affected_rows >= 1){
                        echo "<p>Personagem $nome cadastrado com sucesso!</p>";
                    }else{
                        echo "Erro ao inserir Personagem $nome no banco de dados!";
                    }
                }
            ?>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</body>
</html>






