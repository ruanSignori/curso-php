CREATE SEQUENCE IF NOT EXISTS sits_usuario_seq
    AS INTEGER
    INCREMENT 1
    START 1;

CREATE TABLE sits_usuario (
  id INT NOT NULL PRIMARY KEY DEFAULT nextval('sits_usuario_seq'),
  nome VARCHAR (220) NOT NULL,
  created DATE NOT NULL,
  modified DATE
);

INSERT INTO sits_usuario (id, nome, created)
VALUES (nextval('sits_usuario_seq'), 'Ativo', now());

INSERT INTO sits_usuario (id, nome, created)
VALUES (nextval('sits_usuario_seq'), 'Inativo', now());


INSERT INTO sits_usuario (id, nome, created)
VALUES (nextval('sits_usuario_seq'), 'Aguardando Confirmação', now());
