<?php 
    if (($_POST["id"] == "john") && ($_POST["pwd"]=="john1234")) //如果帳號="john" 且 密碼="jonn1234"顯示成功
        echo "登入成功";
    else
        echo "登入失敗";//否則登入失敗
?>
