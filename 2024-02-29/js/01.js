//stejne jako v PHP se pole daji vytvorit 2 zpusoby
//$poleZelenina = [];
//$poleOvoce = array();

//muzeme pouzit pro pole const, const nas neomezuje v tom vnitrek pole menit
const poleZelenina = [];
const poleOvoce = new Array();

const poleBarev = ["red", "blue", "pink", "yellow", "black"];

//vypsani hodnot je stejne jako v PHP
console.log(poleBarev[3]); //yellow

//v PHP pocet prvku count($poleBarev)
console.log(poleBarev.length); //5

//console.log je jako var_dump
console.log(poleBarev);

//pozn. JS pole ma pouze ciselne indexy, nema zadne textove klice jako v PHP

//pridani nove hodnoty do pole
//push vlozi hodnotu na konec pole
//$poleBarev[] = "grey";
poleBarev.push("grey");
console.log(poleBarev);

//unshift vlozi hodnotu na zacatek pole
poleBarev.unshift("purple");
console.log(poleBarev);

//odstraneni polozky z konce pole
//popo prvek odstrani z pole a vrati hodnotu jako vysledek
const posledniPrvek = poleBarev.pop();
console.log(posledniPrvek);
console.log(poleBarev);

//odstraneni polozky ze zacatku pole
const prvniPrvek = poleBarev.shift();
console.log(prvniPrvek);
console.log(poleBarev);

//odstraneni polozky z libovolneho mista
//unset($poleBarev[2])
//param0: od jakeho indexu odstranovat
//param1: kolik prvku z pole odstranit
poleBarev.splice(2, 1);
console.log(poleBarev);

//splice se pouziva i pro vkladani na libovolne misto
//chcem vlozit bilou mezi zlutou a cernou
poleBarev.splice(3, 0, "white");
console.log(poleBarev);

//JS po odstraneni prvku prepocita indexy, nezustavaji v poli zadne diry

//zmena hodnoty je stejna jako v PHP
//$poleBarev[1] = "orange";
poleBarev[1] = "orange";

//tato funke zjsiti zad v poli hodnota existuje
//v PHP in_array()
console.log(poleBarev.includes("blue")); //false
console.log(poleBarev.includes("orange")); //true

//vrati index hledane hodnoty
//pokud je v poli vice stejnych hodnot, tka se vrati index prvni nalezene hodnoty
//pokud hodnota v poli neexistuje, tak se vrati index -1
console.log(poleBarev.indexOf("white")); //3
console.log(poleBarev.indexOf("brown")); //-1

