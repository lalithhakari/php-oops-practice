<?php

interface BookInterface extends ProductInterface
{
    public function getAuthor(): string;
    public function getYear(): int;
}
