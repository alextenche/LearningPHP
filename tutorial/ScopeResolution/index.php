<?php
require_once 'Product.php';
require_once 'Book.php';

$book = new Book('Dune', 19.99, '123456789');
echo "\n";
echo $book->getProductType(), "\n";
echo $book->getProductPrice(), "\n";
echo $book->getProductIsbn(), "\n";

// echo 'This ', $book->getProductType(), ' book has ISBN ', $book->getProductIsbn();\n