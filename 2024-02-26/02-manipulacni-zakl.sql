-- Active: 1708938811723@@127.0.0.1@3306@zoo
--zde budeme vkladat, upravovat a  mazat data v tabulkach
SHOW TABLES;

--vlozeni noveho zaznamu do tabulky
INSERT INTO vybeh SET jmeno="Velka Afrika", biotyp="savana", plocha=3000;

SELECT * FROM vybeh;
INSERT INTO vybeh SET biotyp="ocean",plocha=1500,jmeno="Podzemni akvarium";

INSERT INTO zvire set jmeno="lev",hmotnost=200,popis="Tento lev rad spi",vybeh_id=1;
--vlozit vice zviratek 1 prikazem se da pomoci VALUES
--VALUES ma 2 formy implicitni atributy a explicitni atributy
--implicitni atributy
INSERT INTO zvire VALUES (
    NULL,
    2,
    "zralok",
    1,
    "Tento zralok je na samotce, protoze kouse.",
    540
), (
    NULL,
    2,
    "Meduza",
    0,
    "Nic nevi.",
    0.5
), (
    NULL,
    1,
    "zirafa",
    0,
    "Tato zirafa vi vsechno a silha",
    506
);
--explicitni forma VALUES
INSERT INTO zvire (jmeno,hmotnost,popis,vybeh_id) VALUES ("zebra",300,"Ma pruhy",1),("zirafa",809,"Nesilha",1);

SELECT * FROM zvire;

DELETE FROM zvire;
-- minus zebra gg 
DELETE FROM zvire WHERE id=5;

--minus lightweights
DELETE FROM zvire WHERE hmotnost<500;

UPDATE zvire SET hmotnost=hmotnost+10 WHERE id=6;

INSERT INTO chovatel set email="tonda.tonda@email.cz",jmeno="Tony",plat=80000,rodne_cislo=6454531;

INSERT INTO chovatel set email="pepha@email.cz",jmeno="Pepa",plat=60000,rodne_cislo=5463217;
SELECT * FROM chovatel;
SELECT * FROM zvire_chovatel;

--o obe zirafy se stara Tony, a ozraloka se stara Tony i Pepa
INSERT INTO zvire_chovatel SET chovatel_rodne_cislo=6454531,zvire_id=4;
INSERT INTO zvire_chovatel SET chovatel_rodne_cislo=6454531,zvire_id=6;
INSERT INTO zvire_chovatel SET chovatel_rodne_cislo=6454531,zvire_id=2;
INSERT INTO zvire_chovatel SET chovatel_rodne_cislo=5463217,zvire_id=2;

