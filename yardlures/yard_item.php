<?php
class Item {
  public $name;
}
public function __construct($name,$price,$image) {
  $this->name = $name;
  $this->price = $price;
  $this->image = $image;
}
public function $getName() {
  return $this->name;

public function $getImage() {
  return $this->image;
}
public function $getTaxIncludedPrice() {
  return floor($this->price * 1.08);
}

}




?>
