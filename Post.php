<?php
declare(strict_types=1);

class Post 
{
    private $title;
    private $date;
    private $content;
    private $name;

    function __construct ($title, $name, $content, $date){
        $this->title=$title;
        $this->name=$name;
        $this->message=$content;
        $this->date=$date("h:i:s l d/m/y");

    }

    public function getTitle(){
        return $this->title;
    }

    public function getDate(){
        return $this->date;
    }

    public function getContent(){
        return $this->content;
    }

    public function getName(){
        return $this->name;
    }
}



?>