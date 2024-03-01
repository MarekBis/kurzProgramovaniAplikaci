//pokud bychom se chteli vyhnout pyramide smrti, tak muzeme zavolat funkce pomoci moderniho pristupu PROMISY

//prepiseme funkce tak, aby nepozivaly callback a misto toho vraceli slib(promise)
function funkceA () {
    return new Promise((uspech, neuspech) => {
        setTimeout(() => {
            //nasimulujeme si 90% uspesnost
            if (Math.random() > 0.1) {
                uspech("A hotovo");
            }else{
                neuspech("Funkce A se nezdarila");
            }
        }, Math.random() * 10 * 1000);
    });
}

function funkceB () {
    return new Promise((uspech, neuspech) => {
        setTimeout(() => {
            if (Math.random() > 0.1) {
                uspech("B hotovo");
            }else{
                neuspech("Funkce B se nezdarila");
            }
        }, Math.random() * 10 * 1000);
    });
}

function funkceC () {
    return new Promise((uspech, neuspech) => {
        setTimeout(() => {
            if (Math.random() > 0.1) {
                uspech("C hotovo");
            }else{
                neuspech("Funkce C se nezdarila");
            }
        }, Math.random() * 10 * 1000);
    });
}


funkceA().then((uspesnaZprava) => {
    console.log(uspesnaZprava);
    return funkceB();
}).then((uspesnaZprava) => {
    console.log(uspesnaZprava);
    return funkceC();
}).then((uspesnaZprava) => {
    console.log(uspesnaZprava)
    console.log("USPESNY KONEC");
}).catch((chybovaZprava) => {
    console.log(chybovaZprava);
    console.log("NEUSPESNY KONEC");
});