<?php
trait Tax
{

  public function getTax(): int
  {
    return 10;
  }
}

trait ForeignTax
{
  public function getTax(): int
  {
    return 20;
  }
}


class Item
{
  use Tax, ForeignTax {
    Tax::getTax insteadof ForeignTax;
    ForeignTax::getTax as getForeignTax;
  }
  private int $price;
}

class Service
{
  use Tax;
  private int $service_price;
}

$item = new Item;
echo $item->getTax(), "\n";

$service = new Service;
echo $service->getTax(), "\n";
