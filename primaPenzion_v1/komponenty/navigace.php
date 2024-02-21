<nav>
    <ul>
    <?php
    foreach($poleStranek AS $stranka) {
        echo "<li>
            <a href='?id-stranky={$stranka['id']}'>
                {$stranka['menu']}
            </a>
        </li>";
    }
    ?>
    </ul>
</nav>