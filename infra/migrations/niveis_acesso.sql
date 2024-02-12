CREATE SEQUENCE IF NOT EXISTS niveis_acesso_seq
    INCREMENT 1
    START 1;

CREATE TABLE niveis_acesso (
    id INT PRIMARY KEY NOT NULL  DEFAULT nextval('niveis_acesso_seq'),
    nome VARCHAR(255) NOT NULL,
    created DATE NOT NULL,
    modified DATE
);

INSERT INTO niveis_acesso (id, nome, created)
VALUES (nextval('niveis_acesso_seq'), 'Super Administrador', now())

INSERT INTO niveis_acesso (id, nome, created)
VALUES (nextval('niveis_acesso_seq'), 'Administrador', now());

INSERT INTO niveis_acesso (id, nome, created)
VALUES (nextval('niveis_acesso_seq'), 'Aluno', now());

-- Zerar e excluir toda a tabela
-- ALTER SEQUENCE niveis_acesso_seq
-- RESTART WITH 1
-- TRUNCATE TABLE niveis_acesso;