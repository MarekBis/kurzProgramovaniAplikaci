console.log("cici");

try {
    //pokud kod uvnitr bloku try nevyhodi chybu, tak program nice extra nevykona
    console.lg("haf");
}catch (chyba) {
    //pokud uvnitr bloku try doslo k chybe, tak program spusti tento kod uvnitr vetve catch
    console.log(chyba);
}