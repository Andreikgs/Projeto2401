USE projeto;
CREATE TABLE personagem(
    nome VARCHAR(30) PRIMARY KEY NOT NULL,
    raca VARCHAR(20),
    classe VARCHAR(20),
    descricao VARCHAR(255)
    );

    SELECT * FROM personagem;