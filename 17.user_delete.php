<?php
    error_reporting(0);// 關閉錯誤訊息
    session_start();  // 啟用 Session
    if (!$_SESSION["id"]) { // 如果尚未登入，提示使用者並自動跳轉到登入頁面
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{ 
        // 已登入，開始執行刪除作業  

        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");// 建立資料庫連線 mysqli_connect(主機, 使用者, 密碼, 資料庫名稱)
        $sql="delete from user where id='{$_GET["id"]}'";    // 從 user 資料表中刪除指定 id 的使用者資料
        #echo $sql;    // 偵錯用，顯示 SQL 指令
        if (!mysqli_query($conn,$sql)){
            echo "使用者刪除錯誤";
        }else{
            echo "使用者刪除成功";
        }
        echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";    // 自動重新導向到 user.php 頁面
    }
?>
