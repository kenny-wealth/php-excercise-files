<?php

class Book {
    public $author = 'Ade';
    private $title;
    private $price;

    public function __construct($title, $price)
    {
        $this->title = $title;
        $this->price = $price;
    }

    public function printTitle()
    {
        echo "Title: $this->title <br/>";
    }

    public function printPrice()
    {
        echo "Price: $this->price <br/>";
    }

    public function printDescription()
    {
        echo "Description: Enjoy this fancy book titled $this->title written by $this->author<br/>";
    }
}

// To instantiate a new book
$mathsText = new Book("New General Mathematics", 1500);
$mathsText->printTitle();
$mathsText->printPrice();
$mathsText->printDescription();

echo '<hr>';

$chemistryText = new Book("New School Chemistry", 4500);
$chemistryText->printTitle();
$chemistryText->printPrice();
$chemistryText->printDescription();
$chemistryText->author = "Osei Yaw Ababio";
$chemistryText->printDescription();
