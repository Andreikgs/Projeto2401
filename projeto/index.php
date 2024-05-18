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
                <h3 class="text-center">CRIE SEU PERSONAGEM</h3>
                <form action="salvaPersonagem.php" method="post">
                    <div class="col-md-5 p-2 mx-auto">
                        <label class="form-label" for="nome">NOME</label>
                        <input class="form-control " name="nome" type="text">
                    </div>
                    <div class="col-md-5 p-2 mx-auto">
                        <label class="form-label" for="raca">RAÇA</label>
                        <select class="form-select" name="raca" id="">
                        <option selected>Escolha sua Raça</option>
                        <option value="Humano">Humano</option>
                        <option value="Orc">Orc</option>
                        <option value="Elfo">Elfo</option>
                        <option value="Goblin">Goblin</option>
                        <option value="Ogro">Ogro</option>
                        </select>
                    </div>
                    <div class="col-md-5 p-2 mx-auto">
                        <label class="form-label" for="classe">CLASSE</label>
                        <select class="form-select" name="classe" id="">
                        <option selected>Escolha sua Classe</option>
                        <option value="Guerreiro">Guerreiro</option>
                        <option value="Arqueiro">Arqueiro</option>
                        <option value="Mago">Mago</option>
                        <option value="Ladino">Ladino</option>
                        <option value="Druida">Druida</option>
                        </select>
                    </div>
                    <div class="col-md-5 p-2 mx-auto">
                    <label for="desc" class="form-label">DESCRIÇÃO</label>
                    <textarea class="form-control" name="desc" id="desc" rows="3"></textarea>
                    </div>
                    <div class="col-md-8 mb-3 d-grid gap-2 d-md-flex justify-content-md-end ">
                            <button class="btn btn-outline-danger">
                                Cancelar
                            </button>
                            <button class="btn btn-outline-success" type="submit">
                                Salvar
                            </button>
                    </div>
                </form>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</body>
</html>