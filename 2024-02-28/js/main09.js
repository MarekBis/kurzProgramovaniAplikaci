let score = -15;

//operatory jsou vsechny stejen ajako v PHP
score += 20;
console.log(score); //5
score = score + 10;
console.log(score); //15

score++;
score++;
score++;
console.log(score); //18
score--;
console.log(score); //17

//metody a vlasnosti cisel
let cislo = 8.14955;

//toto zaokrouhli cisla na urcity pocet desetinnych mist
console.log(cislo.toFixed(2)); //8.15

//samtona cisla moc metod nemaji
//matematicke metody a vlasnoti jsou v objketech Number nebo Math

//toto jsou funkce ktere vma prevedou string na cislo
console.log(Number.parseInt("3")); //3
console.log(Number.parseInt("3 kocky")); //3
console.log(Number.parseInt("3.94")); //3
console.log(Number.parseFloat("3.94")); //3.94
//existuje zkracena forma
//+() prevede stirng na cislo, abychom mohli scitat
console.log(+("55")); //55
console.log(2 + "5"); //"25"
console.log(2 + +("5")); //7

//NaN je hodnota, ktera rika, ze doslo ke spatne matematicke operaci
//Not a Number
console.log(2 * "velbloud");

//tato metoda vraci boolean a zjsituje zda zadana hodnota je int
console.log(Number.isInteger(5.5)); //false
console.log(Number.isInteger(7)); //true
console.log(Number.isInteger("7")); //false

//Math

//toto je vlastnost ktera ma v sobe ulozene cislo pi
console.log(Math.PI); //3.141592653589793
//funkce pro zaokrouhlovani
console.log(Math.ceil(5.111111)); //6
console.log(Math.floor(5.888888)); //5
console.log(Math.round(5.888888)); //6
console.log(Math.round(5.111111)); //5

//Math.random() nam vygeneruje nahodne cislo od 0 az do 0.9999999999999999
//muze padnou cista nula, nemuze nikdy padnout cista 1
console.log(Math.random());
console.log(Math.random() * 50); //0 az 49.999999999999
console.log(Math.floor(Math.random() * 15)); // cela cisla 0 az 14
//napiste prikaz ktery bude simulovat hraci kostku
console.log("Kostka");
console.log(Math.floor(Math.random()*10)+8);
