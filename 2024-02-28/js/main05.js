//var je zastarala promenna. Nepouzivat!!!!
//const a let jsou nove promenne

//klicove slovo const nebo let psieme jen kdyz promennou vytvarime
const rokNarozeni = 1992;
console.log(rokNarozeni);
//hodnotu kterou vlozite do const promenne uz nemuzeme menit

//toto vyhodi chybu, protoze const nelze zmenit
//rokNarozeni = 2009; 

//pokud je const pole nebo objekt, tak muzeme menit jejich obsah

//promenna typu let
//hodnotu teto promenne muzeme libovolne menit
//toto se chova stejen jako PHP promenna $
let obor = "programovani";
console.log(obor); //programovani
obor = "marketing";
console.log(obor); //marketing


//JS stejene jako PHP muze kombinovat string a promenne do TEMPLATE STRING
let jmeno = "Tony";
let vek = 32;
//Lektorovi xxx je xxx let.
//s apostorfama a uvoziovkama template stirng nefunguje
//vsechnypromenne musi byt obalene v ${}
console.log("Lektorovi ${jmeno} je ${vek} let.");
console.log(`Lektorovi ${jmeno} je ${vek} let.`);

//scope
//v PHP byl scope omezeny funkci, tzn. vsehcny promenne, ktere vzniky uvnitr funkce tak mimo funkci neexistovaly
//v JS je scopem kazda {}, tzn. krome funkci omezuji rozsah promenne is if, for, while,...

//tento pes neni nicim scopovany
let pes = "haf";

if (true) {
    //kocka je scopvana {} tohoto ifu
    let kocka = "mnau";
    console.log(kocka);
    console.log(pes);

    if (true) {
        let koza = "meee";
        console.log(kocka);
        console.log(pes);
        console.log(koza);
    }

    //zde uz koza neexistuje, vyhodi chybu
    //console.log(koza);

}

console.log(pes);
//toto vyhodi chybu, protoze kocka neexituje mimo {}
//console.log(kocka); 


