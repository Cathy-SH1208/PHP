<?php
    error_reporting(0);
    $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
    $result=mysqli_query($conn, "select * from bulletin");
    echo "<table border=2><tr><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";
    while ($row=mysqli_fetch_array($result)){
        echo "<tr><td>";
        echo $row["bid"];//輸出 bid 欄位（編號）
        echo "</td><td>";
        echo $row["type"];
        echo "</td><td>"; 
        echo $row["title"];// 輸出 title 欄位
        echo "</td><td>";
        echo $row["content"]; // 輸出 content 欄位
        echo "</td><td>";
        echo $row["time"];// 輸出 time 欄位
        echo "</td></tr>";// 結束這一列資料的表格列
    }
    echo "</table>"
?>
