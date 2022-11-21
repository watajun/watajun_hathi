<?php

// 関数ファイルを読み込む
require_once __DIR__ . '/common/functions.php';

// データベースに接続
$dbh = connect_db();

?>

<!DOCTYPE html>
<html lang="ja">

    <?php include_once __DIR__ . '/_head.php' ?>


    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ハッティ</title>

<body>

    <?php include_once __DIR__ . '/_header.php' ?>

    <div class="warp">
        <div class="main">
            <img src="image/top.jpg" alt="画像">
        </div>
    </div>

        <div id="search_box">
            <form action="url" method="get" class="search_container">
                <input type="text" size="25" placeholder="キーワード検索"><input type="submit" value="検索">
            </form>
        </div>
    
    <div id="wrapper">
        <div id="main-content">
            <h3>新着クーポン</h3>
            <div class="main-deta">
                <img id="new" src="image/tyuuka.png" alt="#画像">
                <div class="shop-content">
                <a href="shoppage.php">
                    <p>地域：東京都荒川区</p>
                    <p>店名：RAMEN SHELTER</p>
                    <p>商品名：中華そば</p>
                    <p>価格：850円</p>
                    <p>投稿日時：2022年8月6日</p></a>
                </div>
            </div>

            <div class="main-deta2">
                <img id="new" src="image/tuke.png" alt="#画像">
                <div class="shop-content">
                <a href="shoppage.php">
                    <p>地域：東京都荒川区</p>
                    <p>店名：RAMEN SHELTER</p>
                    <p>商品名：魚介豚骨つけ麺</p>
                    <p>価格：850円</p>
                    <p>投稿日時：2022年8月6日</p></a>
                </div>
            </div>

            <div class="main-deta">
                <img id="new" src="image/miso.png" alt="#画像">
                <div class="shop-content">
                <a href="shoppage.php">
                    <p>地域：東京都荒川区</p>
                    <p>店名：RAMEN SHELTER</p>
                    <p>商品名：味噌ラーメン</p>
                    <p>価格：850円</p>
                    <p>投稿日時：2022年8月6日</p></a>
                </div>
            </div>

            <div class="main-deta2">
                <img id="new" src="image/tan.png" alt="#画像">
                <div class="shop-content">
                <a href="shoppage.php">
                    <p>地域：東京都荒川区</p>
                    <p>店名：RAMEN SHELTER</p>
                    <p>商品名：担々麺</p>
                    <p>価格：850円</p>
                    <p>投稿日時：2022年8月6日</p></a>
                </div>
            </div>
        </div>
    

    <div class="right-content">
        <img src="image/koukoku.jpg" alt="画像" class="right-content_img">

        <div class="news">
            <h2>お知らせ</h2>
                <ul>
                    <li>20xx.01.01<br>
                    <a href="#.html">お知らせ内容</a>
                    </li>
                    <li>20xx.01.01<br>
                    <a href="#.html">お知らせ内容</a>
                    </li>
                    <li>20xx.01.01<br>
                    <a href="#.html">お知らせ内容</a>
                    </li>
                </ul>
        </div>
        <img src="image/koukoku.jpg" alt="画像" class="right-content_img">
    </div>
    </div>

    <?php include_once __DIR__ . '/_footer.php' ?>

</body>
</html>
