const elmKolecko = document.querySelector(".kolecko");

elmKolecko.addEventListener("click", () => {
    //contain vraci boolean podle toho jestli tma ta class e je nebo neni
    if (elmKolecko.classList.contains("slon")) {
        //pokud tma classa slon je tak ho odstranime
        elmKolecko.classList.remove("slon");
    } else {
        //pokud tam classa slon neni, tak ho pridame
        elmKolecko.classList.add("slon");
    }

    //toto udela to same jako ten nas horni if else
    // elmKolecko.classList.toggle("slon");

});


//tato udalsot se psuti pokud najedete neakm mysi
// elmKolecko.addEventListener("mouseenter", () => {});
//tato udalsot se spusti pokud odjedete mysi
// elmKolecko.addEventListener("mouseleave", () => {});