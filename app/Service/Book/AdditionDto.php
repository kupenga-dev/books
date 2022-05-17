<?php

namespace App\Service\Book;
use DateTime;

class AdditionDto
{
    public $title;
    public $author;
    public $yearOfPublished;

    public function __construct(string $title, string $author, DateTime $yearOfPublished)
    {
        $this->title = $title;
        $this->author = $author;
        $this->yearOfPublished = $yearOfPublished;
    }
}