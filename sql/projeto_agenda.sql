
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