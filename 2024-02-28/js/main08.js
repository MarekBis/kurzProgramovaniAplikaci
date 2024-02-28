//"", '', ``
const veta = "Dneska je venku hrozna zima.";

//v PHP kdzy jsme chtlei zsjitit pocet znaku tak jsme napsali
//strlen($veta)

//vsechny metody a vlasnottivraci novou hdonotu, original v promenne zustava stejny

//v JS je kazda hodnota objekt, kazdy objekt ma sadu vlasntosti a metod
//pro zjisteni delky textu se pouziva vlastnost length
console.log(veta.length); //28

//metody se musi volat s ()
//v PHP  jsme pouzili funkci strtoupper($veta)
console.log(veta.toUpperCase()); //DNESKA JE VENKU HROZNA ZIMA.

//inclus vraci boolean a rika zda ve vete existuje hledany string
console.log(veta.includes("vedro")); //false
console.log(veta.includes("zima")); //true

//muzeme metody volat primo na nejake hodnote, nemusi byt v promenne
console.log("Tony ma rad koprovku.".length); //21

//odstrani mezery pred a za stringem
console.log(veta.trim());