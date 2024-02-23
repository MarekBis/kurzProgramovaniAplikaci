<nav>
    <ul>
    <?php
    foreach($poleStranek AS $stranka) {
        if($stranka->menu== ''){
            continue;
        }
        echo "<li>
            <a href='?id-stranky={$stranka->id}'>
                {$stranka->id}
            </a>
        </li>";
    }
    ?>
    </ul>
</nav>