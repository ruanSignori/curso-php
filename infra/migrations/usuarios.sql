CREATE SEQUENCE IF NOT EXISTS usuarios_seq
    INCREMENT 1
    START 1;

CREATE TABLE usuarios (
    id INT PRIMARY KEY NOT NULL DEFAULT nextval('usuarios_seq'),
    nome VARCHAR(255),
    email VARCHAR(255),
    created DATE,
    modified DATE
);