<?php
require_once('abstracts/Book.php');

class PhysicalBook extends Book
{
    protected string $weight;

    public function getWeight(): string
    {
        return $this->weight;
    }
}
