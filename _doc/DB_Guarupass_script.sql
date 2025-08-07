create database DB_Guarupass;

use DB_Guarupass;

-- Tabelas

create table usuario
(
	id_usuario int not null auto_increment primary key,
    nome varchar(255) not null,
    usuario varchar(100) not null,
    senha varchar(60) not null,
    cpf char(12) not null,
    data timestamp not null,
    email varchar(255) not null,
    telefone char(15) not null,
    saldo decimal(10,2) not null,
    status enum('Ativo', 'Inativo') not null
);

create table cartao
(
	id_cartao int not null auto_increment primary key,
    id_usuario_cartao int not null,
    tipo_cartao enum('Cidadão', 'Escolar', 'VT') not null,
    codigo char(15) not null,
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
    id_cartao int null,
    id_qr int null,
    tipo enum('Ativo', 'Inativo') not null,
    valor decimal(10,2) not null,
    location varchar(255) not null,
    linha_onibus varchar(255) not null,
    data timestamp not null
);

create table qrcode
(
	id_qrcode int not null auto_increment primary key,
    id_qrcode int not null,
    id_usuario_qrcode int not null,
    codigo_unico varchar(255) not null,
    data_geracao timestamp not null,
    data_expiracao datetime not null,
    valor decimal not null,
    status enum('Ativo', 'Inativo') not null
);

