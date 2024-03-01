//povesime posluchac na element ctverec
//protoze kolecko je uvnitr ctveerce, tak se ho posluchac taky tyka
document.querySelector(".ctverec").addEventListener("click", (udalost) => {
    //target je element, ktery udalost vyvolal
    console.log(udalost.target);
    //currentTarget je elment, ktery udalost zachytil
    console.log(udalost.currentTarget);
});

