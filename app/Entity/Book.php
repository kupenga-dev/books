<?php

namespace App\Entity;

use DateTime;

class Book
{
    /**
     * @var int|null
     */
    private $id;
    /**
     * @var string
     */
    private $title;
    /**
     * @var string
     */
    private $author;
    /**
     * @var DateTime
     */
    private $yearOfPublished;
    /**
     * Book construct
     * @param string $title
     * @param string $author
     * @param DateTime $yearOfPublished
     */
    public function __construct(string $title, string $author, DateTime $yearOfPublished)
    {
        $this->title = $title;
        $this->author = $author;
        $this->yearOfPublished = $yearOfPublished;
    }
    /**
     * Get the value of id
     */ 
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get the value of title
     */ 
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * Get the value of author
     */ 
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * Set the value of author
     *
     * @return  self
     */ 
    public function setAuthor($author): void
    {
        $this->author = $author;
    }

    /**
     * Get the value of yearOfPublished
     */ 
    public function getYearOfPublished(): DateTime
    {
        return $this->yearOfPublished;
    }

    /**
     * Set the value of yearOfPublished
     *
     * @return  self
     */ 
    public function setYearOfPublished(DateTime $yearOfPublished): void
    {
        $this->yearOfPublished = $yearOfPublished;
    }
}