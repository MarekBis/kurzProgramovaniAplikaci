//for, while jsou stejny jako v PHP

//tato promenna neni scopovana cyklem while
//tato promenna existuje i po skonceni cyklu
let pocitadlo = 0;
while(pocitadlo < 5) {
    console.log(pocitadlo);
    pocitadlo++
}
console.log("--------------------------");

console.log(pocitadlo); //5

console.log("--------------------------");
//promenna counter je scopovana cyklem for
//po tom co cyklus skonci tak promenna prestane existovat
for (let counter = 0; counter < 5; counter++) {
    console.log(counter);
}
console.log("--------------------------");
//console.log(counter); //chyba promenna neexistuje
console.log("--------------------------");

const poleZelenina = ["celer", "kedlubna", "paprika", "mrkev", "cuketa"];

poleZelenina.forEach(element => {
    console.log(element);
});
//tato metoda forEach bere jene 1 parametr
//tim parametrem je anonymni funkce
//s kazdou hodnot poli se spusti tato anonymni funkce
//anonymni funkce bere 2 parametry
//do prvniho parametru se nam vlozi hodnota poloky
//do sruheo parametru s enam vlozi index polozky
poleZelenina.forEach(function(hodnota, index) {
    console.log(index);
    console.log(hodnota);
});
console.log("--------------------------");
//!!!anonymni funkce ma v sobe zase nepredvidatelne chovani
//misto aononymni funkce se nove pouziva arrow funkce
poleZelenina.forEach((hodnota, index) => {
    console.log(index);
    console.log(hodnota);
});
