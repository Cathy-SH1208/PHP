18
<html>
    <head><title>使用者管理</title></head>
    <body>
    <?php
        error_reporting(0);// 關閉錯誤訊息顯示
        session_start(); // 啟用 session，管理使用者登入狀態
        // 檢查是否已登入
        if (!$_SESSION["id"]) {
            // 若未登入，顯示提示並於3秒後跳轉至登入頁面
            echo "請登入帳號";
            echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
        }
        else{   
            // 已登入，顯示使用者管理畫面
            echo "<h1>使用者管理</h1>
                [<a href=14.user_add_form.php>新增使用者</a>] [<a href=11.bulletin.php>回佈告欄列表</a>]<br>
                <table border=1>
                    <tr><td></td><td>帳號</td><td>密碼</td></tr>";
            
            // 連接資料庫
            $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
             // 查詢 user 資料表所有使用者資料
            $result=mysqli_query($conn, "select * from user");
            while ($row=mysqli_fetch_array($result)){
                echo "<tr><td><a href=19.user_edit_form.php?id={$row['id']}>修改</a>||<a href=17.user_delete.php?id={$row['id']}>刪除</a></td><td>{$row['id']}</td><td>{$row['pwd']}</td></tr>";
            }
            // 表格結束
            echo "</table>";
        }
    ?> 
    </body>
</html>