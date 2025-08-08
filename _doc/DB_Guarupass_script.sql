create database DB_Guarupass;

use DB_Guarupass;

-- Tabelas

create table usuario
(
	id_usuario int not null auto_increment primary key,
    nome varchar(255) not null,
    usuario varchar(100) not null unique,
    senha varchar(60) not null,
    cpf char(12) not null unique,
    data timestamp not null,
    email varchar(255) not null unique,
    telefone char(15) not null,
    saldo decimal(10,2) not null,
    status enum('Ativo', 'Inativo') not null
);

create table cartao
(
	id_cartao int not null auto_increment primary key,
    id_usuario_cartao int not null,
    tipo_cartao enum('Cidadão', 'Escolar', 'VT') not null,
    codigo char(15) not null unique,
    saldo decimal(10,2) not null,
    expira date not null,
    status enum('Ativo', 'Inativo') not null
);

create table agendamento
(
	id_agendamento int not null auto_increment primary key,
    id_usuario_agendamento int not null,
    nome varchar(255) not null,
    email varchar(255) not null,
    cpf char(12) not null,
    celular varchar(255) not null,
    data datetime not null
);

create table transacoes
(
	id_transacoes int not null auto_increment primary key,
    id_usuario_transacoes int not null,
    id_cartao_transacoes int null,
    id_qrcode__transacoes int null,
    tipo enum('Debito', 'Pix') not null,
    valor decimal(10,2) not null,
    location varchar(255) not null,
    linha_onibus varchar(255) not null,
    data timestamp not null
);

create table qrcode
(
	id_qrcode int not null auto_increment primary key,
    id_usuario_qrcode int not null,
    codigo_unico varchar(255) not null unique,
    data_geracao timestamp not null,
    data_expiracao datetime not null,
    valor decimal not null,
    status enum('Ativo', 'Inativo') not null
);

-- Olhar as tabelas

select * from usuario;
select * from cartao;
select * from agendamento;
select * from transacoes;
select * from qrcode;

-- FK

alter table cartao 
add constraint fk_id_usuario_cartao foreign key (id_usuario_cartao) references usuario (id_usuario);

alter table agendamento 
add constraint fk_id_usuario_agendamento foreign key (id_usuario_agendamento) references usuario (id_usuario);

alter table  transacoes
add constraint  fk_id_usuario_transacoes foreign key (id_usuario_transacoes) references usuario (id_usuario);

alter table  transacoes
add constraint  fk_id_cartao_transacoes foreign key (id_cartao_transacoes) references cartao (id_cartao);

alter table  transacoes
add constraint  fk_id_qrcode__transacoes foreign key (id_qrcode__transacoes) references qrcode (id_qrcode);
    
alter table  qrcode
add constraint  fk_id_usuario_qrcode foreign key (id_usuario_qrcode) references usuario (id_usuario);


