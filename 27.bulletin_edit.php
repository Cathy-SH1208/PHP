27
<?php
    error_reporting(0); // 關閉錯誤訊息
    session_start();     // 啟動 session

    // 檢查是否登入，判斷 session 中是否有 id
    if (!$_SESSION["id"]) { 
        // 如果尚未登入，顯示提示並3秒後跳轉到登入頁面
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    } else {
        // 已登入，連線到資料庫
        $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

        // 建立 UPDATE SQL 指令、資料更新指定 bid 
        $sql = "update bulletin set
                    title='{$_POST['title']}',
                    content='{$_POST['content']}',
                    time='{$_POST['time']}',
                    type={$_POST['type']}
                where bid='{$_POST['bid']}'";

        // 執行更新，判斷是否成功
        if (!mysqli_query($conn, $sql)) {
             // 若執行失敗，顯示錯誤訊息並3秒後返回佈告列表頁面
            echo "修改錯誤";
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
        } else {
            // 若成功，顯示成功訊息並3秒後返回佈告列表頁面
            echo "修改成功，三秒鐘後回到佈告欄列表";
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
        }
    }
?>
