-- Active: 1708938811723@@127.0.0.1@3306@banka
CREATE DATABASE banka DEFAULT CHARSET utf8mb4;
show tables;
CREATE Table ucet(
    cislo_uctu INT UNSIGNED PRIMARY KEY,
    majitel VARCHAR(255) NOT NULL,
    stav INT NOT NULL DEFAULT 0
);
desc ucet;
INSERT INTO ucet set cislo_uctu=11233, majitel="Tony",stav=100000;
INSERT INTO ucet set cislo_uctu=56431, majitel="Pepa",stav=100;
INSERT INTO ucet set cislo_uctu=982314, majitel="Kuba",stav=-1000;

SELECT * FROM ucet;

--transakce
--transakce provede sadu prikazu jako jeden celek
--bude se porvedou vsechny nebo se vsechny zrusi
--tneto prikaz otevre transakci, vsehcny prikazy ktere prijdou po tomhle prikazu patri do spolecny transakce
START TRANSACTION;
UPDATE ucet set stav=stav-5000 WHERE cislo_uctu=11122;
UPDATE ucet set stav=stav+5000 WHERE cislo_uctu=11133;
COMMIT;
ROLLBACK;