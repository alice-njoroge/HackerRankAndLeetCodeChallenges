<?php
abstract class Book
{

    protected $title;
    protected  $author;

    function __construct($t,$a){
        $this->title=$t;
        $this->author=$a;
    }
    abstract protected function display();
}

class MyBook extends Book{
    private int $price;

     function __construct($t, $a, $p)
    {
        parent::__construct($t, $a);
        $this->price = $p;
    }

     function display()
    {
        print("Title: $this->title\n");
        print("Author: $this->author\n");
        print("Price: $this->price\n");
    }
}

//Write MyBook class


$novel=new MyBook("Title","Author",10);
$novel->display();