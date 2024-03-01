//event je jakakoliv akce uzivatele

//chceme po kliknuti na nadpis zmenit jeho barvu
//1) vyselectovat nadpis
//2) pripojit posluchac udalost na nadpis
//3) jaka udalost nas zajima napr "click"
//4) jaka funkce se ma spustit pokud k dane udalosti dojde

const elmH1 = document.querySelector("h1");
//pripojime poslucha a dame mu 2 a prametry
//prvni parametr je nazve udalsoti
//druhy parametr je arrow funkce
elmH1.addEventListener("click", () => {
    elmH1.style.color = "lightblue";
});


//po kliknuti na libovolne li se element zabarvi
const poleLi = document.querySelectorAll("li");
//musime pomoci cyklu pridat posluchat kazdemu elementu
for (let elmLi of poleLi) {
    elmLi.addEventListener("click", () => {
        elmLi.style.color = "lightgreen";
    });
}
document.querySelector(".koala").addEventListener("click", (udalost) => {
    console.log(udalost);
});

document.addEventListener("keyup", (udalost) => {
    console.log(udalost.key);
    console.log(udalost.code);
    console.log("---------------")
})