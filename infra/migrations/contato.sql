CREATE SEQUENCE IF NOT EXISTS contato_seq
    INCREMENT 1
    START 1;

CREATE TABLE contatos (
    id INT NOT NULL PRIMARY KEY,
    telefone VARCHAR(45),
    celular VARCHAR(45),
    usuario_id INT REFERENCES usuarios(id) NOT NULL,
    created DATE NOT NULL,
    modified DATE
)