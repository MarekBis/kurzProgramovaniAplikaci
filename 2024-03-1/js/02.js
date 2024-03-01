//kdyz chcce v js nejaky elmenet zmenit, tka ho musite nejdrive vyselectovat
//stejne jako kdyz stylujete elementy css, tak muste napsat spravny selector

//nejprve si ukazeme funkci bez selectoru
const elmKocka = document.getElementById("kocka");
console.log(elmKocka);

//muzeme si vypsat vnitrek elemntu jako string
console.log(elmKocka.innerHTML);
//muezeme zmenit hodnotu elmentu tim, ze do toho vlozime nejaky string
//string muze byt HTML
elmKocka.innerHTML = "Toto je novy <strong>text</strong> odstavce.";

//elment muzete nastylovat
elmKocka.style.backgroundColor = "bisque";
elmKocka.style.color = "aqua";
elmKocka.style.fontSize = "1.2rem";
elmKocka.style.borderRadius = "15px";
elmKocka.style.textAlign = "center";

//getElementById dokaze vyselctovat jen podle id
//naucime se ted univerzalni funkce, ktere selectuji pro CSS selectoru
//pokud nas zajima jen prvni nalezeny prvek: querySelector()
//pokdu nas zajimaji vsechn elemnty ktere splnuji selector: querySelectorAll()

const elmH1 = document.querySelector("h1");
//pokud pouzijete misto innerHTMK innerText, tak se stirng nebere jako HTML kod  a vypise se v surovem stavu (oescapovany)
elmH1.innerText = "Novy <em>titulek<em>";
//nastylujeme
elmH1.style.fontFamily = "courier";
elmH1.style.color = "lightblue";

//nyni chci vyselectit vsechna li
const poleElmLi = document.querySelectorAll("li");
console.log(poleElmLi);
//pole se neda stylovat, muste stylovat elmenty uvnitr pole

let pocet=0;
setInterval(() => {
    for (let elmLi of poleElmLi) {
        if (elmLi.innerHTML == "GGG"){
            if(pocet%2 == 0){
                elmLi.style.color = "red";
            }else{
                elmLi.style.color = "green";
            }
        }
    }    
    pocet++;
}, 1000);


//vsechna li zebry
document.querySelectorAll(".zebra li");

//forOf bez indexu 
//forEach index
//for index