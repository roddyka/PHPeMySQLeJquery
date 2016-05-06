drop database escartmarc;

create database escartmarc;

use escartmarc;

create table usuarios(
idusuario int primary key auto_increment,
nome varchar(30),
email varchar(30),
login varchar(30) unique,
senha varchar(32),
perfil enum('admin','user')
);

insert into usuarios values(null,'seila','seila@gmail.com','seila',md5('123'),'admin');
insert into usuarios values(null,'seila2','seila2@gmail.com','seila2',md5('123'),'user');

create table artemarcial(
idmarci int primary key auto_increment,
nomearte varchar(30),
valor double(8,2)
);

insert into artemarcial values (null,"Kung Fu",100.00);
insert into artemarcial values (null,"Wing Shun",150.55);
insert into artemarcial values (null,"Shuai jiao",150.55);
insert into artemarcial values (null,"Muay thai",200.00);
insert into artemarcial values (null,"JiuJitsu",200.00);

create table alunos(
idaluno int primary key auto_increment,
nome varchar(30),
email varchar(30),
dtnasc date,
cpf varchar(14),
foto varchar(30),
arte_marcial int,
foreign key (arte_marcial) references artemarcial(idmarci)
);

create table pagamento(
idpagamento int primary key auto_increment,
dtpag date,
id_aluno int,
foreign key (id_aluno) references alunos (idaluno)
);

