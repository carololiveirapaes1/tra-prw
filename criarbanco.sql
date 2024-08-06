DROP DATABASE IF EXISTS PETSHOPE;
CREATE DATABASE IF NOT EXISTS PETSHOPE;
USE PETSHOPE;

CREATE TABLE Cidade
(
    id     INT AUTO_INCREMENT,
    nome   VARCHAR(100),
    estado VARCHAR(2),
    PRIMARY KEY (id)
);

CREATE TABLE Pessoa
(
    id        INT AUTO_INCREMENT,
    nome      VARCHAR(100),
    email     VARCHAR(100),
    endereco  VARCHAR(50),
    bairro    VARCHAR(50),
    cep       VARCHAR(50),
    id_cidade INT,
    PRIMARY KEY (id),
    CONSTRAINT FK_PessoaCidade FOREIGN KEY (id_cidade) REFERENCES Cidade(id)
);

CREATE TABLE Animal
(
    id             INT AUTO_INCREMENT,
    nome           VARCHAR(100),
    especie        VARCHAR(100),
    raca           VARCHAR(50),
    data_nascimento DATE,
    castrado       BOOL,         
    id_pessoa      INT,
    PRIMARY KEY (id),
    CONSTRAINT FK_AnimalPessoa FOREIGN KEY (id_pessoa) REFERENCES Pessoa(id)
);