console.log($);
const elmTlacitko = document.querySelector("#pridej-tlacitko");
elmTlacitko.addEventListener("click",()=>{
    $.ajax({
        url:"./server.php",
        method:"post",
        dataType:"json",
        data:{
            pocet:5,
            zobrazeno:0,
            statySubmit:true
        },
        succes: () => {
            console.log(odpovedServeru);
        }
    });
});