<?php
class Item
{
  public string $name;
  private int $price;

  public function __construct(string $name, int $price = 0)
  {
    $this->name = $name;
    $this->price = $price;
  }

  public function setPrice(int $price)
  {
    if($price < 0) {
        return false;
    }
    $this->price = $price;
    return true;
  }

  public function getPrice(string $end = "")
  {
    return number_format($this->price) . $end;
  }

  // public function getPrice(string $end = "")
  // {
  //   return number_format($this->price) . $end;
  // }
}

$php_basic = new Item("PHP入門", 2300);
$php_basic->setPrice(-1500);
// $php_basic->name = "PHP入門";
// $php_basic->price = 1500000;



echo $php_basic->name, "/", $php_basic->getPrice("円");
