
//chceme vypnout vsechny mazaci odkazy
const poleMazacichOdkazu = document.querySelectorAll(".mazaci-odkaz");
for (const odkaz of poleMazacichOdkazu) {
    odkaz.addEventListener("click", (udalost) => {
        //vypneme
        udalost.preventDefault();
        //confirm vypise dialog, ktery se zepta zda opravu uzivtael chce operaci provest
        //confirm vraci boolean

        const odpoved = confirm("Opravdu chcete stranku smazat?");

        if (odpoved == true) {
            const cilOdkazu = odkaz.getAttribute("href");
            
            //odkazeme
            window.location.href = cilOdkazu;
        }


    });
}
//razeni stranek
//potrebujeme mit knihovnu jquery a knihovnu jquery-ui
//npm install jquery
//npm install jqueryui
$("#seznam-stranek").sortable({
    update: () => {
        //toto je funkce, ktera se spusti pri jakekoliv zmene poradi v seznamu
        
        //budeme zde posilat ajax formular do serveru
        const poleIdStranek = $("#seznam-stranek").sortable("toArray");
        console.log(poleIdStranek);

        //kdyz uz zname poradi stranek, tak muzeme poslat ajax formular
        $.ajax({
            url: "./admin.php",
            method: "post",
            dataType: "text",
            data: {
                seraditSubmit: true,
                poleId: poleIdStranek
            },
            success: (odpovedServeru) => {
                console.log(odpovedServeru);
            }
        });
    }
});

