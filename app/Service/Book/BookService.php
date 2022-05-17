<?php

namespace App\Service\Book;

use App\Entity\Book;
use App\Service\Book\AdditionDto;

class BookService
{
    public function add(AdditionDto $dto): void
    {
        $book = new Book($dto->title, $dto->author, $dto->dateOfPublished);
    }
}