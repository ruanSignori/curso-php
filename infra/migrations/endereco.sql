CREATE SEQUENCE IF NOT EXISTS endereco_seq
    AS INTEGER
    INCREMENT 1
    START 1;

CREATE TABLE enderecos (
    id INT PRIMARY KEY NOT NULL DEFAULT nextval('endereco_seq'),
    logradouro VARCHAR(255) NOT NULL,
    numero VARCHAR(10) NOT NULL,
    bairro VARCHAR (255) NOT NULL,
    cidade VARCHAR (255) NOT NULL,
    usuario_id INT REFERENCES usuarios(id),
    created DATE NOT NULL,
    modified DATE
)

-- Query de teste

-- INSERT INTO enderecos (logradouro, numero, bairro, cidade, usuario_id, created)
-- VALUES (
--         'Av. General Daltro Filho',
--         '374',
--         'Centro',
--         'Roca Sales',
--         1,
--         now()
--        );