<?php
    if (array_key_exists("obsah-submit", $_POST)) {
        $novyObsahSouboru = $_POST["obsah-souboru"];
        file_put_contents("./moje-soubory/dokument.txt", $novyObsahSouboru);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online dokument</title>
</head>
<body>
    <h1>Online dokument</h1>
    <!-- chci mi formular, kde bude textarea -->
    <!-- do textarery napisu nejaky text a kliku na tlacitko ulozit -->
    <!-- chci aby se text nekam ulozi a pri dalsi navsteve tohoto webu chic mit moznost v tom svem textu dal pokracovat -->
    

    <form action="" method="post">
        <label for="">Obsah souboru</label>
        <br>
        <textarea name="obsah-souboru" id="slon" cols="30" rows="30"><?php echo file_get_contents("./moje-soubory/dokument.txt"); ?></textarea>
        <br>
        <input type="submit" name="obsah-submit" value="Ulozit">
    </form>

    <!-- WYSIWYG -->
    <!-- doplnek (knihovna) TINYMCE -->

    <!-- toto je CDN odkaz, ktery do naseho progrmau pripoji cizi kod -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.8.3/tinymce.min.js"></script>
    <!-- zde knihovnu pomoci javascript aktivujeme -->
    <script>
        //vse co je zde uz neni HTML
        //v tomto bloku panuje JavaScript
        tinymce.init({
            selector: '#slon',
        });
    </script>
</body>
</html>