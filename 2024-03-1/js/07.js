document.querySelector("#pridej").addEventListener("click",()=>{
    //vytvorit novy element
    //tento novy elemnt existuje zatim jen v JS, protoze jsme ho jeste nepripojili do DOM
    const elmDiv = document.createElement("div");
    elmDiv.classList.add("kolecko");
    const r = Math.floor(Math.random() * 256);
    const g = Math.floor(Math.random() * 256);
    const b = Math.floor(Math.random() * 256);
    elmDiv.style.backgroundColor = `rgb(${r}, ${g}, ${b})`;
    elmDiv.innerHTML = `rgb(${r}, ${g}, ${b})`;
    
    //pridat kolecko do DOM
    const elmContainer = document.querySelector(".container");
    elmContainer.appendChild(elmDiv);
});
document.querySelector("#smazat").addEventListener("click",()=>{
    const poleKolecek = document.querySelectorAll(".kolecko");
    poleKolecek.forEach(element => {
        element.remove();
        
    });
});