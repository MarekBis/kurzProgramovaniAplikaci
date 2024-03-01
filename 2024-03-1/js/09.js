//poku toto nevyhodi chybu, tak jste jquery spravne pripojili
console.log($);

//pripojime k tlacitku posluchac
//pokud dojde ke kliknuti, tak tlacitko odesla ajaxem formular do serveru
const elmTlacitko = document.querySelector("#pridej-tlacitko");
elmTlacitko.addEventListener("click", () => {
    //nejprve si ale zjsitimekolik statu uz uzivatel ma na obrazovce
    const poleLi = document.querySelectorAll("ul.seznam-statu li");
    const pocetZobrazenychStatu = poleLi.length;

    //posleme skrze ajax formular do serveru
    //url: kam se formular ma odeslat
    //method: jaky typ formulare to je get nebo post
    //dataType: v jakem formatu mam ocevat odpoved, pokud ocekavame json, tak ajx jsn automaticky prevede na pole
    //data: zde definujeme inputy formulare
    //success: funkce ktera se spusti v momente, kdy nam server odpovi
    $.ajax({
        url: "./server.php",
        method: "post",
        dataType: "json", //ocekavame odpoved ve formatu json
        data: {
            pocet: 5,
            zobrazeno: pocetZobrazenychStatu,
            statySubmit: true
        },
        success: (odpovedServeru) => {
            //v dataType jsme uvedli, ze odpoved prijde jako json
            //ajax na tu odpoved automaticky prevedl na pole
            //kdybyhcom neuvedli ze ocekavame json, tak si ten dany text musime asmi preved na pole
            //JSON.parse(); //toto prvede JSON string na pole
            //JSON.stringify(); //prvede pole na json string
            console.log(odpovedServeru);

            for (let zeme of odpovedServeru) {
                const elmLi = document.createElement("li");
                elmLi.innerHTML = zeme.nazev_cesky;

                document.querySelector(".seznam-statu").appendChild(elmLi);
            }
        }
    });

});