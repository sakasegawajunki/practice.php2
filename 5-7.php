<?php
class Item
{
  protected int $unit;

  public function __construct(int $unit)
  {
    $this->unit = $unit;
  }

  public function getUnit(): string
  {
    return $this->unit . "個";
  }
}

class Book extends Item
{
  private int $page;
  public function __construct(int $unit, int $page)
  {
    parent::__construct($unit);
    $this->page = $page;
  }
}

$eraser = new Item(5);
echo $eraser->getUnit(), "\n";

$book = new Book(5, 5);
echo $book->getUnit();
