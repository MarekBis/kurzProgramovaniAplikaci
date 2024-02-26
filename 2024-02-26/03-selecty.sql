-- Active: 1708938811723@@127.0.0.1@3306@primakurzy
SHOW TABLES;

--toto vypise vsehcny zazanamy
SELECT * FROM zeme;

--chceme vypsat pouze staty lezici v Evrope
SELECT * FROM zeme WHERE kontinent="Evropa";

--misto * muzeme specifikovat jake sloupecky nas zajimaji
SELECT nazev_cesky, kontinent FROM zeme WHERE kontinent="Evropa";

--spojky AND a OR
SELECT * FROM zeme WHERE kontinent="Evropa" AND mena="EUR";
SELECT * FROM zeme WHERE kontinent="Evropa" OR kontinent="Asie";
--pokud mame uvnitr where AND i OR, tak se nejprve vykona AND az pak OR, prednost lze vynutit ()

--chceme vsechny staty, ktere nelezi v Asii
SELECT * FROM zeme WHERE kontinent!="Asie";

--Chcme vsechny staty, ktere začinaji na "B"
SELECT * FROM zeme WHERE nazev_cesky LIKE "B%";
--staty co zacinaji na Ho
SELECT * FROM zeme WHERE nazev_cesky LIKE "Ho%";
--vsechny staty ktere konci na ie
SELECT * FROM zeme WHERE nazev_cesky LIKE "%ie";
--vsechny staty, ktere v sobe maji stirng ka
SELECT * FROM zeme WHERE nazev_cesky LIKE "%ka%"

-- toto na vypise kazdou hodnotu jen 1, pokud se objevi duplicita, tak ji zaignorujue
SELECT DISTINCT(mena) FROM zeme;

-- IN dela to same jako OR
SELECT * FROM zeme WHERE mena="EUR" OR mena="USD" OR mena="XOF";
SELECT * FROM zeme WHERE mena IN ("EUR", "USD", "XOF");

--razeni hodnot
--abecedne od A-Z, u cisel by to bylo vzestupne
SELECT * FROM zeme ORDER BY kontinent ASC; 
--abecedne od Z-A, u cisel by to bylo sestupne
SELECT * FROM zeme ORDER BY kontinent DESC;

SELECT * FROM zeme ORDER BY mena ASc, nazev_cesky DESC;