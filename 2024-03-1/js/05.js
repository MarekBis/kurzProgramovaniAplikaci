//chceme pomoci JS vypnout vyhcozi chovani odkazu a formulare

const elmOdkaz = document.querySelector("a");
elmOdkaz.addEventListener("click", (udalost) => {
    //vypneme zakladni chovani odkazu
    udalost.preventDefault();

    //poku uzviatel kliken oke, vrati se true, jinak se vrati false
    const odpoved = confirm("Opravdu chcete odejit z webu bez ulozeni?");

    if (odpoved == true) {
        //uzivatel potvrdil dialog
        //odkazeme ho
        //window.location.href = "https://google.com";
        window.location.href = elmOdkaz.getAttribute("href");
    }
});


//preventDault muzeme pouzit pro validaci pomoci JS
const submitTlacitko = document.querySelector("[name=registrace]");
submitTlacitko.addEventListener("click", (udalost) => {
    //vypnuli jsme moznost odeslat formular
    udalost.preventDefault();

    //muzeme zde udela JS validaci driv nez to dorazi na server
    const inputJmeno = document.querySelector("[name=jmeno]");
    const zadanyText = inputJmeno.value;
    console.log(zadanyText);
    if (zadanyText.length < 3) {
        alert("vase jmeno je moc kratke");
        return;
    }
    const formular = document.querySelector("#registrace-form");
    formular.submit();

});