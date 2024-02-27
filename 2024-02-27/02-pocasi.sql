-- Active: 1708938811723@@127.0.0.1@3306@pocasi
CREATE DATABASE pocasi DEFAULT CHARSET utf8mb4;
SHOW TABLEs;
SELECT * FROM teploty;

--cas vyhledavani teploty bez indexu: 400ms
--cas vyhledavani teploty s indexem: 6ms
SELECT * FROM teploty WHERE cas > NOW() - INTERVAL 3 YEAR LIMIT 5;
CREATE INDEX cas_index ON teploty(cas);
SHOW CREATE TABLE teploty;
--smazani indexu, muste znat jeho nazev
DROP INDEX cas_index ON teploty;

--INDEXY ukladaji data do BINARY SEARCH TREE, je to strom, ktery ma uzly, kazdy uzel muze mit max 2 potomky, potomek, ktery ma hodnotu vyssi nez rodic je pravo, potomek ktery ma mensi hodnotu nez rodic je vlevo
--strom je datova struktura