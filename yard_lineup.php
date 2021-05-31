<?php require_once('yard_data.php')?>


<!DOCTYPE html>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>yard_official-lineup</title>
    <meta name="description" content="沖縄ハンドメイドルアーラインナップ">
    <!-- CSS -->
    <link rel="stylesheet" href="yard.css">
  </head>

  <body>
    <header class="page-header wrapper">
        <!-- ここは画像 -->
        <div class="header-logo"><a href="yard.html"><h1>YARDLURES</h1></a></div>
        <nav>
          <ul class="main-nav">
            <li><a href="#">LINEUP</a></li>
            <li><a href="#">ABOUT</a></li>
            <li><a href="yard_contact.html">CONTACT</a></li>
          </ul>
        </nav>
    </header>
    <div class="yard_linup wrapper">
      <h3>LINEUP</h3>
      <form action="yard_confilm.php" method="post">
        <div class="yard-items">
          <img src="" alt="ルアーの写真" class="yard-item-image">
          <h3 class="yard-item-name">ここにルアーの名前</h3>
          <p class="yard-item-price">(税込)</p>
          <input type="text" value="0" name="">
          <span>個</span>
        </div>
      </form>
      <input type="submit" value="注文する">
    </div>
    <footer>
      <div class="footer-contents wrapper">
        <a href="yard_lineup.html"><h1>YARDLURES</h1></a>
        <nav>
          <ul class="footer-nav">
            <li><a href="#">LINEUP</a></li>
            <li><a href="#">ABOUT</a></li>
            <li><a href="yard_contact.html">CONTACT</a></li>
          </ul>
        </nav>
      </div>
    </footer>
  </body>
</html>