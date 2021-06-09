<?php
class Item {
  public $name;
  public $price;
  public $image;

  public function __construct($name,$price,$image) {
    $this->name = $name;
    $this->price = $price;
    $this->image = $image;
  }


}
$lure1 = new Item('Yard',900,'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/juice.png');
$lure2 = new Item('Yard2',400,'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/coffee.png');
$lure3 = new Item('Yard3',600,'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/curry.png');
$lure4 = new Item('Yard4',1000,'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/pasta.png');

$items = array($lure1,$lure2,$lure3,$lure4);

?>


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
        <div class="header-logo"><a href="yard.php"><h1>YARDLURES</h1></a></div>
        <nav>
          <ul class="main-nav">
            <li><a href="#">LINEUP</a></li>
            <li><a href="#">ABOUT</a></li>
            <li><a href="yard_contact.php">CONTACT</a></li>
          </ul>
        </nav>
    </header>
    <div class="yard_linup wrapper">
      <h3 class="lineup-title">LINEUP</h3>
      <form action="yard_confilm.php" method="post">
        <?php foreach($items as $item): ?>
        <div class="yard-items">
          <img src="<?php echo $item->image ?>" alt="ルアーの写真" class="yard-item-image">
          <h3 class="yard-item-name"><?php echo $item->name ?></h3>
          <p class="yard-item-price">¥<?php echo $item->price ?>(税込)</p>
          <input type="text" value="0" name="#">
          <span>個</span>
        </div>
      <?php endforeach ?>
      </form>
      <input type="submit" value="注文する">
    </div>
    <footer>
      <div class="footer-contents wrapper">
        <a href="yard_lineup.php"><h1>YARDLURES</h1></a>
        <nav>
          <ul class="footer-nav">
            <li><a href="#">LINEUP</a></li>
            <li><a href="#">ABOUT</a></li>
            <li><a href="yard_contact.php">CONTACT</a></li>
          </ul>
        </nav>
      </div>
    </footer>
  </body>
</html>
