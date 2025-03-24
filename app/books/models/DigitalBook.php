<?php
require_once('abstracts/Book.php');

class DigitalBook extends Book
{
    protected string $format;

    public function __construct(string $title, string $author, int $year, string $format, string $price)
    {
        parent::__construct($title, $price, $author, $year);
        $this->format = $format;
    }

    public function getFormat(): string
    {
        return $this->format;
    }
}
