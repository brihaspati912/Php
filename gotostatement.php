 <?php
    $x = 10;
    if ($x + 2 === 12) {
        goto jump;
    }
    echo "x is $x";

    jump:

    echo "jumped";

    ?>