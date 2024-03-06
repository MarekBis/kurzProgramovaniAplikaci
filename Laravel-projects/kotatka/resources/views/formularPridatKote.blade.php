<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KoteInsert</title>
</head>
<body>
    <h1>Vlozit nove kote</h1>
    <form action="/pridat-kote" method="post">
        @csrf //dulezite
        <label for="">Jmeno</label>
        <input type="text" name="jmeno">
        <label for="">Pohlavi</label>
        <input type="text" name="pohlavi">
        <label for="">Vek</label>
        <input type="number" name="vek">
        <label for="">barva</label>
        <input type="text" name="barva">
        <input type="submit" value="Odeslat kote na server">

    </form>
    
</body>
</html>