<?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "請先登入";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{
        echo "歡迎, ".$_SESSION["id"]."[<a href=12.logout.php>登出</a>] [<a href=18.user.php>管理使用者</a>] [<a href=22.bulletin_add_form.php>新增佈告</a>]<br>";
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        $result=mysqli_query($conn, "select * from bulletin");
        echo "<table border=2><tr><td></td><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";
        while ($row=mysqli_fetch_array($result)){
            echo "<tr><td><a href=26.bulletin_edit_form.php?bid={$row["bid"]}>修改</a> 
            <a href=28.bulletin_delete.php?bid={$row["bid"]}>刪除</a></td><td>";
            echo $row["bid"];//輸出 bid 欄位（編號）
            echo "</td><td>";
            echo $row["type"];
            echo "</td><td>"; 
            echo $row["title"];// 輸出 title 欄位(標題)
            echo "</td><td>";
            echo $row["content"]; // 輸出 content 欄位
            echo "</td><td>";
            echo $row["time"];// 輸出 time 欄位
            echo "</td></tr>";// 結束這一列資料的表格列
        }
        echo "</table>";
    
    }

?>
