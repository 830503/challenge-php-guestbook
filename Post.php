<?php
class Post 
{
    private $title;
    private $date;
    private $content;
    private $name;
    

    function __construct ($title, $name, $content){
        $this->title=$title;
        $this->name=$name;
        $this->content=$content;
        $this->date=date("h:i:s l d/m/y");

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

   public function savePost(){
       $newPost = array("title"=>$this->title, "name"=>$this->name, "content"=>$this->content, "date"=>$this->date);
       $jsonData = json_decode(file_get_contents("posts.json"), true);
       $jsonData[] = $newPost;
        //array_push($this->message, $newPost);
        $jsonData = json_encode($jsonData);
        file_put_contents("posts.json", $jsonData);
    
   }


}

    





?>