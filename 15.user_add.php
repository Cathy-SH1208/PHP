15
<?php
error_reporting(0);  // 關閉錯誤訊息
session_start();     // 啟用 Session
// 檢查使用者是否已登入若未登入則導向登入頁面
if (!$_SESSION["id"]) {
    echo "請登入帳號";  // 提示使用者尚未登入
    // 使用 meta 標籤在 3 秒後自動導向登入頁面
    echo "<meta http-equiv='REFRESH' content='3; url=2.login.html'>";
} else {
     // 如果使用者已登入，則執行以下新增使用者的邏輯
    // 建立資料庫連線 mysqli_connect(主機, 使用者, 密碼, 資料庫名稱)
    $conn = mysqli_connect("dbyfree.net", "immust", "immustimmust", "immust");
    
    // 檢查連線是否成功，若失敗則顯示錯誤訊息並終止程式
    if (!$conn) {
        die("資料庫連線失敗: " . mysqli_connect_error());
    }

    // 組成 SQL 新增語法
    // 將表單送來的 id 與 pwd 寫入 user 表格中
    $sql = "INSERT INTO user (id, pwd) VALUES ('{$_POST['id']}', '{$_POST['pwd']}')";

    // 執行 SQL 新增語法檢查是否成功
    if (!mysqli_query($conn, $sql)) {
        // 如果執行失敗，顯示錯誤訊息
        echo "新增命令錯誤：" . mysqli_error($conn);
    } else {
        echo "新增使用者成功，三秒鐘後回到網頁";
        echo "<meta http-equiv='REFRESH' content='3; url=18.user.php'>";
    }

    // 關閉資料庫連線
    mysqli_close($conn);
}
?>
