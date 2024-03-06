<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kotatka</title>
</head>
<body>
    <h1>Kotatka</h1>

    {{-- toto je funkce, kde si muze frontendak vypsat seznam vsech promennych, ktere mu backendak poslal --}}
    {{-- dd znamena dump and die --}}
    {{-- dd(get_defined_vars()) --}}

    <p>Vitejte na strance, kde najdete vsechny informace o kotatkach.</p>
    {{-- toto je komentar --}}
    <p>Aktualni pocet navstevniku: {{$pocetNavstevniku}}</p>
    {{-- do 250 prazdno, do 750 poloprazdno, do 1000 plno--}}
    <p>
        Stav kapacity: 
        @if($pocetNavstevniku < 250)
            <strong>prazdno</strong>
        @elseif($pocetNavstevniku < 750)
            <strong>poloprazdno</strong>
        @else
            <strong>plno</strong>
        @endif
    </p>

    {{-- frontendak od nas dostal pole jmen, achce je vypsat do ul seznamu --}}
    <ul>
        @foreach ($casyKrmeni as $cas)
            <li>{{$cas}}</li>
        @endforeach
    </ul>
    {{-- //tabulka --}}
    <table border="solid 1px">
        <tr>
            <th>Jmeno</th>
            <th>Vek</th>
            <th>Barva</th>
        </tr>
        @foreach ($poleKotatek as $kote)
        <tr>
            <td>{{$kote->jmeno}}</td>
            <td>{{$kote->vek}}</td>
            <td>{{$kote->barva}}</td>
        </tr>
            
        @endforeach
    </table>
    <h3>Kote mesice</h3>
    <p>Nejhodnejsi kote: {{$koteMesice->jmeno}}</p>

    <a href="{{route('formularRoute')}}">formular</a>


    {{-- frontendak  muze v sablone blade pouzivat zjednodusenou sytanxi php --}}
    {{-- tato struktur zjsiti zda promenna existuje a pokud existuje, tak se vykona kod v tele struktury --}}
    @isset($upozorneni)
        <h2>Mimoradna zprava</h2>
        <p>{{$upozorneni}}</p>
    @endisset
    


    {{-- toto je odkazovani pomoci url --}}
    {{-- <a href="/napiste-nam">Prejit na kontakty</a> --}}

    {{-- toto je odakzovani pomoci jmena routy --}}
    <a href="{{route('kontaktRoute')}}">Prejit na kontakty</a>
</body>
</html>