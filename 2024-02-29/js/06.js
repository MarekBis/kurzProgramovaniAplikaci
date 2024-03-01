class Uzivatel{
    constructor(argRodneCislo,argJmeno){
        this.rodneCislo = argRodneCislo;
        this.jmeno = argJmeno;
    }
}
class Student extends Uzivatel{
    constructor(argRodneCislo,argJmeno,argObor,argRocnik){
        super(argRodneCislo,argJmeno)

        this.obor = argObor;
        this.rocnik = argRocnik;
    }
}