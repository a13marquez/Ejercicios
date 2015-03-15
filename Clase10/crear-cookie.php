<?php
    $veces = 1;
    if (isset($_COOKIE['veces'])){
        $veces = $_COOKIE['veces'];
    }
    setcookie('veces', ++$veces, time() + 3600);
?>
