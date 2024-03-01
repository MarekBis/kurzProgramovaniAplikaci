//napiste interval, ktery bude postupne vypisovat cisla 0 az 10
//kazdou sekundu nove cislo
//na cisle 10 interval zastavte
let cislo=prompt("Zadej od kolika pocitat");
const intervalCisla = setInterval(() => {
    console.log(cislo);
    
    if (cislo == 0) {
        clearInterval(intervalCisla);
        console.log("Happy new year");
    }
    cislo--;
}, 10);
