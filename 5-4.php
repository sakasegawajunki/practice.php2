<?php
class Item
{
  public string $name;
  public int $price;

  public function __construct(string $name, int $price)
  {
    $this->name = $name;
    $this->price = $price;
  }

  public function getPrice(string $end = "")
  {
    return number_format($this->price) . $end;
  }
}

$php_basic = new Item("PHP入門", 1500000);
// $php_basic->name = "PHP入門";
// $php_basic->price = 1500000;



echo $php_basic->name, "/", $php_basic->getPrice("円");
