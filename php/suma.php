<?php
    $suma= 0;
    $a=$_GET['num'];
    $b=$_GET['div'];
    $suma=$a+$b;
    echo '<span>El resultado de la suma desde 1 a '.$b.' pero solo los divisbles por '.$a.' es: '.$suma.'</span>';
?>
