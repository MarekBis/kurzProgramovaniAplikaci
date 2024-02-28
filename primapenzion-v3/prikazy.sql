-- Active: 1708938811723@@127.0.0.1@3306@penzion
CREATE DATABASE penzion DEFAULT CHARSET utf8mb4;
SHOW TABLes;

CREATE TABLE stranka (
    id VARCHAR(255) PRIMARY KEY,
    titulek VARCHAR(255),
    menu VARCHAR(255),
    obrazek VARCHAR(255),
    obsah TEXT,
    poradi INT DEFAULT 0
);

INSERT INTO stranka SET id="kocka",titulek="mnau",menu="cici",obrazek="primapenzion-pool-min.jpg",obsah="mnau nau mau";
SELECT * FROM stranka;