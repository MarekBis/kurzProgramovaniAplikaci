// psani class je hodne podobne PHP
// pred rokem 2016 to byla hruza (ES5)
// ES6 prineslo hodne novych veci (let, const, for of, forEach, classy)

//JS drive mel jen public vlastnosti
//v novem updatu uz je mozne pouzivat privatni a protected vlastnosti
//zastim to nikdo nepouziva
class Fixa {
    //v PHP se zda vypisovaly vlasnosti
    //v JS je vse public a nedela se to

    //v PHP function __construct()
    constructor (argBarva, argMaxObjem, argStav) {
        this.barva = argBarva;
        this.maxObjem = argMaxObjem;
        this.stav = argStav;
    }

    naplSe(argInkoust) {
        this.stav += argInkoust;
        if (this.stav > this.maxObjem) {
            this.stav = this.maxObjem;
        }
    }

    napis(argText) {
        const spotreba = argText.length * 0.85;
        
        //guarding clause (hlidac)
        if (spotreba > this.stav) {
            console.log("Nemame dost inkoustu!");
            return; //funkce skonci
        }

        this.stav -= spotreba;
        //console.log("%cCici", "color: pink");
        console.log(`%c${argText}`, `color: ${this.barva}`);
    }

} //endFixa

//tvoreni instanci je stejne jako v PHP
const fixa1 = new Fixa("red", 150, 120);
const fixa2 = new Fixa("green", 150, 0);
fixa1.napis("Ahoooooooj");
fixa2.napis("Ahoooooooj");
console.log(fixa2);
fixa2.naplSe(500);
fixa2.napis("Ahoooooooj");
console.log(fixa2);
