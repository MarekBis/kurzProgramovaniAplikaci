//casovaci funkce nejsou blokujici, tzn. program spusti casovac pokracuje dal v kodu

//setTimeout()

setTimeout(() => {
    console.log("Ahooooj!");
}, 5000);

console.log("hahaha");
console.log("hehehe");


//jak zastavit interval
//interval, ktery planujeme zastavit musi byt ulozeny v promenne

function vypisuj(){
    const mujInterval = setInterval(() => {
        const cislo = Math.floor(Math.random() * 10);
        console.log(cislo);
        if (cislo == 0){
            clearInterval(mujInterval);
        }
        
    }, 100);
}
setInterval(() =>{
    vypisuj();
},5000);