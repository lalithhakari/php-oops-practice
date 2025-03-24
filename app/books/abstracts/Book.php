<?php
require_once('abstracts/Product.php');

abstract class Book extends Product
{
    protected string $author;
    protected int $year;

    protected $test;

    public function __construct(string $title, string $price, string $author, int $year)
    {
        parent::__construct($title, $price);
        $this->author = $author;
        $this->year = $year;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getYear(): int
    {
        return $this->year;
    }
}
