-- Active: 1708938811723@@127.0.0.1@3306@ukolnicek
CREATE DATABASE ukolnicek DEFAULT CHARSET utf8mb4;
use ukolnicek;
show TABLEs;

CREATE Table ukol(
    id_ukolu INT PRIMARY KEY AUTO_INCREMENT,
    popis_ukolu VARCHAR(255)
);
desc ukol;

INSERT INTO ukol set popis_ukolu="text";
select * from ukol;