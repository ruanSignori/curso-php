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

ALTER TABLE usuarios
ADD IF NOT EXISTS sits_usuario_id INT REFERENCES sits_usuario(id);

ALTER TABLE usuarios
ADD IF NOT EXISTS niveis_acesso_id INT REFERENCES niveis_acesso(id);
