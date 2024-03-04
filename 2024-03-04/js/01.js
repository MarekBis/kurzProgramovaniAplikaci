//overeni ze je jquery spravnme pripojeny
console.log($);

//jquery je knihovna, ktera usnadnuje psani JS
//drive byla hodne uzitecna, protoze klasicky vanilla JS toho moc neumel
//vanilla JS se ale zlepsil a v dnesni dobe jquery uz nikdo moc nepouziva
//jquery najdete ve starsich projektech, nove projekty se pisou spise v reactu nebo vue

//selectovani elementu
//vanilla JS
//toto vrati pole elementu
const poleLi = document.querySelectorAll("ul.slon li");
//JQ
//toto vrati objekt elementu (kolekce)
const kolekceLi = $("ul.slon li");
//VANILLA
//pole vs kolekce
//kdyz chceme vsechy li obarvit, tka musime pole proiterovat
for (const li of poleLi) {
    li.style.color = "green";
    li.style.fontFamily = "courier";
}
//JQ
//pokud se jedna o kolekci, tak volame funkci css
//toto se aplikuje pro vsehcny elementy, nemusime cyklovat
kolekceLi.css({
    "background-color": "lightblue",
    "font-size": "1.5rem"
});


//nastylovani konkretniho li
//pro pole

// vanilla

poleLi[1].style.fontWeight = 700;
//pro kolekci

// JQ
kolekceLi.eq(3).css({"font-weight": "700"});

//vsem paragrafum zmenit text

// VANILLA

const poleP = document.querySelectorAll("p");
for (const p of poleP) {
    p.innerHTML="Novy text";   
}

//JQ

const kolekceP = $("p");
kolekceP.html("Newer text");

//VANILLA

poleP[0].innerHTML = "Hello";
kolekceP.eq(1).html("World");

//EVENTS
//VANILLA
for (const p of poleP) {
    p.addEventListener("click", () => {
        console.log("Clicked VANILLA");
    });
}
//JQ
kolekceP.on("click",()=>{
    console.log("Clicked JQ");
})


//zmena barvy paragrafu po dvojkliknuti
//vanilla
for (const p of poleP) {
    p.addEventListener("dblclick", (udalost) => {
        udalost.currentTarget.style.color = "red"
    });
}

//JQ
kolekceP.on("dblclick", (udalost) => {
    //zde jsme vanilla element prevedli na jq element
    //obalime element do $()
    $(udalost.currentTarget).css({"background-color": "lightgreen"});

    //muzeme se vykaslat na jq a element stylovat klasickym zpusobem
    udalost.currentTarget.style.fontStyle = "italic";

});