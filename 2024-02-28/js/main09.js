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