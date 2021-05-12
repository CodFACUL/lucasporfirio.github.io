create table menu
(
id int auto_increment
primary key,
texto varchar(100) not null,
acao varchar(200) not null
);

create table usuario
(
id int auto_increment
primary key,
nome varchar(60) not null,
email varchar(100) not null,
senha varchar(30) not null,
constraint usuario_email_uindex
unique (email)
);

INSERT INTO trabalho_final.USUARIO (EMAIL, SENHA) VALUES ('admin@admin.com', '123456');

create table pessoa
(
id int auto_increment
primary key,
nome varchar(60) not null,
email varchar(100) not null,
usu_id int not null,
datacadastro timestamp default CURRENT_TIMESTAMP not null,
dataalteracao timestamp null,
constraint pessoa_usuario_id_fk
foreign key (usu_id) references usuario (id)
);

