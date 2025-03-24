<?php
require_once('interfaces/ProductInterface.php');

abstract class Product implements ProductInterface
{
    protected string $title;
    protected string $price;

    public function __construct(string $title, string $price)
    {
        $this->title = $title;
        $this->price = $price;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getPrice(): string
    {
        return $this->price;
    }
}
