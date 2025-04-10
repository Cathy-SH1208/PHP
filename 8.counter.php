<?php
    session_start();
    if (!isset($_SESSION["counter"]))
        $_SESSION["counter"]=1; // 如果 "counter" 不存在，初始化它的值為 1
    else
        $_SESSION["counter"]++; // 如果 "counter" 存在，則將它的值加 1，
    echo "counter=".$_SESSION["counter"];
    echo "<br><a href=9.reset_counter.php>重置counter</a>";
?>
