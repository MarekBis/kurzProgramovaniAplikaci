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

--limit omezi pocet vysledku, ktere vypiseme
--limit se pise vzdy az na konec prikazu
--7 prvnich statu
SELECT * FROM zeme LIMIT 7;
--7 poslednich
SELECT * FROM zeme ORDER BY nazev_cesky DESC LIMIT 7;
--pokud u limitu uvedeme 2 cisla
--kolik polozek se ma preskocit
--kolik polozek vypsat
SELECT * FROM zeme LIMIT 5,8;

--group by nam seskupi stejne hodnoty dohormady
SELECT COUNT(*),kontinent  FROM zeme GROUP BY kontinent;
--alias
SELECT COUNT(*)as pocet,kontinent  FROM zeme GROUP BY kontinent;

--kdyz mate zgourpovany hodnoty, tak se misto WHERE pouziva HAVING
--vypiseme kontinenty, ktere maji vice nez 30 statu
SELECT COUNT(*) AS pocet, kontinent FROM zeme GROUP BY kontinent HAVING pocet > 30;
--union spoji 2 vysledky dvou selectu dohromady
--selecty musi byt na stejne tabulce se stejnimi atributy, jinak nelze vysledky spojit
--vypsat 5 prvnich statu a 7 poslednich statu
SELECT * FROM zeme LIMIT 5;
SELECT * FROM zeme ORDER BY nazev_cesky DESC LIMIT 7;

(SELECT * FROM zeme LIMIT 5) UNION (SELECT * FROM zeme ORDER BY nazev_cesky DESC LIMIT 7);

SHOW TABLES;
SELECT * FROM prezdivka;
SELECT * FROM uzivatel;
--kartezsky soucin vam nakombinuje vsechny radky prvni tbaulky se vsema radkama druhe tabulky
SELECT * FROM prezdivka, uzivatel;
--prechozi priklad neni moc uzitecny, k cemu je nam kombinace vsech hodnot
SELECT * FROM prezdivka, uzivatel WHERE prezdivka.uzivatel_id=uzivatel.id;
--join
--toto je inner join, vypise jen hodnoty, ktere k sobe nasli partaka
SELECT * FROM prezdivka JOIN uzivatel ON prezdivka.uzivatel_id = uzivatel.id;
--left join vypise komplete celou levou tabulku a pak k tomu bude hledat hodnoty z druhe tabulky
SELECT * FROM prezdivka LEFT JOIN uzivatel ON prezdivka.uzivatel_id = uzivatel.id;
SELECT * FROM prezdivka RIGHT JOIN uzivatel ON prezdivka.uzivatel_id = uzivatel.id;
--chceme vypsta vsechny prezdivky ktere k sobe nenasly partaka
SELECT * FROM prezdivka LEFT JOIN uzivatel ON prezdivka.uzivatel_id = uzivatel.id WHERE uzivatel.id IS NULL;