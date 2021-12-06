<?php

require_once "app/shop/book.php";
require_once "app/shop/review/book.php";

use app\shop\Book;
use app\review\Book as BookReview;

$book = new Book();
echo $book->getPrice(), "\n";

$book_review = new BookReview();
echo $book_review->getPoint();
