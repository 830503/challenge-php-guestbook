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

    function savePost(){
        $message = array("title"=>$this->title, "name"=>$this->name, "date"=>$this->date, "content"=>$this->content);
        $jsonData = json_encode(serialize($this->message));
        file_put_contents("posts.json", $jsonData);
    }
}



?>