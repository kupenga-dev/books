<?php

namespace App\Repository;

use App\Database\Connection;
use App\Entity\Book;

class BookRepository
{
    private $connection;

    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    public function add(Book $book)
    {
        $stmt = $this->connection->prepare("INSERT INTO books SET title = :title, author = :author, yearOfPublished = :yearOfPublished");

        $stmt->execute([
            'title' => $book->getTitle(),
            'author' => $book->getAuthor(),
            'date' => $book->getYearOfPublished()
        ]);

    }
}