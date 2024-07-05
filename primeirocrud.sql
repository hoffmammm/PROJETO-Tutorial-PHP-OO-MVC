CREATE DATABASE primeirocrud;

USE DATABASE primeirocrud;

CREATE TABLE client {
    id int not null auto_increment primary key,
    nome not null varchar(25),
    email not null varchar(40),
    cpf not null varchar(11),
    birth not null varchar(8),
    endereço not null varchar(200),
    phone not null int
};