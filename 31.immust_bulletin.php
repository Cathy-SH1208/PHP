<html>
    <head><title>明新科技大學資訊管理系</title>
    <meta charset="utf-8">
    <link href="https://cdn.bootcss.com/flexslider/2.6.3/flexslider.min.css" rel="stylesheet">
    <script src="https://cdn.bootcss.com/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/flexslider/2.6.3/jquery.flexslider-min.js"></script>        
    <script>
        // 等待整個網頁載入完畢後，初始化 flexslider 並啟用 slide 動畫，從右到左滾動
        $(window).load(function() {
            $('.flexslider').flexslider({
                animation: "slide",
                rtl: true
            });
        });
    </script>
    <style>
        /* 全域設定，去除元素外邊距，文字顏色灰色，置中對齊 */
        *{
            margin:0;
            color:gray;
            text-align:center;
        }
        /* 頁首區塊背景白色 */
        .top{
             background-color: white;
        }
        /* 頁首容器設定彈性排列，垂直置中，左右間距 */
        .top .container{
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding:10px;
        }
        /* 標誌字體大小及粗體 */
        .top .logo{
            font-size: 35px;
            font-weight: bold;
        }
        /* 標誌圖片寬度設定，垂直置中 */
        .top .logo img{
            width: 100px;
            vertical-align: middle;
        }
        /* 頁首右側導覽字體大小及粗體 */
        .top .top-nav{
            font-size: 25px;
            font-weight: bold;       
        }
        /* 導覽連結移除底線 */
        .top .top-nav a{
            text-decoration: none;
        }
        /* 主選單背景色深灰，置中排列 */
        .nav {
            background-color:#333;
            display: flex;
            justify-content: center;
        }
        /* 主選單無點樣式、去除邊距和內距 */
        .nav ul {
            list-style-type: none;  
            margin: 0; 
            padding: 0; 
            overflow: hidden; 
            background-color: #333; 
        }
        /* 主選單項目浮左 */
        .nav li {
            float: left; 
        }
        /* 主選單連結樣式：區塊、白色字、置中、內距 */
        .nav li a {    
            display: block;  
            color: white;  
            text-align: center;  
            padding: 14px 16px;  
            text-decoration: none;  
        }
        /* 滑鼠懸停主選單連結背景變深色 */
        .nav li a:hover {
            background-color: #111; 
        }
        /* 下拉選單懸停時顯示內容 */
        .dropdown:hover .dropdown-content {
            display: block;   /* 使用 block 呈現下拉選單，垂直排列 */
        }
        /* 下拉選單項目懸停背景色 */
        li.dropdown:hover{
            background-color: #333;  
        }
        /* 下拉選單內容初始隱藏，定位絕對，設定背景及寬度 */
        .dropdown-content {  
            display: none;
            position: absolute;
            background-color: #333;
            min-width: 160px;
            z-index: 1;
        }
        /* 下拉選單連結字色黑，內距，移除底線，置左對齊 */
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }
        /* 輪播區背景黑色 */
        .slider{
            background-color: black;
        }
        /* 橫幅背景為漸層藍色，內距 */
        .banner{
            background-image: linear-gradient(#ABDCFF,#0396FF);
            padding:30px;
        }
        /* 橫幅標題內距 */
        .banner h1{
            padding: 20px;
        }        
        /* 師資介紹區塊，置中排列，背景白色，內距 */
        .faculty {
            display: block;
            justify-content: center;
            background-color:white;
            padding:40px;
        }
        /* 師資標題字體大小及顏色 */
        .faculty h2 {
            font-size: 25px;
            color: rgb(50,51,52);
            padding-bottom:40px;
        }
        /* 師資照片容器彈性排版，等距分布，垂直置中 */
        .faculty .container {
            display: flex;
            justify-content: space-around;
            align-items: center;
        }
        /* 單一師資連結，塊狀，移除文字底線 */
        .faculty .teacher{
            display:block;
            text-decoration: none;
        }
        /* 師資照片大小固定 */
        .faculty .teacher img{
            height: 200px;
            width: 200px;
        }
        /* 師資姓名文字顏色白色，背景半透明黑，置中 */
        .faculty .teacher h3{
            color: White;
            background-color: rgba(39,40,34,.500);
            text-align: center;           
        }
        /* 聯絡資訊區塊 */
        .contact {
            display: block;
            justify-content: center;
            margin-top: 30px;
            margin-bottom: 30px;                
        }
        /* 聯絡標題顏色與字體大小 */
        .contact h2{
            color: rgb(54, 82, 110);
            font-size: 25px;
        }
        /* 聯絡資訊容器彈性排列，置中 */
        .contact .infos{
            display:flex;
            margin-top: 30px; 
            justify-content: center;
        }
        /* 左側聯絡資訊區塊，文字左對齊，右邊距 */
        .contact .infos .left{
            display:block;
            text-align: left;
            margin-right: 30px;
        }
        /* 左側粗體字，顏色灰，字體大小及行高設定 */
        .contact .infos .left b{
            display:block;
            text-align: left;
            margin-top: 10px;
            text-decoration: bold;
            color: Gray;
            font-size: 18px;
            line-height: 18px;
        }
        /* 左側說明文字，顏色半透明深色，字體大小及左內距 */
        .contact .infos .left span{
            display:block;
            text-align: left;
            margin-top: 10px;
            color: rgba(39,40,34,0.5);
            font-size: 16px;
            padding-left: 27px;
        }
        /* 右側地圖區塊高度設定 */
        .contact .infos .right{
            height: 200px;               
        }
        /* 地圖 iframe 寬高及邊框設定 */
        .contact .infos .right iframe{
            width: 100%;
            height: 100%;
            border: 1px solid rgba(39,40,34,0.50);
        }
        /* 頁尾區塊彈性置中，背景深色，內距上下 30px */
        .footer{
            display: flex;
            justify-content: center;
            background-color: rgb(25,26,30);
            padding: 30px 0;
        }
        /* 登入彈出視窗初始隱藏，固定定位，半透明背景，設定大小及內距 */
        .modal {
            display: none; /* 預設隱藏 */
            position: fixed; /* 固定在視窗 */
            z-index: 1; /* 顯示層級最高 */
            right: 50;
            top: 50;
            width: 20%; /* 寬度 20% */
            height: 20%; /* 高度 20% */
            overflow: auto; /* 必要時滾動 */
            background-color: rgba(255,255,255,0.9); /* 半透明白背景 */
            padding-top: 50px;
        }
        /* 佈告欄區塊，置中，背景橘色，垂直內距 */
        .bulletin{
            display: block;
            justify-content: center;
            background-color: rgb(255,204,153);
            padding: 30px 0;
        }
        /* 佈告欄標題內距 */
        .bulletin h1{
            padding:10px;
        }
        /* 佈告欄表格樣式，邊框合併，字體設定 */
        .bulletin table{
            border-collapse:collapse;
            font-family: 微軟正黑體;
            font-size:16px; 
            border:1px solid #000;
        }
        /* 佈告欄表頭背景藍色，字白色 */
        .bulletin table th{
            background-color: #abdcff;
            color: #ffffff;
        }
        /* 佈告欄表格內容背景白色，字藍色 */
        .bulletin table td{
            background-color: #ffffff;
            color: #0396ff;
        }
    </style>
    </head>
    <body>
        <!-- 頁首區塊 -->
        <div class="top">
            <div class="container">
                <!-- 標誌區 -->
                <div class="logo">
                  <img src="https://github.com/shhuangmust/html/raw/111-1/IMMUST_LOGO.JPG">
                  明新科技大學資訊管理系
                </div>
                <!-- 頁首右側導覽 -->
                <div class="top-nav">
                  <a href=>明新科大</a>
                  <a href=>明新管理學院</a>
                  <!-- 點擊標籤顯示登入視窗 -->
                  <label onclick="document.getElementById('login').style.display='block'">登入</label>
                  <!-- 登入彈窗 -->
                  <div id="login" class="modal">
                    <!-- 點擊關閉按鈕隱藏視窗 -->
                    <span onclick="document.getElementById('login').style.display='none'">&times; 管理系統登入</span>
                    <!-- 登入表單，POST 傳送帳號密碼到 10.login.php -->
                    <form method=post action="10.login.php">
                        帳號：<input type=text name="id"><br />
                        密碼：<input type=password name="pwd"><p></p>
                        <input type=submit value="登入"> <input type=reset value="清除">
                    </form>
                  </div>  
                </div>
              </div>
        </div>
        <!-- 主選單 -->
        <div class="nav">   
            <ul>
                <li><a href="#home">首頁</a></li>
                <li><a href="#introduction">系所簡介</a></li>
                <li  class="dropdown"><a href="#faculty">成員簡介</a>
                    <!-- 下拉選單項目 -->
                    <div class="dropdown-content">
                        <a href="#faculty">黃老師</a>
                        <a href="#faculty">李老師</a>
                        <a href="#faculty">應老師</a>
                    </div>                       
                </li>
                <li><a href="#about">相關資訊</a></li>
            </ul>
        </div>
        <!-- 輪播區 -->
        <div class="slider">
            <div class="flexslider">
                <ul class="slides">
                    <li><img src="https://github.com/shhuangmust/html/raw/111-1/slider1.JPG" /></li>
                    <li><img src="https://github.com/shhuangmust/html/raw/111-1/slider2.JPG" /></li>
                    <li><img src="https://github.com/shhuangmust/html/raw/111-1/slider3.JPG" /></li>
                </ul>
            </div>
        </div>
        <!-- 佈告欄 -->
        <div class="bulletin">
           <h1>最新公告</h1>
            <?php
                // 連接資料庫
                $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
                // 從 bulletin 表查詢所有公告
                $result=mysqli_query($conn, "select * from bulletin");
                // 顯示公告表格表頭
                echo "<table border=2><tr><th>佈告編號</th><th>佈告類別</th><th>標題</th><th>佈告內容</th><th>發佈時間</th></tr>";
                // 逐筆列出公告資料
                while ($row=mysqli_fetch_array($result)){
                    echo "<tr><td>";
                    echo $row["bid"];
                    echo "</td><td>";
                    // 判斷佈告類別並顯示中文說明
                    if ($row["type"]==1) echo "系上公告";  
                    if ($row["type"]==2) echo "獲獎資訊"; 
                    if ($row["type"]==3) echo "徵才資訊"; 
                    echo "</td><td>"; 
                    echo $row["title"];
                    echo "</td><td>";
                    echo $row["content"]; 
                    echo "</td><td>";
                    echo $row["time"];
                    echo "</td></tr>";
                }
                echo "</table>";
            ?>
        </div>
        <!-- 系所簡介橫幅 -->
        <div class="banner" id="introduction">
            <h1>系所簡介</h1>
            <h1>歷年教育部評鑑皆榮獲一等</h1>
            <h1>明新科技大學資訊管理系</h1>
            <h1>全國私立科大第一資管系</h1>
        </div>
        <!-- 師資介紹區 -->
        <div class="faculty" id="faculty">
            <h2>師資介紹</h2>
            <div class="container">
                <a class="teacher" href="">
                    <img src="https://github.com/shhuangmust/html/raw/111-1/faculty1.jpg" />
                    <h3>黃老師</h3>
                </a>
                <a class="teacher" href="">
                    <img src="https://github.com/shhuangmust/html/raw/111-1/faculty2.jpg" />
                    <h3>李老師</h3>
                </a>
                <a class="teacher" href="">
                    <img src="https://github.com/shhuangmust/html/raw/111-1/faculty3.jpg" />
                    <h3>應老師</h3>
                </a>        
            </div>
        </div>
        <!-- 聯絡資訊區 -->
        <div class="contact" id="about">
                <h2>相關資訊</h2>
                <div class="infos">
                    <div class="left">
                        <b>明新科技大學管理學院大樓二樓</b>
                        <span>304新竹縣新豐鄉新興路1號</span>
                        <b> 電話:03-5593142</b>
                        <span>分機:3431、3432、3433</span>
                        <b> 傳真:03-5593142</b>
                        <span>分機:3440</span>
                    </div>
                    <div class="right">
                        <!-- Google 地圖嵌入 -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3044.185885150929!2d120.98912333466727!3d24.86332844316392!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1

