
select * from usuario;

create table usuario(
id int primary key auto_increment,
email varchar(255) not null unique,
senha varchar(255) not null,
nome varchar(255) not null,
sobrenome varchar(255) not null,
datanasc date
);

select * from usuario where email = 'asdf@asdf' and senha = '123456';
insert into  usuario values (default,'biel2@biel','123456','henrique','giovani','2000-12-11');
select * from usuario where id = '';
ALTER TABLE usuario ADD compartilhado varchar(255);
insert into usuario (compartilhado) values ('99') where id ='2';

create table anotacao(
id int primary key auto_increment,
titulo varchar(255),
texto varchar(255) not null,
data_informacao date,
hora time,
repetir enum ('nao','dia','semana','mes','ano'),
compartilha varchar(255),
natureza enum('editar','visualizar'),
criador int references usuario(id)
);

ALTER TABLE anotacao ADD compartilha varchar(255);
ALTER TABLE anotacao ADD repetir enum ('dia','semana','mes','ano');

insert into anotacao values (default,'teste','testando este sql','2025-06-24','2');

SELECT id FROM anotacao where criador ='2' ORDER BY id DESC LIMIT 1 ;
select * from anotacao where criador = '2' and id = '6';
select * from anotacao;

UPDATE anotacao SET titulo = 'teste', texto = 'teste', data_informacao = '2025-06-29' WHERE id = '3';

DELETE FROM anotacao WHERE id = '2' AND criador = '4';

drop table anotacao;


create table vinculo(
id int primary key auto_increment,
criador_anot int,
compa_anot int,
anota_vinculo int
);

select * from anotacao;
select * from vinculo;
insert into vinculo values (default,'2','4','3');

select * from vinculo where compa_anot = '2';
