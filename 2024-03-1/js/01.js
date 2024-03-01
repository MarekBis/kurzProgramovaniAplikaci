//existuji 2 promenne window a document

//v tomto objektu najdtee informace, ktere se tykaji prohlizece (velikost okna, historie, ...)
console.log(window);
//v tomto objektu najdete vsechny veci, ktere se tykaji te HTML stranky (elementy, udalosti, titulek, ...)
console.log(document);

function zobrazCas() {
    let cas=0;
    const casNaStrance = setInterval(() => {
        document.title = cas;
        cas++;
    }, 1000);
}
zobrazCas();

