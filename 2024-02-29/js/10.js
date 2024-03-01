//callback je argument, do ktereho se dava funkce, ktera se ma zavolat az po tom co se dokonci kod uvnitr prvni funkce

function funkceA (callback) {
    setTimeout(() => {
        console.log("A hotovo");
        callback();
    }, Math.random() * 10 * 1000)
}

function funkceB (callback) {
    setTimeout(() => {
        console.log("B hotovo");
        callback();
    }, Math.random() * 10 * 1000);

}

function funkceC () {
    setTimeout(() => {
        console.log("C hotovo");
    }, Math.random() * 10 * 1000)
}


//toto jsou asynchroni funkce
//poradi dokonceni muze byt zamichane nahodne
// funkceA();
// funkceB();
// funkceC();


//jak to udelat aby to probehlo za sebou?
//naimplemnentujem callback hell, nekdy se tomu rika taky pyramid of doom
//misto toho aby se zavolyl vsechny 3 funkce naraz tak zavolame funkci A a rkemen ji se pam pak spustit funkci B a funkce B bude mit nastarost spuousteni funkce C
funkceA(() => {
    funkceB(() => {
        funkceC();
    });
});