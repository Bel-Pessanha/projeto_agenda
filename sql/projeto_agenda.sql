
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
insert into  usuario values (default,'biel@biel','123456','henrique','giovani','2000-12-11');
select * from usuario where id = '';

create table anotacao(
id int primary key auto_increment,
titulo varchar(255),
texto varchar(255) not null,
data_informacao date,
criador int references usuario(id)
);

insert into anotacao values (default,'teste','testando este sql','2025-06-24','2');
select * from anotacao where criador = '2' and id = '6';
DELETE FROM anotacao WHERE id = '2' AND criador = '4';

select * from anotacao;

UPDATE anotacao SET titulo = 'teste', texto = 'teste', data_informacao = '2025-06-29' WHERE id = '3';

drop table anotacao;