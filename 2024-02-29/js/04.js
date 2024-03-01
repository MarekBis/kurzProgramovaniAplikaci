//const nam nezakazuje menit obsah objektu

//protoze JS nema pole s textovyma klicema, tak se misto toho pouziva objekt
//na rozdil od PHP je mozne vytvorit objekt i bez classy
//v JS staci napsat {} a mame objekt vytvoreny

//snazte se psat klice bez mezer, s mezerama to jde ale msute pak klic mit obaleny v ""
const osoba = {
    jmeno: "Tony",
    rokNarozeni: 1992,
    "je zivy": true,
    hobby: ["baskytara", "plavani", "foceni"],
    notebook: {
        znacka: "msi",
        ram: 32,
        zaruka: false,
        prislusenstvi: ["brasna", "mys", "stylus"]
    },
    pozdravMe: () => { alert("Ahoj!!!") }
};

console.log(osoba);

//v php jsme pouzivali ->, tady v JS pouzivame .
console.log(osoba.jmeno); //Tony
console.log(osoba.hobby[1]); //plavani
//pokud ma vlasnost v sobe mezeru, tak neni mozne pouzit ., misto toho se musi pouzit []
console.log(osoba["je zivy"]); //true
console.log(osoba.notebook.prislusenstvi[1]); //mys


console.log(`Lektor ${osoba.jmeno} se narodil v roce ${osoba.rokNarozeni} a ma rad ${osoba.hobby[2]}.`);

//objekty mohou obsahovat metody

//vsechny vlasnosti v JS jsou public, muzete je cist a zmenit
osoba.jmeno = "Tonda";
console.log(osoba);
osoba.barvaOci = "hneda";
