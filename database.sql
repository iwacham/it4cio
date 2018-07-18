create table pessoa
(
  codigo          serial not null
    constraint table_name_pkey
    primary key,
  nome            varchar(100),
  email           varchar(120),
  data_nascimento date
);

create table relacao_pessoa_dependente
(
  codigo serial not null
    constraint relacao_pessoa_dependente_pkey
    primary key,
  nome   varchar(100)
);

create table dependentes
(
  codigo          serial  not null
    constraint dependentes_pkey
    primary key,
  fk_pessoa       integer not null
    constraint dependentes_pessoa_fk
    references pessoa,
  fk_relacao      integer
    constraint dependentes_fk
    references relacao_pessoa_dependente,
  data_nascimento date,
  nome            varchar(100)
);

INSERT INTO public.relacao_pessoa_dependente (codigo, nome) VALUES (1, 'Conjuge');
INSERT INTO public.relacao_pessoa_dependente (codigo, nome) VALUES (2, 'Filho');
INSERT INTO public.relacao_pessoa_dependente (codigo, nome) VALUES (3, 'Secretária');
