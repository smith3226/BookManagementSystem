<?php
class Book {
    private $title;
    private $author;
    private $year;


    //constructor
    public function __construct($title, $author, $year) {
        $this->setTitle($title);
        $this->setAuthor($author);
        $this->setYear($year);
    }

    //getter and setter method
    public function setTitle($title) {
        $this->title = $title;
    }

    public function setAuthor($author) {
        $this->author = $author;
    }

    public function setYear($year) {
        $this->year = $year;
    }

    //method to display the book details
    public function getDetails() {
        return [
            'title' => $this->title,
            'author' => $this->author,
            'year' => $this->year
        ];
    }
    
}



