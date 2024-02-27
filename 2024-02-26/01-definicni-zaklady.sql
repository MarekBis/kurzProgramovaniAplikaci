-- Active: 1708938811723@@127.0.0.1@3306@zoo
--toto je komentar

/*
toto je
taky
komentar
*/

--toto je SQL soubor, kam budeme psat prikazy
--prikazy, ktere sem napiseme se samy nespusti, musime u kazde prikazu kliknout na tlacitko EXECUTE
--execute posle SQL prikaz do DB, pokud poslete prikaz do DB, tak uz neni cesty zpet, DB prikaz provede a neexistuje zadny prikaz, ktery by to mohl vzit zpet
--BACHA na to co pisete a executujete

--pripojeni k databazi
--nahore je tlacitko pro active connection, klikneme na nej a vybere proszatim libovolnou databazi, pote se nam ve spodnil panelu, objevi informace o tom , kde jsme pripojeny
--kdyz kdzy budete posilat prikazy, tak si zkontorlujte ze jste ve spravne databazi
--kdyz uz mame aktivni spojeni, tak muzeme vytvorit novou databazi, novou databazi muzete vytvorit at uz jste kdekoliv v systemu

--toto je prikaz, ktery vytvori novou datbazti s nazvem zoo
CREATE DATABASE zoo DEFAULT CHARSET utf8mb4;
--prepneme se do do nasi nove datbaze zoo
--toto je rpikaz, ktery zobrazi vsechny dostupne databaze
SHOW DATABASES;
--pokud byste byli v termialu, tak se pouzije prikaz USE
--pokud nejste v terminalu, tak tento prikaz nepouzivejte
USE zoo;
--pozn. plugin obcas blbne a vypise se cervene DB not selected, pokud se stoto stane, tak staci VSC vypnout a zapnout

--tento prikaz nam vypise jake tabulky mame k dispozici
SHOW TABLES;

--mazani DB
DROP DATABASE zoo;

--tvorba novyhc tabulek
--NOT NULL rika, ze atribut je povinny
CREATE TABLE vybeh (
    id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    jmeno VARCHAR(255) NOT NULL,
    plocha FLOAT NOT NULL,
    biotyp VARCHAR(255)
);

--tento prikaz vypise strukturu tabulky
DESC vybeh;

--mazani tabulky
DROP TABLE vybeh;
SHOW TABLES;

--DEFAULT rika jaka hodnota se ma dosadit, pokud nebude explicitne uvedena
CREATE TABLE chovatel (
    rodne_cislo INT UNSIGNED PRIMARY KEY,
    jmeno VARCHAR(255) NOT NULL,
    plat INT UNSIGNED NOT NULL DEFAULT 0
);

--pridani noveho sloupecku k uz existujici tabulce
ALTER TABLE chovatel ADD COLUMN email VARCHAR(255) NOT NULL DEFAULT "neuvedeno";
DESC chovatel;

--uz mame vsechny tabulky, ktere nemaji cizi klice, ted udelame tabulku zvire
--vytvorime atribut, ktery se bude pak chovat jako cizi klic a na konci kulate zavorky, cizic klic vytvorime, uvedeme jaky atirbut chcem zmenti na cizi klic a pak uvedeme na jakou tabulku a sloupecek se cizi klic odkazuje
CREATE TABLE zvire (
    id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    vybeh_id INT UNSIGNED,
    jmeno VARCHAR(255) NOT NULL,
    je_v_karantenne BOOLEAN NOT NULL DEFAULT 0,
    popis TEXT,
    hmotnost FLOAT,
    FOREIGN KEY (vybeh_id) REFERENCES vybeh(id)
);
--prikaz desc vam nevypise cizi klice
DESC zvire;
--zjsitime to pomoci prikazu SHOW CREATE
--zde zjistime i nazev ciziho klice
SHOW CREATE TABLE zvire;
--smazani ciziho klice, musime znat jmeno ciziho klice
ALTER TABLE zvire DROP FOREIGN KEY zvire_ibfk_1;
--cizi klic muzeme pridat uz existuji tabulce
ALTER TABLE zvire ADD FOREIGN KEY (vybeh_id) REFERENCES vybeh(id);

--vytovrime spojovaci tabulku
--spojovaci tabulka slozeny primarni klic, ktery s esklada ze dvou cizich klicu
CREATE TABLE zvire_chovatel (
    zvire_id INT UNSIGNED,
    chovatel_rodne_cislo INT UNSIGNED,
    PRIMARY KEY(zvire_id, chovatel_rodne_cislo),
    FOREIGN KEY (zvire_id) REFERENCES zvire(id),
    FOREIGN KEY (chovatel_rodne_cislo) REFERENCES chovatel(rodne_cislo)
);
show tables;
desc chovatel;
--prejmenujeme email na kontaktni_email a zmenime daotvy typ na TEXT
ALTER TABLE chovatel CHANGE COLUMN email kontaktni_email TEXT DEFAULT "neuvedeno";
desc chovatel;
